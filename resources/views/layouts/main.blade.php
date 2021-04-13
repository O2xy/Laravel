<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Новостной сайт</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('assets/js/modernizr.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body>

<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div id="top" class="s-wrap site-wrapper">

<x-site-header></x-site-header>

    <div class="s-content">
        <div class="masonry-wrap">
            <div class="masonry">
                <div class="grid-sizer"></div>
                    @yield('content')
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
    </div> <!-- end s-content -->


    <!-- footer
    ================================================== -->
<x-site-footer></x-site-footer>

</div> <!-- end s-wrap -->


<!-- Java Script
================================================== -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
