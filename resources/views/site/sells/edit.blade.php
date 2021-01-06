@extends('layouts.site')
@section('content')
    <div class="form3">
        <div class="container">
            @include('partials._errors')
            <form method="post" action="{{route('sell.update',$sell->id)}}">
                @method('put')
                @csrf
                <div class="row ">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="company_name" placeholder="ملاحظات" style="padding: 8px 10px;height: 60px" value="{{$sell->company_name}}">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="company_name_en" placeholder="ملاحظات" style="padding: 8px 10px;height: 60px" value="{{$sell->company_name_en}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                           <input class="form-control" type="text" name="product_name"  placeholder="اسم المنتج" value="{{$sell->product_name}}">

                           <select class="form-control mt-4" name="classification" >
                               @php
                               $classifications = ['Active_Items','added_Items','packaging_Items'];
                               @endphp
                               <option value="">@lang('site.classification')</option>
                              @foreach($classifications as $classification)
                                  <option value="{{$classification}}" {{ $sell->classification == $classification ? 'selected':''}}>@lang('site.'.$classification)</option>
                               @endforeach
                           </select>
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="quantity" placeholder="الكمية" value="{{$sell->quantity}}" >
                            <select class="form-control mt-4" name="unit">
                                @php
                                $units= ['ten' ,'kilo','Gram','MillyGram','Cubic_meters','Liters','Cm_Cubic','Bottle'];
                                @endphp
                                <option value="" >الوحدة</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit}}" {{ $sell->unit== $unit ?'selected' :''}}>@lang('site.' .$unit)</option>
                                    @endforeach
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="connection_data" placeholder="بيانات الاتصال" value="{{$sell->connection_data}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                                <input class="form-control " type="text" name="receive_place" placeholder="مكان الاستلام" value="{{$sell->receive_place}}">

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="notes" placeholder="ملاحظات" style="padding: 8px 10px;height: 60px" value="{{$sell->notes}}">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <input class="form-control btn btn-success" type="submit" value="@lang('site.update')">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
