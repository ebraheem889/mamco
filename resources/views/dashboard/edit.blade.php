@extends('layouts.dashboard.app')
@section('content')
    <div class="form3">
        <div class="container">
            @include('partials._errors')
            <form method="POST" action="{{route('admin.update',$sell[0]->id)}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                           <input class="form-control" type="text" name="product_name"  placeholder="اسم المنتج" value="{{$sell[0]->product_name}}">

                           <select class="form-control mt-4" name="classification" >
                               @php
                               $classifications = ['Active_Items','added_Items','packaging_Items'];
                               @endphp
                               <option value="">@lang('site.classification')</option>
                              @foreach($classifications as $classification)
                                  <option value="{{$classification}}" {{ $sell[0]->classification == $classification ? 'selected':''}}>@lang('site.'.$classification)</option>
                               @endforeach
                           </select>
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="quantity" placeholder="الكمية" value="{{$sell[0]->quantity}}" >
                            <select class="form-control mt-4" name="unit">
                                @php
                                $units= ['ten' ,'kilo','Gram','MillyGram','Cubic_meters','Liters','Cm_Cubic','Bottle'];
                                @endphp
                                <option value="" >الوحدة</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit}}" {{ $sell[0]->unit== $unit ?'selected' :''}}>@lang('site.' .$unit)</option>
                                    @endforeach
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="connection_data" placeholder="بيانات الاتصال" value="{{$sell[0]->connection_data}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                                <input class="form-control " type="text" name="receive_place" placeholder="مكان الاستلام" value="{{$sell[0]->receive_place}}">

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="notes" placeholder="ملاحظات" style="padding: 8px 10px;height: 60px" value="{{$sell[0]->notes}}">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <input class="form-control btn btn-success" type="submit" value="@lang('site.edit')">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
