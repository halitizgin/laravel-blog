<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    {{-- load styles --}}
    @include('assets.styles')
    @yield('styles')
</head>

<body>

    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
            <h1 id="colorlib-logo"><a href="{{ route('home') }}">elen<span>.</span></a></h1>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="{{ $route == 'home' ? 'colorlib-active' : '' }}"><a href="{{ route('home') }}">Home</a>
                    </li>
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endguest
                    @auth
                        <li class="{{ $route == 'profile' ? 'colorlib-active' : '' }}"><a
                                href="{{ route('profile') }}">{{ auth()->user()->name }}</a></li>
                        <li>
                            <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="javascript:;" onclick="document.getElementById('logoutForm').submit()">Logout</a>
                            </form>
                        </li>
                    @endauth
                </ul>
            </nav>

            <div class="colorlib-footer">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <ul>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
            </div>
        </aside> <!-- END COLORLIB-ASIDE -->

        {{-- Content area --}}
        <div id="colorlib-main">
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                            <h2 class="mb-4">@yield('content.title')</h2>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </section>
        </div>
    </div><!-- END COLORLIB-MAIN -->
    </div><!-- END COLORLIB-PAGE -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    {{-- load scripts --}}
    @include('assets.scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    @yield('scripts')
</body>

</html>
