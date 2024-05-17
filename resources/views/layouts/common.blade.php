<!DOCTYPE html>

<html lang="En">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') | Easy Time Clock</title>
    <meta name="description" content="@yield('page-description')" />
    <meta name="keywords" content="@yield('page-keywords')">

    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" /> -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />

    <!-- sweetalert -->    
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/sweetalert2.css') }}" />

    <!-- Include Styles -->
    @include('layouts/sections/styles')

    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('layouts/sections/scriptsIncludes')
</head>

<body class="body">
    <!-- Layout Content -->
    @yield('layoutContent')
    <!--/ Layout Content -->

    <!-- Include Scripts -->
    @include('layouts/sections/scripts')

</body>

</html>
