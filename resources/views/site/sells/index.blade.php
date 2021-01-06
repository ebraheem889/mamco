@extends('layouts.site')


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
{{--    <h3 style="direction: rtl;text-align: center;padding-bottom: 20px;font-weight: 500;color: black;font-size: 24px">تعديل <span style="color: #888">/</span> حذف المنتجات المتاحة</h3>--}}

<div class="container">

    <table class="table table-hover my-5" style="direction: rtl;border-right: none;border-left: none" >

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
</div>






@endsection
