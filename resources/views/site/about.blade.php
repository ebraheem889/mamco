@extends('layouts.site')


@push('style')
    <style>

        .header-one{background-image: url({{asset('front_files/image/mm.jpeg')}});height: 598px;background-repeat: no-repeat;background-size: 100% 100%}
        .header-one .header-alpha{background-color: rgba(0,0,0,0.8);height: 100%}
        .header-one .header-alpha .about{text-align: center;color: #fff;height: 598px}
        .header-one .header-alpha .about{display: flex;align-items: center}
        .header-one .header-alpha .about p{font-size: 21px;line-height: 2em}
        .header-one .header-alpha .about h2{font-size: 40px}
    </style>
@endpush

@section('content')

    <div class="header-one">
        <div class="header-alpha">
            <div class="container">

                <div class="about">
                    <div class="row">
                        <div class="col-12">
                            <h2>vstore</h2>
                            <p>اهلا بكم  نحن موقع متخصص في تقديم خدمات للقطاع الصناعي في مصر نحن نعمل على الربط بين (الموردين - الشركات الصناعية) لتوفير قاعدة بيانات للخدمات والموارد المتاحة تسهل عملية التوريد وتحسن من كفاءة سلاسل الإمداد محليا</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
