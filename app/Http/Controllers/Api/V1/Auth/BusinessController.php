<?php 

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\Login;
use App\Http\Requests\Api\V1\Auth\Register;
use Illuminate\Http\Request;
use App\Services\BusinessService;
use App\Services\UserService;
use App\traits\LogException;
use App\Traits\ResponseTrait;
use App\Utils\BusinessUtil;
use App\Utils\RestaurantUtil;
use App\Utils\ModuleUtil;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
class BusinessController extends Controller
{
    use LogException;
    use ResponseTrait;
    /*
    |--------------------------------------------------------------------------
    | BusinessController
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new business/business as well as their
    | validation and creation.
    |
    */

    /**
     * All Utils instance.
     */
    protected $businessUtil;

    protected $restaurantUtil;

    protected $moduleUtil;

    protected $mailDrivers;

    protected $businessService;

    protected $userService;

    /**
     * Constructor
     *
     * @param  ProductUtils  $product
     * @return void
     */
    public function __construct(
        BusinessService $businessService,
        UserService $userService,
        BusinessUtil $businessUtil,
        RestaurantUtil $restaurantUtil,
        ModuleUtil $moduleUtil
    ) {
        $this->businessService = $businessService;
        $this->userService     = $userService;
        $this->businessUtil = $businessUtil;
        $this->moduleUtil = $moduleUtil;

        $this->theme_colors = config('erp.theme_colors');

        $this->mailDrivers = config('erp.mailDrivers');
    }
    public function login(Login $request)
    {
        $user = $this->userService->getUserByEmail($request->email);
        if(! $user){
            return $this->failMsg(__('auth.failed'));
        }
        if ((!Hash::check($request->password, $user->password) && $request->email == $user->email && $request->email == $user->username)) {
            return $this->failMsg(__('auth.failed'));
        }
        return $this->successData([
            'token' => $user->createToken(request()->device_type)->plainTextToken,
            'user' => $user]);
    }

    public function register(Register $request)
    {
        if (isAllowRegister()) {
            try {
                DB::beginTransaction();
                $user = $this->userService->register($request->only(['first_name', 'email', 'password', 'contact_no']));

                $business = BusinessService::register($request->only(['name', 'currency_id']), $user->id);
                $user->business_id = $business->id;
                $user->save();
                BusinessService::addDefaultResourcesToNewBusiness($business->id, $user->id);
                $businessLocation = BusinessService::addDefaultBusinessLocation($business->id, $request->only(['name', 'email', 'contact_no']));
                Permission::create(['name' => 'location.' . $businessLocation->id]);
                DB::commit();
                //Module function to be called after after business is created
                if (config('app.env') != 'demo') {
                    $this->moduleUtil->getModuleData('after_business_created', ['business' => $business]);
                }

                //Process payment information if superadmin is installed & package information is present
                $is_installed_superadmin = $this->moduleUtil->isSuperadminInstalled();
                $package_id = $request->get('package_id', null);
                if ($is_installed_superadmin && !empty($package_id) && (config('app.env') != 'demo')) {
                    $package = \Modules\Superadmin\Entities\Package::find($package_id);
                    if (!empty($package)) {
                        Auth::login($user);

                        return redirect()->route('register-pay', ['package_id' => $package_id]);
                    }
                }

                return response()->json([
                    'success' => 1,
                    'msg' => __('business.business_created_succesfully'),
                    'url' => route('login')
                ]);

                // return redirect('login')->with('status', $output);
            } catch (\Exception $exception) {
                DB::rollBack();
                $this->logMethodException($exception);
                return response()->json([
                    'success' => 0,
                    'msg' => __('messages.something_went_wrong'),
                ]);
    
            }
        }
    }
}