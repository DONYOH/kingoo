<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>- @yield('title')</title>

    @include('site.layouts.link')

</head>

<body>




<!-- test preloader start -->
<div id="preloader-wrap">
    <div id="loading">
        <span id="loading-img">Chargement...</span>
    </div>
</div>

<div id="preloading">
    <img src="{{asset('site/assets/images/traffic-thumb.png')}}" alt="">
</div>

<div class="off_canvars_overlay">

</div>

@include('site.layouts.header')

@yield('content')

@include('site.layouts.footer')

<div class="back-to-top">
    <a href="#"><i class="fal fa-arrow-up"></i></a>
</div>

@include('site.layouts.script')

</body>

</html>
