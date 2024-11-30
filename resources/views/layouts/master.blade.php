<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        @include('layouts.fonts')

        <!-- Styles -->
        @include('layouts.styles')

        @yield('custom-styles')
    </head>
    <body>
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="{{ asset('assets/img/logo/loader.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <div id="app">
            <!-- header -->
            @include('main-parts.header')

            <main>
                @yield('content')
            </main>

            <!-- footer -->
            @include('main-parts.footer')
        </div>
        <!-- Scroll Up -->
        <div id="back-top">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- Scripts -->
        @include('layouts.scripts')

        @yield('custom-script')
    </body>
</html>
