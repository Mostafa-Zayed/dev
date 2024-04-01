<!DOCTYPE html>
<html lang="{{getLanguage()}}" dir=@if(getLanguage() !='ar' ) 'ltr' @else 'rtl' @endif>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="App Landing page, RTL Version, Marwa El-Manawy, Application">
    <meta name="author" content="ERP TEC - https://dev.erptec.net/" />
    <link rel="icon" href="favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{__('lang_v1.register')}} - {{ config('app.name', 'POS') }}</title>

    @if(getLanguage() == 'ar')
    <link rel="stylesheet" href="{{asset('front/rtl/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/rtl/css/lightcase.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/rtl/css/style.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('front/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/lightcase.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/rtl/toastr.min.css')}}">
    
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    <style>
        .login-form {
            width: 80% !important;
        }
    </style>
</head>

<body>
    @inject('request', 'Illuminate\Http\Request')
    @if (session('status') && session('status.success'))
    <input type="hidden" id="status_span" data-status="{{ session('status.success') }}" data-msg="{{ session('status.msg') }}">
    @endif
    <div class="login-page">
        <div class="col-md-4 login-side-des">
            <div class="container-fluid">
                <div class="login-side-block">
                    <div class="row">
                        <div class="col-md-6" style="max-height: 20px;">
                            <a href="{{url('/')}}"><img src="{{asset('front/images/erp_logo.png')}}" alt="Logo" style="max-height: 40px;"/></a>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="custom-select" id="change_lang">
                                    @foreach(config('constants.langs') as $key => $val)
                                    <option value="{{$key}}" @if( (empty(request()->lang) && config('app.locale') == $key)
                                        || request()->lang == $key)
                                        selected
                                        @endif
                                        >
                                        {{$val['full_name']}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="login-partners">
                        <h5>Partners</h5>
                        <div class="partner-list">
                            <div class="row">
                                @foreach ($partners as $partner)
                                @if($loop->index > 2)
                                    @break
                                @endif    
                                <div class="col-md-4">
                                    <img src="{{$partner->image}}" class="img-fluid" alt="partner" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="container-fluid">
                <a href="index.html" class="res-logo"><img src="{{asset('front/images/logo-2.png')}}" alt="Logo" /></a>
                <div class="login-form">
                    <div class="login-form-head">
                        <h2>{{__('lang_v1.welcome_to')}} {{ config('app.name', 'ERP TEC') }}</h2>
                        <p>{{__('lang_v1.fill_form')}}</p>
                    </div>
                    {!! Form::open(['url' => route('business.postRegister'), 'method' => 'post',
                    'id' => 'business_register_form' ]) !!}
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="businessName">{{__('lang_v1.business_name')}}: *</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-user"></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" id="businessName" placeholder="{{__('lang_v1.business_name')}}" aria-label="Email address" required="">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="contact_no">{{__('lang_v1.business_telephone')}}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Your Phone" aria-label="Email address" required>
                                  
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="first_name">{{__('lang_v1.full_name')}}: *</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-face-smile"></span>
                                    </div>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="{{__('lang_v1.full_name')}}" aria-label="Full Name" required="">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">{{__('business.email')}}: *</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{__('business.email')}}" aria-label="Email address" required="">
                                 
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="password">{{__('business.password')}}: *</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-lock"></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="password" aria-label="Password" required="">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="password_confirmation">{{__('business.confirm_password')}}: *</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-lock"></span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" aria-label="Password" required="">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="currency_id">{{__('business.currency')}}: *</label>
                                {!! Form::select('currency_id', $currencies, '', ['class' => 'custom-select select2_register currency','id' => 'currency_id','placeholder' => __('business.currency_placeholder'), 'required']); !!}

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="checkboxes">
                            <input id="check-er" type="checkbox" name="accept_conditions">
                            <label for="check-er">{{__('lang_v1.agree')}} <a href="#" data-toggle="modal" data-target="#tc_modal"> @lang('lang_v1.accept_terms_and_conditions')</a></label>
                        </p>
                    </div>
                    <div class="form-group">
                        <button class="btn theme-btn btn-block">{{__('business.register')}}</button>
                    </div>
                    <div class="form-group login-desc">
                        <p> {{__('lang_v1.have_account')}} <a href="{{route('login')}}">{{__('lang_v1.login')}}</a></p>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="rrt" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <h4 class="modal-title" id="subscriptionModalLabel">سياسة الاشتراك</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>بند 1: تلتزم شركة ERP TEC بعدم افشاء أسرار او بيانات العميل المشترك المقدمة له أو التي يطلع عليها من خلال فترة الاشتراك بالبرنامج او بعدها.</p>
                    <p>بند 2: لا يجوز للعميل المشترك تجزئة الاشتراك، وعليه دفع الباقة كاملة مقدما.</p>
                    <p>بند 3: يعتبر التدريب المقدم من شركة فوالا هو خدمة مدفوعة ولها الحق في مطالبة العميل المشترك بها في أي وقت في العام الأول من الاشتراك، وبعد العام الأول يسقط هذا الحق.</p>
                    <p>بند 4: يلتزم العميل المشترك بعدم المماطلة أو التأخير في الدفعات المستحقة لشركة فوالا، والا لدى شركة فوالا الحق في إيقاف الحساب.</p>
                    <p>بند 5: لا يحق للعميل المشترك إيقاف الاشتراك نهائيا.</p>
                    <p>بند 6: يدفع العميل المشترك فترة إيقاف حسابه بالكامل في حالة تأخره عن سداد الاشتراك.</p>
                    <p>بند 7: لا يحق لشركة فوالا مسح الحساب نهائيا من على قاعدة بياناتها الا بعد ثلاثة شهور من إيقاف الاشتراك.</p>
                    <p>بند 8: في حالة فسخ الاشتراك من قبل العميل المشترك لا يحق له المطالبة بأي مبالغ مدفوعة مسبقا ويجب على العميل المشترك ايضا استكمال الدفعات المتأخرة عليه كاملة بدون خصم أي مصاريف.</p>
                    <p>بند 9: في حالة فسخ التعاقد من قبل شركة فوالا عليه ان يرد المبلغ المدفوع بالكامل للعميل المشترك قبل نهاية مدة الاشتراك.</p>
                    <p>بند 10: يجوز للعميل المشترك المطالبة باسترجاع اشتراكه في خلال عشرة أيام فقط من تاريخ بداية الاشتراك.</p>
                    <p>بند 11: تضاف أسماء ووصلات المشاريع المنجزة إلى دليل أعمال شركة فوالا تلقائيا.</p>
                    <p>بند 12: عند قيام شركة فوالا بإضافة اي أضافات او تعديلات على التطبيق يجب عليه اعلام العميل المشترك كتابيا او نصيا او إلكترونيا بإضافة هذا التحديث.</p>
                    <p>بند 13: علي شركة فوالا استضافة النظام بخوادم شركة فوالا ويتمتع العميل المشترك بالمميزات الاتية:</p>
                    <ul class="list-unstyled">
                        <li>1. نظام حماية عن طريق مضاد الفيروسات ومضاد فيروسات سبام.</li>
                        <li>2. تشفير كافة بيانات العملاء لمنع وصول اي مخترق لها في اي وقت.</li>
                        <li>3. تتغير كلمات مرور الاعضاء باعلي تشفير وهو ال هاش لحماية 100% ومنع من السرقة.</li>
                        <li>4. تامين لوحة التحكم للحماية من السبام.</li>
                        <li>5. فحص تلقائي للفيروسات كل 24 ساعة ومسح اي شئ مضر.</li>
                        <li>6. عمل نسخ احتياطي من ملفات قاعدة البيانات يومي واسبوعي وشهري.</li>
                        <li>7. تلتزم شركة فوالا بتقديم الدعم الفني طوال فترة التعاقد مباشرة ودون أي تأخير.</li>
                    </ul>
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Start JS FILES -->
    <!-- JQuery -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Wow Animation -->
    <script src="{{asset('front/js/wow.min.js')}}"></script>
    <!-- Owl Coursel -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <!-- Images LightCase -->
    <script src="{{asset('front/js/lightcase.min.js')}}"></script>
    <!-- scrollIt -->
    <script src="{{asset('front/js/scrollIt.min.js')}}"></script>
    <!-- Main Script -->
    <script src="{{asset('front/js/script.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#change_lang').change(function() {
                window.location = "{{ route('business.getRegister') }}?lang=" + $(this).val();
            });

            $('#business_register_form').submit(function(event) {
                event.preventDefault();
                let businessName = $('#businessName').val();
                let contactNo = $('#contact_no').val();
                let firstName = $('#first_name').val();
                let email = $('#email').val();
                let password = $('#password').val();
                let password_confirmation = $('#password_confirmation').val();
                let currencyId = $('#currency_id').val();
                let accept_conditions = $('#check-er').val();
                
                $.ajax({
                    url: "{{route('business.postRegister')}}",
                    method: "POST",
                       dataType: "json",
                    data: {
                        name: businessName,
                        contact_no: contactNo,
                        first_name: firstName,
                        email: email,
                        password: password,
                        password_confirmation: password_confirmation,
                        currency_id: currencyId,
                        accept_conditions: accept_conditions,
                    },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if(response.success){
                            toastr.success(response.msg);
                            window.location.replace(response.url);
                        }
                    },
                    error: function(response) {
                        let errorMessage = JSON.parse(response.responseText);
                        toastr.error(errorMessage.message);
                    }
                });
            })
        });
    </script>
</body>

</html>