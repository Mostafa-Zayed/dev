<?php

namespace App\Services;

use App\Repositories\SubscriptionRepository;
use Carbon\Carbon;

class SubscriptionService
{
    public $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    public function isHasSubscription(int $businessId)
    {
        return $this->subscriptionRepository->isHasActiveSubscribe($businessId);
    }
    public function getActiveSubscription(int $businessId)
    {
        return $this->subscriptionRepository->getActive($businessId);
    }

    public function isHasActiveSubscription(int $businessId)
    {
        return $this->subscriptionRepository->isHasActiveSubscription($businessId);
    }

    public static function getExpireSubsriptionResponse()
    {
        return [
            'success' => 0,
            'msg' => __(
                'superadmin::lang.subscription_expired_toastr',
                [
                    'app_name' => config('app.name'),
                    'subscribe_url' => action([\Modules\Superadmin\Http\Controllers\SubscriptionController::class, 'index']),
                ]
            ),
        ];
    }

    public static function getLocationQuotaNotAvailableResponse()
    {
        return request()->ajax() && request()->wantsJson() ? ['success' => 0,'msg' => __('superadmin::lang.max_locations')] : view('superadmin::subscription.max_location_modal');
    }
}
