<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @routes
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">

    <div id="app">
        <nav class="bg-white border-b p-3">
            <div class="flex justify-between">
                <a class="text-lg" href="{{ url('/') }}">
                    {{ config('app.name', 'Mimash Signature') }}
                </a>
                

                <div class="text-lg">
                    <!-- Right Side Of Navbar -->
                    <ul class="flex gap-2 text-base">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="">
                                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="">
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="">
                                <form id="" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <select class="bg-transparent outline-none" onChange="window.location.href=this.value">
                                    <option>{{ Auth::user()->name }}</option>
                                    <option class="" value="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </option>
                                    <option value="{{ route('home') }}">
                                        {{ __('Dashboard') }}
                                    </option>
                                </select>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <div class="fixed bottom-0 border-t shadow left-0 w-full">
            @include('layouts.navbar')
        </div>

    </div>

    <div id="modals"></div>
    <div id="toasters" class="absolute bottom-10 right-10"></div>
</body>
</html>
