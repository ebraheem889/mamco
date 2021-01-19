@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">@lang('site.company_name')</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}"  autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="site.company_name_en" class="col-md-4 col-form-label text-md-right">@lang('site.company_name_en')</label>

                            <div class="col-md-6">
                                <input id="site.company_name_en" type="text" class="form-control @error('company_name_en') is-invalid @enderror" name="company_name_en" value="{{ old('company_name_en') }}"  autofocus>

                                @error('company_name_en')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="commercial_number" class="col-md-4 col-form-label text-md-right">@lang('site.commercial_number')</label>

                            <div class="col-md-6">
                                <input id="commercial_number" type="text" class="form-control @error('commercial_number') is-invalid @enderror" name="commercial_number" value="{{ old('commercial_number') }}"  autofocus>

                                @error('commercial_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">@lang('site.address')</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">@lang('site.telephone')</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}"  autofocus>

                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone2" class="col-md-4 col-form-label text-md-right">@lang('site.telephone2')</label>

                            <div class="col-md-6">
                                <input id="telephone2" type="text" class="form-control @error('telephone2') is-invalid @enderror" name="telephone2" value="{{ old('telephone2') }}"  autofocus>

                                @error('telephone2')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('site.E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('site.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('site.password_confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="approved_policy" id="approved_policy" {{ old('approved_policy') ? 'checked' : '' }}>

                                    <label id="approved_policy" class="form-check-label  @error('approved_policy') is-invalid @enderror" for="approved_policy">
                                        {{ __('site.approved_policy') }}
                                    </label>
                                    @error('approved_policy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('site.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="User_notification" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title">@lang('site.welcome')</h5>
            </div>
            <div class="modal-body justify-content-center text text-danger" style="direction: rtl">

                  <h5 class="text-center">الموافقة على شروط واحكام الاستخدام:</h5>
                <h6 style="line-height: 4vh"> 1- عند تصفح الموقع أو القيام باي نشاط عليه ستكون هذه موافقة رسمية/ قانونية منك على شروط واحكام موقع vstore-eg.com</h6>
                <h6 style="line-height: 4vh">2- إذا كنت غير موافق على شروط واحكام صفحتنا فنرجوا عدم استخدام الموقع وإدارة الموقع تحتفظ بحق تغير أي من هذه الأحكام و الشروط في أي وقت بدون شرط اعلام المستخدم أولا.</h6>
                <h5 class="text-center"> تفاصيل و أمان الحساب الخاص بك:</h5>
                <h6 style="line-height: 4vh">1- قبل استخدام موقع vstore-eg.com يجب ان تقوم بالتسجيل وانشاء حساب خاص عن طريق إدخال معلومات شخصية مثل اسم الشركة ورقم السجل التجاري وعنوان البريد الالكتروني , رقم الهاتف , العنوان و كلمة السر للحساب  الخ... 
                </h6>
                <h6 style="line-height: 4vh">2- يجب ان تقوم بإدخال معلومات صحيحة, حديثة وكاملة عن الشركة كما هو مطلوب في صفحة التسجيل وفي حالة تغير أي من هذه المعلومات يجب تحديثها على الموقع. </h6>
                <h6 style="line-height: 4vh">3- في حالة ادخال معلومات غير صحيحة أو غير واضحة ,فادارة الموقع لها الحق في تعليق الخدمة و رفض الشخص كمستخدم في المستقبل.</h6>
                <h6 style="line-height: 4vh"> 4- مستخدم الموقع مسئول عن الحفاظ على كلمة السر و الحساب الشخصي و يجب على المستخدم إبلاغنا في حالة الشك إنه تم استخدام حسابه الشخصي بدون علمه عن طريق اختراق كلمة السر.</h6>
                <h5 class="text-center">عند القيام باستخدام الموقع, تكون موافق على الآتي :</h5>
                <h6 style="line-height: 4vh"> 1- لن تقوم بارسال أي شيء يكون محتوياته غير مناسبة , يعبر عن تفرقة عنصرية, يشمل الفاظ خارجة أو يحتوي على ايحاءات جنسية.</h6>
                <h6 style="line-height: 4vh"> 2-  لن تقوم بارسال أي شيء ينتهك القوانين المصرية
                    أو الإعلان عن مواد أو أي شيء محظور الاستخدام أو ينتهك القوانين المصرية</h6>
                <h6 style="line-height: 4vh">3-  يجب ان تكون على علم ان عند القيام بطلبية يجب ان تكون مستعد لاستلامها و دفع المستحق. </h6>
                <h5 class="text-center"> تعريف مسئولية موقع vstore-eg.com :</h5>
                <h6 style="line-height: 4vh">1- يتيح للمستخدم المسجل اضافة (منتجات - خدمات) بصفحة البيع ليتمكن المستخدمين الآخرين المسجلين على الموقع من مشاهدتها في صفحة الشراء والتواصل مع المستخدم إن أرادوا.  </h6>
                <h6 style="line-height: 4vh">2- هذه الخدمة متاحة من خلال الهاتف والحواسيب. </h6>
                <h6 style="line-height: 4vh">3- الموقع لا يتدخل في العمليات التالية ( التوريد  ,  التصنيع , التوصيل أو حساب المبلغ المستحق)</h6>
                <h6 style="line-height: 4vh">4- نحن فقط نعمل كرابط بين الشركات (المستخدمين) و لا نتحمل أي مسئولية لأي نوع من الأضرار. </h6>
                <h5 class="text-center">توقف أو تغير الخدمة المقدمة:</h5>
                <h6 style="line-height: 4vh">الموقع يحتفظ بحق تغير أو تعليق أو وقف الخدمة تماما المتاحة من خلال الموقع وهذا يشمل التصفح أو التعامل مع أي من محتويات الموقع .</h6>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" style="width: 12%" id="hide_notification" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
