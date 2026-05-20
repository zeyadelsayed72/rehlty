<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'itr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>رحلتي | @yield('title')</title>

@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}"
    class="butn bg-gray color-third mx-1">
        {{ $properties['native'] }}
    </a>
@endforeach


    {{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/lib/bootstrap.rtl.css') }}">
<link rel="stylesheet" href="{{ asset('css/lib/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/lib/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('css/lib/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/lib/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/media.css') }}">



</head>

    @stack('style')



<body>

    @include('partials.nav')

    @yield('content')

    @include('partials.footer')


    <script src="{{ asset('js/lib/jquery4.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/lib/swiper.js') }}"></script>
    <script src="{{ asset('js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/lib/back-to-top.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>




    @stack('scripts')
</body>
</html>
