<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel5 Base App | Web')</title>
    <!-- Jquery -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.6.0.min.js') }}"></script>
    @include('partials.styles')
    @yield('styles')
</head>

<body id="page-top">
<div id="page-wrapper">
    @include('partials.web.nav')
    @include('partials.messages')
    <div class="container-fluid" id="content-wrapper">
        @yield('content')
    </div><!-- ./content-wrapper -->
    @include('partials.web.footer')
</div><!-- ./page-wrapper -->
@include('partials.scripts')
@yield('scripts')
</body>

</html>
