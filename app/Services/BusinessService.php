<?php 

namespace App\Services;

use App\Repositories\BusinessRepository;
use App\Business;
use App\Traits\DefaultResourcesBusiness;
use App\Traits\ReferenceCount;
use Carbon\Carbon;

class BusinessService
{
    use DefaultResourcesBusiness,ReferenceCount;

    public $businessRepository;

    public function __construct(BusinessRepository $businessRepository)
    {
        $this->businessRepository = $businessRepository;
    }

    public static function register($businessData,$userId)
    {
        return Business::create([
            'name'                   => $businessData['name'],
            'currency_id'            => $businessData['currency_id'],
            'sell_price_tax'         => 'includes',
            'default_profit_percent' => 25,
            'keyboard_shortcuts'     => config('erp.business.keyboard_shortcuts'),
            'ref_no_prefixes'        => config('erp.business.ref_no_prefixes'),
            'enabled_modules'        => config('erp.business.enabled_modules'),
            'enable_inline_tax'      => 0,
            'owner_id'               => $userId,
        ]);
    }

    public static function addDefaultResourcesToNewBusiness($businessId, $userId)
    {
        self::addAdminRole($businessId, $userId);
        self::addCashierRole($businessId);
        $constacReferenceCount = self::setAndGetReferenceCount('contacts',$businessId);
        $contactId = self::generateReferenceNumber('contacts',$constacReferenceCount,$businessId);
        self::addDefaultCustomer($businessId, $userId, $contactId);
        self::addDefaultInvoiceScheme($businessId);
        self::addDefaultInvoiceLayout($businessId);
        self::addDefaultUnit($businessId, $userId);
        self::addDefaultNotificationTemplate($businessId);
    }

    public static function addDefaultBusinessLocation($businessId,$locationsData)
    {
        return self::addDefaultLocation($businessId,$locationsData);
    }
}