<?php

namespace App\Traits;

use Spatie\Permission\Models\Role;
use App\User;
use App\Contact;
use App\InvoiceScheme;
use App\InvoiceLayout;
use App\Unit;
use App\NotificationTemplate;
use Illuminate\Support\Facades\DB;
use App\BusinessLocation;
use App\Business;

trait DefaultResourcesBusiness
{
    use ReferenceCount;

    public static function addAdminRole($businessId, $userId)
    {
        $role = Role::create([
            'name' => 'Admin#' . $businessId,
            'business_id' => $businessId,
            'guard_name' => 'web', 'is_default' => 1,
        ]);
        User::find($userId)->assignRole($role->name);
    }

    public static function addCashierRole($businessId)
    {
        $cashier_role = Role::create([
            'name' => 'Cashier#' . $businessId,
            'business_id' => $businessId,
            'guard_name' => 'web',
        ]);

        $cashier_role->syncPermissions(config('erp.business.roles.cashier'));
    }

    public static function addDefaultCustomer($businessId, $userId, $contactId)
    {
        Contact::create([
            'business_id' => $businessId,
            'type' => 'customer',
            'name' => 'Walk-In Customer',
            'created_by' => $userId,
            'is_default' => 1,
            'contact_id' => $contactId,
            'credit_limit' => 0,
        ]);
    }

    public static function addDefaultInvoiceScheme($businessId)
    {
        InvoiceScheme::create([
            'name' => 'Default',
            'scheme_type' => 'blank',
            'prefix' => '',
            'start_number' => 1,
            'total_digits' => 4,
            'is_default' => 1,
            'business_id' => $businessId,
        ]);
    }

    public static function addDefaultInvoiceLayout($businessId)
    {
        return InvoiceLayout::create([
            'name' => 'Default',
            'header_text' => null,
            'invoice_no_prefix' => 'Invoice No.',
            'invoice_heading' => 'Invoice',
            'sub_total_label' => 'Subtotal',
            'discount_label' => 'Discount',
            'tax_label' => 'Tax',
            'total_label' => 'Total',
            'show_landmark' => 1,
            'show_city' => 1,
            'show_state' => 1,
            'show_zip_code' => 1,
            'show_country' => 1,
            'highlight_color' => '#000000',
            'footer_text' => '',
            'is_default' => 1,
            'business_id' => $businessId,
            'invoice_heading_not_paid' => '',
            'invoice_heading_paid' => '',
            'total_due_label' => 'Total Due',
            'paid_label' => 'Total Paid',
            'show_payments' => 1,
            'show_customer' => 1,
            'customer_label' => 'Customer',
            'table_product_label' => 'Product',
            'table_qty_label' => 'Quantity',
            'table_unit_price_label' => 'Unit Price',
            'table_subtotal_label' => 'Subtotal',
            'date_label' => 'Date',
        ]);
    }

    public static function addDefaultUnit($businessId, $userId)
    {
        Unit::create([
            'business_id' => $businessId,
            'actual_name' => 'Pieces',
            'short_name' => 'Pc(s)',
            'allow_decimal' => 0,
            'created_by' => $userId,
        ]);
    }

    public static function addDefaultNotificationTemplate($businessId)
    {
        $notification_templates = NotificationTemplate::defaultNotificationTemplates($businessId);
        foreach ($notification_templates as $notification_template) {
            NotificationTemplate::create($notification_template);
        }
    }

