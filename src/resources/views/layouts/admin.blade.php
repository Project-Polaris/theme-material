<!DOCTYPE html>
<html lang="{{ Locale::getLocale() }}">
<head>
    @include("theme-material::include.header")

    @include('favicons')

    <title>@yield('title', 'Polaris') | {{ config('app.name') }}</title>

    @stack('head')

    <!-- CSS -->

    <link href="{{ vasset('/resources/theme/...') }}" rel="stylesheet">
    <link href="" rel="stylesheet">
    <link href="material-icons" rel="stylesheet">
    <link href="" rel="stylesheet">

    <!-- View specific CSS -->

    @stack('stylesheets')

</head>

<body class="page-orange">

    @include('theme-material::includes.topbar')

    @include('theme-material::includes.sidebar', ['sidebar_name' => trans('theme-material::sidebar.admin_title')])

    @stack('javascripts')

</body>

