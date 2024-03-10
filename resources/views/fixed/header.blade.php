@php use Illuminate\Support\Facades\Auth; @endphp
    <!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="#"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        @foreach($menu as $link)
                            <li class="nav-item @if(request()->routeIs($link->route)) active @endif"><a class="nav-link" href="{{ route($link->route) }}">{{$link->name}}</a>
                            </li>
                        @endforeach
                            @if(Auth::check())
                                @if(Auth::user()->role_id == 1)
                                    <li class="nav-item @if(request()->routeIs('admin')) active @endif"><a class="nav-link" href="{{ route('admin') }}">Admin</a>
                                @endif
                                <li class="nav-item @if(request()->routeIs('logout')) active @endif"><a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            @else
                                <li class="nav-item @if(request()->routeIs('login')) active @endif"><a class="nav-link" href="{{ route('login') }}">Login</a>
                                <li class="nav-item @if(request()->routeIs('register')) active @endif"><a class="nav-link" href="{{ route('register') }}">Register</a>
                            @endif
                    </ul>

                    <ul class="nav-shop">
                        <li class="nav-item">
                            <button><a href="{{route('cart')}}"><i class="ti-shopping-cart"></i><span
                                        class="nav-shop__circle">3</span></a></button>
                        </li>
                        <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->
