<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm bording style-01" style = "background-color: rgb(12, 75, 5); " >
            <div class="container">
               <div class="MMSU">
                    <a href="https://www.mmsu.edu.ph/"><img src="//mmsu.edu.ph//mmsu_logo/mmsu_logo.png" alt="MMSU Logo" class="h-20"></a>
                    &nbsp&nbsp&nbsp<h4 class="MMSUname" style="color: white; font-family: 'Adobe Garamond Pro'; font-size: 35;">MARIANO MARCOS STATE UNIVERSITY</h4>
                </div>
                

                {{-- <a class="navbar-brand" href="{{ url('/') }}" style="color:rgb(255, 255, 255)"> --}}
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" >
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item" style="color: white;">
                                    <a style="color: white;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif --}}

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: rgb(255, 255, 255)" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="/js/jquery.min.js"></script>
    @yield('script')
</body>
</html>

<style>
    .h-20 {
        width: 90px;
        height: 90px;
    }

    .MMSU {
        /* margin-top: 7px; */
        display: flex;
        align-items: center;
    }
    .MMSUname {
        margin-top: 7px;
        

    }
    .bording {
        border-top: 2px solid rgb(255, 203, 0);
        border-bottom: 2px solid rgb(255, 203, 0);
    }

    .style-01::before, .style-01::after {
        content: '';
        position: absolute;
        top: 60%;
        bottom: 10px;
        display: block;
        width: 100%;
        box-shadow: 0 15px 10px #777;
        z-index: -1;
        left: 10px;
        margin-left: -9px;
    }

</style>