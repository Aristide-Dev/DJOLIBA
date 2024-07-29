<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DJOLIBA INFO') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon  -->
    <link rel="icon" href="/storage/assets/img/favicon.jpg">
</head>
<body class="font-sans antialiased text-gray-700 pt-9 sm:pt-10">
    
    {{-- <!-- ========== { HEADER }==========  --> --}}
    @include('layouts.djoliba.navigation')
    
    <!-- =========={ MAIN }==========  -->
    <main id="content">
        {{ $slot }}
    </main>
    <!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    @include('layouts.djoliba.footer')
    <!-- end footer -->

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#" class="fixed hidden p-4 text-gray-500 bg-gray-100 border border-gray-100 rounded back-top dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4" aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
            <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
        </svg>
    </a>

    <!--Vendor js-->
    {{-- <script src="src/vendors/hc-sticky/dist/hc-sticky.js"></script> --}}
    {{-- <script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script> --}}
    {{-- <script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script> --}}
    {{-- <script src="src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js"></script> --}}

    <!-- Start development js -->
    {{-- <script src="storage/assets/src/js/theme.js"></script> --}}
    <!-- End development js -->

    <!-- Production js -->

    <!-- <script src="dist/js/scripts.js"></script> -->
</body>

</html>

