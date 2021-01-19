@extends('layouts.site')


@push('style')
    <style>

        .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link{color: red}


        .mobile1{height: 349px}
        .mobile1 img{width: 100%;height: 100%}
        .contact2{color: #fff;direction: rtl}
        .contact2{width: 100%;background-color: #19333d;padding: 5px 10px}
        .phone{background-color: none;padding: 45px 10px;text-align: right;line-height: 2em;margin-bottom: 15px}
        .email{background-color: none;padding: 40px 10px;text-align: right;margin-bottom: 15px}
        .email p{;line-height: 2em;padding: 0px;margin: 0px}
        .phone h4{padding-bottom: 10px}
        .email h4{padding-bottom: 10px}

        .phone p{max-width: 100%}

    </style>
@endpush

@section('content')
    <div class="mobile1">
        <img src="{{asset('front_files/image/julian-hochgesang-Dkn8-zPIbwo-unsplash.jpg')}}">


    </div>

    <div class="contact2">
        <div class="container">
            <div class="call">

                <div class="row">

                    <div class="col-md-6 phone">
                        <h2>vstore</h2>
                        <p>اهلا بكم  نحن موقع متخصص في تقديم خدمات للقطاع الصناعي في مصر نحن نعمل على الربط بين (الموردين - الشركات الصناعية) لتوفير قاعدة بيانات للخدمات والمواد المتاحة تسهل عملية التوريد وتحسن من كفاءة سلاسل الإمداد محليا</p>

                    </div>


                    <div class="col-md-6 email">
                        <h4>تواصل معنا </h4>

                        <p><i class="material-icons" style="font-size: 17px;padding-left: 3px">phone_android</i><span>01551463607</span></p>
                        <p><i class="material-icons" style="font-size: 17px;font-weight: normal;padding-left: 5px">email</i><span>Pharmastock@protonmail.com</span></p>



                    </div>



                </div>

            </div>
        </div>
    </div>







@endsection