    public static function addDefaultLocation($businessId, $locationDetails, $invoiceSchemeId = null, $invoiceLayoutId = null)
    {
        $invoiceLayoutId                  = empty($invoiceLayoutId) ? DB::table('invoice_layouts')->where('is_default', 1)->where('business_id', $businessId)->value('id') : null;
        $invoiceSchemeId                = empty($invoiceSchemeId) ? DB::table('invoice_schemes')->where('is_default', 1)->where('business_id', $businessId)->value('id') : null;
        $businessLocationReferenceCount = self::setAndGetReferenceCount('business_location', $businessId);
        $businessLocationId             = self::generateReferenceNumber('business_location', $businessLocationReferenceCount, $businessId);
        $payment_types                  = self::addDefaultPaymentTypes();
        $location_payment_types = [];
        foreach ($payment_types as $key => $value) {
            $location_payment_types[$key] = [
                'is_enabled' => 1,
                'account' => null,
            ];
        }
        $location = BusinessLocation::create([
            'business_id' => $businessId,
            'name' => $locationDetails['name'],
            // 'landmark' => $location_details['landmark'],
            // 'city' => $location_details['city'],
            // 'state' => $location_details['state'],
            // 'zip_code' => $location_details['zip_code'],
            // 'country' => $location_details['country'],
            'invoice_scheme_id' => $invoiceSchemeId,
            'invoice_layout_id' => $invoiceLayoutId,
            'sale_invoice_layout_id' => $invoiceLayoutId,
            'mobile' => $locationDetails['contact_no'],//!empty($location_details['mobile']) ? $location_details['mobile'] : '',
            // 'alternate_number' => !empty($location_details['alternate_number']) ? $location_details['alternate_number'] : '',
            // 'website' => !empty($location_details['website']) ? $location_details['website'] : '',
            'email' => $locationDetails['email'],
            'location_id' => $businessLocationId,
            'default_payment_accounts' => json_encode($location_payment_types),
        ]);

        return $location;
    }

    public static function addDefaultPaymentTypes($location = null, $show_advance = false, $businessId = null)
    {

        if (!empty($location)) {
            $location = is_object($location) ? $location : DB::table('business_locations')->find($location);

            //Get custom label from business settings
            $custom_labels = Business::find($location->business_id)->custom_labels;
            $custom_labels = json_decode($custom_labels, true);
        } else {
            if (!empty($businessId)) {
                $custom_labels = Business::find($businessId)->custom_labels;
                $custom_labels = json_decode($custom_labels, true);
            } else {
                $custom_labels = [];
            }
        }

        $payment_types = ['cash' => __('lang_v1.cash'), 'card' => __('lang_v1.card'), 'cheque' => __('lang_v1.cheque'), 'bank_transfer' => __('lang_v1.bank_transfer'), 'other' => __('lang_v1.other')];

        $payment_types['custom_pay_1'] = !empty($custom_labels['payments']['custom_pay_1']) ? $custom_labels['payments']['custom_pay_1'] : __('lang_v1.custom_payment', ['number' => 1]);
        $payment_types['custom_pay_2'] = !empty($custom_labels['payments']['custom_pay_2']) ? $custom_labels['payments']['custom_pay_2'] : __('lang_v1.custom_payment', ['number' => 2]);
        $payment_types['custom_pay_3'] = !empty($custom_labels['payments']['custom_pay_3']) ? $custom_labels['payments']['custom_pay_3'] : __('lang_v1.custom_payment', ['number' => 3]);
        $payment_types['custom_pay_4'] = !empty($custom_labels['payments']['custom_pay_4']) ? $custom_labels['payments']['custom_pay_4'] : __('lang_v1.custom_payment', ['number' => 4]);
        $payment_types['custom_pay_5'] = !empty($custom_labels['payments']['custom_pay_5']) ? $custom_labels['payments']['custom_pay_5'] : __('lang_v1.custom_payment', ['number' => 5]);
        $payment_types['custom_pay_6'] = !empty($custom_labels['payments']['custom_pay_6']) ? $custom_labels['payments']['custom_pay_6'] : __('lang_v1.custom_payment', ['number' => 6]);
        $payment_types['custom_pay_7'] = !empty($custom_labels['payments']['custom_pay_7']) ? $custom_labels['payments']['custom_pay_7'] : __('lang_v1.custom_payment', ['number' => 7]);

        if (!empty($location)) {
            $location_account_settings = !empty($location->default_payment_accounts) ? json_decode($location->default_payment_accounts, true) : [];
            $enabled_accounts = [];
            foreach ($location_account_settings as $key => $value) {
                if (!empty($value['is_enabled'])) {
                    $enabled_accounts[] = $key;
                }
            }
            foreach ($payment_types as $key => $value) {
                if (!in_array($key, $enabled_accounts)) {
                    unset($payment_types[$key]);
                }
            }
        }

        if ($show_advance) {
            $payment_types = ['advance' => __('lang_v1.advance')] + $payment_types;
        }

        return $payment_types;
    }
}
