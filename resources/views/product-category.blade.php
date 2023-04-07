@php 
    $myAsset = asset('freshcart'); 
@endphp
@extends('layouts.home')
@section('title')
  Từ Ngọc Vân
@endsection
@section('main')
    @include('parts.main-product-category')
@endsection
@section('footer')
  @parent  
@endsection
@section('css')  
        <!-- Libs CSS -->
        <link href="./freshcart/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="./freshcart/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
        <link href="./freshcart/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
        <link href="./freshcart/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
        <link href="./freshcart/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
        <link href="./freshcart/libs/nouislider/dist/nouislider.min.css" rel="stylesheet" />
        <link href="./freshcart/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
        <link href="./freshcart/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
        <link href="./freshcart/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="./freshcart/css/theme.min.css" />
@endsection
@section('js')
<script src="./freshcart/libs/jquery/dist/jquery.min.js"></script>
        <script src="./freshcart/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./freshcart/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
        <script src="./freshcart/libs/slick-carousel/slick/slick.min.js"></script>
        <script src="./freshcart/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="./freshcart/libs/nouislider/dist/nouislider.min.js"></script>
        <script src="./freshcart/libs/wnumb/wNumb.min.js"></script>
        <script src="./freshcart/libs/rater-js/index.js"></script>
        <script src="./freshcart/libs/prismjs/prism.js"></script>
        <script src="./freshcart/libs/prismjs/components/prism-scss.min.js"></script>
        <script src="./freshcart/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
        <script src="./freshcart/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
        <script src="./freshcart/libs/tiny-slider/dist/min/tiny-slider.js"></script>
        <script src="./freshcart/libs/dropzone/dist/min/dropzone.min.js"></script>
        <script src="./freshcart/libs/flatpickr/dist/flatpickr.min.js"></script>
        <script src="./freshcart/libs/inputmask/dist/jquery.inputmask.min.js"></script>
        <!-- Theme JS -->
        <script src="./freshcart/js/theme.min.js"></script>
        <!-- choose one -->
@endsection