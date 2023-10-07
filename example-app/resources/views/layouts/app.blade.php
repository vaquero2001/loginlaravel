<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
        
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=10, user-scalble=no">
        <meta name="theme-color" content="#FFF">
        <meta name="movileOptimized" content="width">
        <meta name="handhelFriendly" content="true">
        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="manifest" href="{{asset('manifest.json')}}">

        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="dns-prefetch" href="{{asset('https://s.w.org/')}}">
        <script src="{{asset('./')}}" type="text/javascript" defer=""></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
           

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
