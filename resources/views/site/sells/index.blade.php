@extends('layouts.site')

@push('style')
    <style>

        /*Start Navbar */
        nav
        {
            margin-bottom: 30px
        }

        .navbar-light .navbar-brand
        {
            color: #fff;
            font-size: 26px
        }

        .navbar-nav .nav-item .nav-link
        {
            color: #fff
        }
        /*End Navbar*/


        /*Start The Sales Form*/
        .form3
        {
            direction: rtl;
            text-align: right;
            background-color: #fff;
            height: auto
        }

        .form3 input
        {
            margin-top: 20px;
            padding: 9px 10px;
            font-size: 1.1em;
            border: 1px solid #aaa;
            border-radius: 3px;
            outline: none
        }

        .form3 input
        {
            width: 100%
        }

        .form3 input::placeholder
        {
            color: #888
        }
        /*End The Sales Form*/


        /*Start The Sales Table*/
        table
        {
            height: auto;
            font-size: 16px;
            width: 100%
        }

        table tr
        {
            border-top: 1px solid #555;
            border-bottom: 1px solid #555
        }

        table tr td
        {
            padding: 12px 5px;
            border: 1px solid #ccc;
            height: auto;
            width: 10.4%;
            text-align: right
        }

        table tr th
        {
            padding: 12px 0px;
            font-weight: 300;
            border: 1px solid #ccc;
            height: auto;
            width: 10.4%;
            text-align: center;
            background-color: #094555 !important;
            color: #fff;
            border-top: none;
            border-bottom: none
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

        table tr td:last-child
        {
            text-align: center;
        }

        table tr td button
        {
            width: 80%;
            border: 1px solid #777;
            padding: 5px 0px;
            background: none;
            border-radius: 3px;
        }

        table tr th button
        {
            width: 80%;
            border: 1px solid #ccc;
            color: #fff;
            background: none;
            padding: 5px 0px;
            border-radius: 3px;

        }


        @media(max-width: 1100px)
        {
            table
            {height: auto;font-size: 14px}
        }

        @media(max-width: 830px)
        {
            table{height: auto;font-size: 12px}
        }

        @media(max-width: 600px)
        {
            table{height: auto;font-size: 9.5px}
        }

        /*End  The Sales Table*/

    </style>

@endpush

@section('content')

    <div class="container mt-4">
        @include('partials._errors')
        <form method="post" action="{{route('sell.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="product_name"  placeholder="اسم المنتج" >

                        <select class="form-control mt-4" name="classification" >
                            @php
                                $classifications = ['Active_Items','added_Items','packaging_Items'];
                            @endphp
                            <option value="">@lang('site.classification')</option>
                            @foreach($classifications as $classification)
                                <option value="{{$classification}}" >@lang('site.'.$classification)</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="quantity" placeholder="الكمية"  >
                        <select class="form-control mt-4" name="unit">
                            @php
                                $units= ['ten' ,'kilo','Gram','MillyGram','Cubic_meters','Liters','Cm_Cubic','Bottle'];
                            @endphp
                            <option value="" >الوحدة</option>
                            @foreach($units as $unit)
                                <option value="{{$unit}}" >@lang('site.' .$unit)</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="connection_data" placeholder="بيانات الاتصال" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <input class="form-control " type="text" name="receive_place" placeholder="مكان الاستلام" >

                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <input class="form-control" type="text" name="notes" placeholder=" السعر للوحدة/ملاحظات" style="padding: 8px 10px;height: 60px">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <input class="form-control btn btn-success" type="submit" value="اضافة">
                </div>
            </div>
        </form>
    </div>


    <hr style="height: 0.5px;background-color: #ddd;margin-top: 40px;margin-bottom: 40px">
    <!--Start The Sales Table-->
    @if(session()->has('success'))
        <div class="text-center  my-5">
            <h2 class="text-primary"> <strong> {{Session::get('success')}} </strong>  </h2>
        </div>
    @elseif(session()->has('error'))
        <div class="text-center my-5">
            <h2 class="text-danger"> <strong> {{Session::get('error')}} </strong>  </h2>
        </div>
    @endif

    <h3 style="direction: rtl;text-align: center;padding-bottom: 20px;font-weight: 500;color: black;font-size: 24px">تعديل <span style="color: #888">/</span> حذف المنتجات المتاحة</h3>

    <table style="width: 100%;direction: rtl;border-right: none;border-left: none">
        <tr>

            <th>المنتج</th>
            <th>التصنيف</th>
            <th>الكمية</th>
            <th>الوحدة</th>
            <th>بيانات الاتصال</th>
            <th>مكان الاستلام</th>
            <th>ملاحظات</th>
            <th>أكشن</th>
        </tr>

        @foreach($sells as $sell)
            <tr>
                <td>{{$sell->product_name}}</td>
                <td>@lang('site.' . $sell->classification) </td>
                <td>{{$sell->quantity}}</td>
                <td>@lang('site.' . $sell->unit)</td>
                <td>{{$sell->connection_data}}</td>
                <td>{{$sell->receive_place}}</td>
                <td>{{$sell->notes}}</td>
                <td>
                    <a href="{{ route('sell.edit', $sell->id) }}" class="btn btn-info btn-sm btn-block"><i class="fa fa-edit"></i> @lang('site.edit')</a>

                    <form action="{{route('sell.destroy',$sell->id)}}" method="POST" class="mt-1">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm btn-block"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <div class="justify-content-center d-flex ">
        {{$sells->appends(request()->query())->links()}}
    </div>







@endsection
