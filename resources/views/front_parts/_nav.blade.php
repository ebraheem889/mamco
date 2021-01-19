<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #095555 !important">
    <div class="container">

        @if (!auth()->user())
            <a class="nav-link" style="color: white" href="{{route('register')}}">عمل حساب</a>
            <a class="nav-link" style="color: white" href="{{route('login')}}">تسجيل الدخول</a>
        @elseif(auth()->user())

            <a class="nav-link icon3" style="color: white" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                 تسجيل الخروج
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endif


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: none;border: none;outline: none">
            <span><i style="color:#fff;background-color: none !important" class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link icon4" href="{{route('call_us')}}">اتصل بنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon2" href="{{route('about')}}">حول الموقع</a>
                </li>

                <li class="nav-item main">
                    <a class="nav-link icon1" href="{{route('index')}}">الرئيسية</a>
                </li>

            </ul>

        </div>

    </div>
</nav>
