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
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css-rtl/plugins/extensions/toastr.css')}}">
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    <style>
        .login-form {
            width: 80% !important;
        }
    </style>
    <link rel="stylesheet" href="{{asset('new_assets/intlTelInput/css/intlTelInput.min.css')}}" />
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
                        <div class="col-md-6">
                            <a href="{{route('register')}}"><img src="{{asset('front/images/logo.png')}}" alt="Logo" /></a>
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
                        <h5>Ariel Partners</h5>
                        <div class="partner-list">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('front/images/partners/google.png')}}" class="img-fluid" alt="partner" />
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('front/images/partners/slack.png')}}" class="img-fluid" alt="partner" />
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('front/images/partners/spotify.png')}}" class="img-fluid" alt="partner" />
                                </div>
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
                        <h2>{{__('lang_v1.welcome_to')}}{{ config('app.name', 'ERP TEC') }}</h2>
                        <p>{{__('lang_v1.fill_form')}}</p>
                    </div>
                    {!! Form::open(['url' => route('business.postRegister'), 'method' => 'post',
                    'id' => 'business_register_form','files' => true ]) !!}
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
                                    @if($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="business_mobile">{{__('lang_v1.business_telephone')}}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mobile1" id="business_mobile" placeholder="Your Phone" aria-label="Email address" required="">
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fullName">{{__('lang_v1.full_name')}}: *</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-face-smile"></span>
                                    </div>
                                    <input type="text" class="form-control" name="first_name" id="fullName" placeholder="{{__('lang_v1.full_name')}}" aria-label="Full Name" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="signinEmail">{{__('business.email')}}: *</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="{{__('business.email')}}" aria-label="Email address" required="">
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
                                {!! Form::select('currency_id', $currencies, '', ['class' => 'custom-select select2_register currency','placeholder' => __('business.currency_placeholder'), 'required']); !!}

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
                        <button class="btn theme-btn btn-block">Get Started</button>
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
    <script src="{{asset('new_assets/intlTelInput/js/intlTelInput.min.js')}}"></script>

    <script>
        var input = document.querySelector("#business_mobile"),
            mobile_hidden = document.querySelector("#hidden_mobile");

        var iti = window.intlTelInput(input, {
            initialCountry: 'eg',
            preferredCountries: ["eg", "ae"],
            excludeCountries: ["il"],
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/utils.js",
        });

        var handleChange = function() {
            mobile_hidden.value = iti.getNumber()
        };

        // listen to "keyup", but also "change" to update when the user selects a country
        input.addEventListener('change', handleChange);
        input.addEventListener('keyup', handleChange);
    </script>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#change_lang').change(function() {
            window.location = "{{ route('business.getRegister') }}?lang=" + $(this).val();
        });

        $(".time_zone").val("Africa/Cairo").change();
        $("#country").val("Egypt").change();
        $(".currency").val("35").change();

        $("#business_register_form").submit(function(e) {
            var form = $(this);

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function(isConfirmed) {
                if (isConfirmed) {
                    form.submit();
                }
            });

            return false;
        })
    });
</script>

</html>