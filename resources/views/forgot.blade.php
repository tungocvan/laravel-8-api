@php 
    $myAsset = asset('freshcart');
@endphp
@extends('layouts.home')
@section('title')
  Từ Ngọc Vân
@endsection
@section('main')
@include('parts.main-forgot')
@endsection
@section('footer')
  @parent  
@endsection
@section('css')  
        <link href="{{ $myAsset.'/libs/bootstrap-icons/font/bootstrap-icons.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/feather-webfont/dist/feather-icons.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/slick-carousel/slick/slick.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/slick-carousel/slick/slick-theme.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/simplebar/dist/simplebar.min.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/nouislider/dist/nouislider.min.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/tiny-slider/dist/tiny-slider.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/dropzone/dist/min/dropzone.min.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/prismjs/themes/prism-okaidia.min.css' }}" rel="stylesheet" />        
        <link rel="stylesheet" href="{{ $myAsset.'/css/theme.min.css' }}" />
@endsection
@section('js')
        <script src="{{ $myAsset.'/libs/jquery/dist/jquery.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/bootstrap/dist/js/bootstrap.bundle.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/jquery-countdown/dist/jquery.countdown.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/slick-carousel/slick/slick.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/simplebar/dist/simplebar.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/nouislider/dist/nouislider.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/wnumb/wNumb.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/rater-js/index.js' }} "></script>
        <script src="{{ $myAsset.'/libs/prismjs/prism.js' }} "></script>
        <script src="{{ $myAsset.'/libs/prismjs/components/prism-scss.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/prismjs/plugins/toolbar/prism-toolbar.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/tiny-slider/dist/min/tiny-slider.js' }} "></script>
        <script src="{{ $myAsset.'/libs/dropzone/dist/min/dropzone.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/flatpickr/dist/flatpickr.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/inputmask/dist/jquery.inputmask.min.js' }} "></script>        
        <script src="{{ $myAsset.'/js/theme.min.js' }} "></script>
@endsection