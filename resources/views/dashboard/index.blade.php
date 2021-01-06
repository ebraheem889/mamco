@extends('layouts.dashboard.app')


@section('content')

    @if(session()->has('success'))
        <div class="text-center  my-5">
            <h2 class="text-primary"> <strong> {{Session::get('success')}} </strong>  </h2>
        </div>
    @elseif(session()->has('error'))
        <div class="text-center my-5">
            <h2 class="text-danger"> <strong> {{Session::get('error')}} </strong>  </h2>
        </div>
    @endif
<div class="row">
    <div class="col-md-12">
        <div class="box-header with-border mb-3">

            <form action="{{ route('admin.index') }}" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                    </div>

                </div>
            </form><!-- end of form -->

        </div><!-- end of box header -->

    @if($sells->count() > 0 )

            <table class="table table-hover table-bordered table-active " style="direction: rtl;">
                <thead>
                <tr>

                    <td>المنتج</td>
                    <td>التصنيف</td>
                    <td>الكمية</td>
                    <td>الوحدة</td>
                    <td>بيانات الاتصال</td>
                    <td>مكان الاستلام</td>
                    <td>الحالة </td>
                    <td>ملاحظات</td>
                    <td>أكشن</td>
                </tr>
                </thead>

                @foreach($sells as $sell)
                    <tbody>
                    <tr>
                        <th>{{$sell->product_name}}</th>
                        <th>@lang('site.' . $sell->classification) </th>
                        <th>{{$sell->quantity}}</th>
                        <th>@lang('site.' . $sell->unit)</th>
                        <th>{{$sell->connection_data}}</th>
                        <th>{{$sell->receive_place}}</th>
                        <th>@lang('site.' . $sell->getStatus())</th>
                        <th>{{$sell->notes}}</th>
                        <th>
                            <a href="{{ route('admin.edit', $sell->id) }}" class="btn btn-info btn-sm "><i class="fa fa-edit"></i> @lang('site.edit')</a>

                            <form action="{{route('admin.destroy',$sell->id)}}" method="GET" class="mt-1" style="display: inline-block">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </th>
                    </tr>
                    </tbody>
                @endforeach

            </table>

            {{ $sells->appends(request()->query())->links() }}

        @else
            <h2 style="font-weight: 400">Sorry There is Nothing To Show</h2>
        @endif
    </div>
</div>

@endsection
