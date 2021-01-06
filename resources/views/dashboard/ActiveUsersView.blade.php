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

    @if($users->count() > 0 )

            <table class="table table-hover table-bordered  table-active " style="direction: rtl;">
                <thead class=" table-dark">
                <tr>

                    <td>اسم الشركة</td>
                    <td>اسم الشركة بالانجليزية</td>
                    <td>@lang('site.commercial_number2')</td>
                    <td>@lang('site.address')</td>
                    <td>@lang('site.telephone')</td>
                    <td>@lang('site.telephone2')</td>
                    <td>@lang('site.email')</td>
                    <td>@lang('site.status')</td>
                    <td>@lang('site.Created At')</td>
                    <td>@lang('site.Expired At')</td>
                    <td>@lang('site.approved_policy')</td>
                    <td>@lang('site.action')</td>
                </tr>
                </thead>

                @foreach($users as $user)
                    <tbody>
                    <tr>
                        <th >{{$user->company_name}}</th>
                        <th style="width: 3%">{{$user->company_name_en}}</th>
                        <th>{{ $user->commercial_number}} </th>
                        <th>{{$user->address}}</th>
                        <th>{{$user->telephone}}</th>
                        <th>{{$user->telephone2}}</th>
                        <th>{{$user->email}}</th>
                        <th>{{$user->getStatus()}}</th>
                        <th style="width: 9%">{{ $user->created_at->format('Y-m-d')}}</th>
                        <th style="width: 9%">{{ $user->created_at->addDays(60)->format('Y-m-d')}}</th>
                        <th style="width: 1%">{{$user->approved_policy}}</th>
                        <th style="width: 15%">
                            <a href="{{ route('admin.ActivateUser', $user->id) }}" class="btn btn-info btn-sm " style="display: inline-block">@lang('site.approve')</a>
                            <a href="{{ route('admin.DeActivateUser', $user->id) }}" class="btn btn-danger btn-sm ">@lang('site.deactivate')</a>
                        </th>
                    </tr>
                    </tbody>
                @endforeach

            </table>

            {{ $users->appends(request()->query())->links() }}

        @else
            <h2 style="font-weight: 400">Sorry There is Nothing To Show</h2>
        @endif
    </div>
</div>

@endsection
