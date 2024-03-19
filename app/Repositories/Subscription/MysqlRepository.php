<?php 

namespace App\Repositories\Subscription;

use App\Repositories\SubscriptionRepository;
use Illuminate\Support\Facades\DB;
use Modules\Superadmin\Entities\Subscription;

class MysqlRepository extends SubscriptionRepository
{
   public function getActive(int $businessId)
   {
        return Subscription::active($businessId)->first();
   }

   public function isHasActiveSubscription(int $businessId)
   {
        return Subscription::active($businessId)->exists();
   }
}