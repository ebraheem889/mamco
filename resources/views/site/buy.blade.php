@extends('layouts.site')


@push('style')
    <style>

        /*Start Navbar*/





        nav
        {
            margin-bottom: 43px;
        }

        .navbar-light .navbar-brand
        {
            color: #fff;
            font-size: 26px;
        }

        .navbar-nav .nav-item .nav-link
        {
            color: #fff;
        }
        /*End Navbar */


        /*Start The Buy Form*/
        .form2
        {
            direction: rtl;
            text-align: right;
            background-color: #fff;
        }

        .form2 input
        {
            margin-top: 20px;
            margin-bottom: 5px;
            padding: 9px 10px;
            font-size: 1.1em;
            border: 1px solid #aaa;
            border-radius: 3px;
            outline: none;}
        .form2 input[type="search"]
        {
            width: 100%;
        }

        .form2 input::placeholder
        {
            color: #888;
        }
        /*End The Buy Form*/


        /*Start The Buy Table*/
        table{
            height: auto;
            font-size: 16px;
            width: 100%;
        }

        table tr
        {
            border-top: 1px solid #555;
            border-bottom: 1px solid #555;
        }

        table tr td
        {
            padding: 16px 5px;
            border: 1px solid #ccc;
            height: auto;
            width: 13%;
            text-align: right;
        }

        table tr th
        {
            padding: 16px 0px;
            font-weight: 300;
            border: 1px solid #ccc;
            height: auto;width: 13%;
            text-align: center;
            background-color: #094555 !important;
            color: #fff;
            border-top: none;
            border-bottom: none;
        }

        table tr td:nth-of-type(1)
        {
            width: 17%;
        }

        table tr td:nth-of-type(2)
        {
            width: 17%;
        }

        table tr th:nth-of-type(1)
        {
            width: 17%;
        }

        table tr th:nth-of-type(2)
        {
            width: 17%;
        }

        table tr td:nth-of-type(4)
        {
            width: 7%;
        }

        table tr td:nth-of-type(5)
        {
            width: 7%;
        }

        table tr th:nth-of-type(4)
        {
            width: 7%;
        }

        table tr th:nth-of-type(5)
        {
            width: 7%;
        }

        @media(max-width: 850px)
        {
            table{height: auto;font-size: 14px}
        }

        @media(max-width: 500px)
        {
            table{height: auto;font-size: 11px}
        }

        @media(max-width: 395px)
        {
            table{height: auto;font-size: 9.5px}
        }

        /*End The Buy Table*/


    </style>
@endpush

@section('content')
    <div class="form2">
        <div class="container">

            <form method="get" action="{{route('buy.index')}}" name="buy">

                <div class="row">

                    <div class="col-lg-4">
                        <input type="search" name="search" placeholder="بحث باسم الشركة" >
                    </div>
                    <div class="col-lg-4">
                        <input type="search" name="search2" placeholder="بحث باسم المنتج" >
                    </div>
                    <div class="col-lg-3" style="margin: auto">
                        <input type="submit" name="تسجيل" value="تنفيذ البحث" style="padding: 11px 60px;font-size: 1.2em;border: none;background-color: #095555;color: #fff;width: 100%">
                    </div>

                </div>

            </form>

        </div>
    </div>
    <!--End The Buy Form-->

    <hr style="height: 0.5px;background-color: #ddd;margin-top: 40px;margin-bottom: 40px">


    @if($sells->count() > 0)

    <table class="table table-hover my-5" style="direction: rtl;border-right: none;border-left: none" >

        <tr>

            <th>المنتج</th>
            <th>اسم الشركة</th>
            <th>التصنيف</th>
            <th>الكمية</th>
            <th>الوحدة</th>
            <th>بيانات الاتصال</th>
            <th>مكان الاستلام</th>
            <th>ملاحظات</th>
        </tr>
        @php
            $units= ['ten' ,'kilo','Gram','MillyGram','Cubic_meters','Liters','Cm_Cubic','Bottle'];
            $classifications = ['Active_Items','added_Items','packaging_Items'];
        @endphp

        @foreach($sells as $sell)
            <tr>
                <td>{{$sell->product_name}}</td>
                <td>{{$sell->company_name}}</td>
                <td>@lang('site.'.$sell->classification)</td>
                <td>{{$sell->quantity}}</td>
                <td> @lang('site.'.$sell->unit)</td>
                <td>{{$sell->connection_data}}</td>
                <td>{{$sell->receive_place}}</td>
                <td>{{$sell->notes}}</td>
            </tr>
        @endforeach


    </table>
        <div class="justify-content-center d-flex">
            {{$sells->appends(request()->query())->links()}}
        </div>

    @else
        <h2 class="text-center" style="font-weight: 400">@lang('site.message')</h2>
    @endif




    <!--Start This Is Loading-->

    <div class="preloader2">
    </div>
@endsection
