@extends('layouts.site')

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
