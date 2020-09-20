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
<body class="bg-gray-light">

<nav class="bg-white">
    <div class="container mx-auto items-center py-2">
     <div class="flex justify-between">
         <a href="{{ url('/') }}">
             {{ config('app.name', 'Laravel') }}
         </a>

         <div>
             <ul>
                 @guest
                     @if(Route::has('login'))
                         <li>
                             <a href="{{ route('login') }}">Login</a>
                         </li>
                     @endif
                     @if(Route::has('register'))
                         <li>
                             <a href="{{ route('register') }}">Register</a>
                         </li>
                     @endif
                 @else
                     <li>
                         <a href="#">{{ auth()->user()->name }}</a>
                     </li>
                 @endguest
             </ul>
         </div>
     </div>
    </div>
</nav>

    <div id="app">
        <main class="container mx-auto py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
