<!doctype html>
    <html lang="">
        <head>
            <meta charset="utf-8" />
            <title>@yield('title')</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="{{ URL::asset('assets/images/rcc_logo.png') }}">
            @include('layouts.head-css')
        </head>

    @section('body')
        @include('layouts.body')
    @show
        @yield('content')
        @include('layouts.vendor-scripts')
    </body>
</html>
