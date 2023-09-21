<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        http-equiv="Access-Control-Allow-Origin"
        content="*" />
    <meta name="description" content="bathsoap,washing soap">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Shopping') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    @include('admin.layouts.partials.styles')     

    @yield('styles')    



</head>   

<body>

    {{-- MAIN NAVIGATION BAR --}}
    @include('admin.layouts.partials.header')   

    {{-- MAIN CONTENT --}}
    <div class="main">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    @include('admin.layouts.partials.footer')       

    @include('admin.layouts.partials.scripts')
 
    @yield('scripts')

</body>

</html>
