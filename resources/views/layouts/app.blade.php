<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DeliveBoo') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Usando Vite -->



    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm d-flex align-items-center">
            <div class="container d-flex align-items-center py-2">
                @if(Auth::user())
                    <a class="ms-link-logo" href="http://127.0.0.1:8000/admin/backoffice-to-frontoffice">
                        <img class="ms-logo-img" src="/img/Myproject-1.png" url="logo">
                        <span class="ms-logo-name"> deliveboo</span>
                    </a>
                @else
                <a class="ms-link-logo" href="http://localhost:5174/">
                    <img class="ms-logo-img" src="/img/Myproject-1.png" url="logo">
                    <span class="ms-logo-name"> deliveboo</span>
                </a>
                @endif
               <div class="d-none d-lg-block">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto ">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="text-light nav-link {{ str_contains(url()->current(), 'login') ? 'active' : '' }}"
                                        href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="text-light nav-link {{ str_contains(url()->current(), 'register') ? 'active' : '' }}"
                                            href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                                    </li>
                                @endif
                            @else
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    @if (Auth::user()->company)
                                        <ul class="d-flex align-items-center list-unstyled">
                                            <li class="nav-item ms-2 mx-2 ">
                                                <a class="text-light text-decoration-none {{ str_contains(url()->current(), 'dashboard') ? 'active' : '' }}"
                                                    href="{{ route('admin.dashboard') }}"><strong>{{ __('Dashboard') }}</strong></a>
                                            </li>
                                            <li class="nav-item ms-2 mx-2">
                                                <a class="text-light text-decoration-none {{ str_contains(url()->current(), 'products') ? 'active' : '' }}"
                                                    href="{{ route('admin.products.index') }}">
                                                    <strong> {{ __('Prodotti') }}</strong></a>
                                            </li>
                                            <li class="nav-item ms-2 mx-2">
                                                <a class="text-light text-decoration-none {{ str_contains(url()->current(), 'orders') ? 'active' : '' }}"
                                                    href="{{ route('admin.orders.index') }}"><strong>{{ __('Ordini') }}</strong></a>
                                            </li>
                                            <li class="nav-item ms-2 mx-2 ">
                                                <a class="text-light text-decoration-none {{ str_contains(url()->current(), 'stats') ? 'active' : '' }}"
                                                    href="{{ route('admin.stats') }}"><strong>{{ __('Statistiche') }}</strong></a>
                                            </li>
                                            <li class="nav-item ms-2 mx-2">
                                                <div class="px-2 bg-light rounded-5 dropdown-center">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu rounded-4" aria-labelledby="navbarDropdown">
                                                        @if (Auth::user()->company)
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.companies.show', Auth::user()->company) }}">{{ __('La mia attività') }}</a>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        @else
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.companies.create') }}">{{ __('Aggiungi un attività') }}</a>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @else
                                        <ul class="d-flex align-items-center list-unstyled">
                                            <li class="nav-item ms-2 mx-2">
                                                <div class="px-2 bg-light rounded-5 dropdown-center">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>
                                                    <div class="dropdown-menu rounded-4" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.companies.create') }}">{{ __('Aggiungi un attività') }}</a>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                            class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                            @endguest
                        </ul>
                    </div>
               </div>

               {{-- Drop responsive --}}
                <div class="dropdown-center d-lg-none" style="color: black">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <ul class="dropdown-menu" style="left: -180%; right: 50%;">

                        @guest
                                <li class="dropdown-item">
                                    <a class="text-black nav-link {{ str_contains(url()->current(), 'login') ? 'active' : '' }}"
                                        href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
                                </li>
                            @if (Route::has('register'))
                                <li class="dropdown-item">
                                    <a class="text-black nav-link {{ str_contains(url()->current(), 'register') ? 'active' : '' }}"
                                        href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                                </li>
                            @endif
                        @else
                            @if (Auth::user()->company)
                                <li class="dropdown-item">
                                    <a class="text-black text-decoration-none {{ str_contains(url()->current(), 'dashboard') ? 'active' : '' }}"
                                        href="{{ route('admin.dashboard') }}"><strong>{{ __('Dashboard') }}</strong></a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="text-black text-decoration-none {{ str_contains(url()->current(), 'products') ? 'active' : '' }}"
                                        href="{{ route('admin.products.index') }}">
                                        <strong> {{ __('Prodotti') }}</strong></a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="text-black text-decoration-none {{ str_contains(url()->current(), 'orders') ? 'active' : '' }}"
                                        href="{{ route('admin.orders.index') }}"><strong>{{ __('Ordini') }}</strong></a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="text-black text-decoration-none {{ str_contains(url()->current(), 'stats') ? 'active' : '' }}"
                                        href="{{ route('admin.stats') }}"><strong>{{ __('Statistiche') }}</strong></a>
                                </li>
                                <li class="dropdown-item">
                                       
                                        <a id="navbarDropdown" class="text-black" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        @if (Auth::user()->company)
                                            <a class="dropdown-item"
                                                href="{{ route('admin.companies.show', Auth::user()->company) }}">{{ __('La mia attività') }}</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}"
                                                method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <a class="dropdown-item"
                                                href="{{ route('admin.companies.create') }}">{{ __('Aggiungi un attività') }}</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}"
                                                method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @endif
                                </li>
                                @endif
                            @endguest
                        {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </div>
                {{-- Drop responsive --}}

            </div>
        </nav>


        <main class="">
            <div class="container">
                @if (session('message'))
                    <div class="alert alert-danger mt-2">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success mt-2">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
            @yield('content-hero')
        </main>
    </div>
</body>

</html>
