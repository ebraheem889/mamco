@extends('layouts.site')


@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" >


            @for($i=0 ; $i<3 ;$i++)
                <div class="carousel-item  {{ $i == 0 ? 'active': ' ' }} test{{$i+1}}">
                    <div class="alpha">
                        <div class="paragraph">
                            <h1>vstore-eg</h1>
                            <p> اهلا بكم نحن موقع متخصص في تقديم خدمات للقطاع الصناعي في مصر </p>
                            @if (auth()->user())
                                @if( auth()->user()->status == 1)
                                    <a class="btn btn-info btn-block  "   href="{{route('buy.index')}}">شراء</a>
                                @else
                                    <button class=" btn btn-info btn-block  pending1 " data-user_status ="{{auth()->user() ? auth()->user()->status :'' }}" href="#" style="cursor: not-allowed">شراء</button>
                                @endif
                            @else
                                <button class=" btn btn-info btn-block disabled login_required "  data-islogin ="{{auth()->user() ? 1 : 0 }}"  href="#" style="cursor: not-allowed">شراء</button>
                            @endif
                            @if (auth()->user())
                                @if(auth()->user()->status == 1)
                                    <a class="btn btn-primary mt-2 btn-block"  href="{{route('sell.index')}}">بيع</a>
                                @else
                                    <button class="btn btn-primary btn-block mt-2   pending2 " data-user_status ="{{auth()->user() ? auth()->user()->status :'' }}"href="#"  style="cursor: not-allowed">بيع</button>
                                @endif
                            @else
                                <button class="btn btn-primary btn-block mt-2 disabled login_required" data-islogin ="{{auth()->user() ? 1 : 0 }}" href="#"  style="cursor: not-allowed">بيع</button>
                            @endif

                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>

    <div class="preloader">

        <div class="lds-ellipsis" ><div></div><div></div><div></div><div></div></div>
    </div>
    <div class="modal" id="User_notification" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title">@lang('site.welcome') {{auth()->user() ? auth()->user()->company_name :'' }}</h5>
                </div>
                <div class="modal-body justify-content-center text text-danger">
                  @if(auth()->user())

                        @lang('site.approving_message')

                  @else
                    @lang('site.islogin_message')

                   @endif
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" style="width: 12%" id="hide_notification" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
