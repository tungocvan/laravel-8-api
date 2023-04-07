@php 
    $myAsset = asset('phoenix'); 
@endphp
@extends('layouts.phoenix')
@section('title')
  Từ Ngọc Vân
@endsection
@section('main')
@include('parts.phoenix.main')  
@endsection
@section('footer')
  @parent  
@endsection
@section('css')  
        <link rel="stylesheet" href="{{$myAsset}}/assets/css/line.css" />
        <link
        href="{{$myAsset}}/assets/css/theme-rtl.min.css"
        type="text/css"
        rel="stylesheet"
        id="style-rtl"
        />
        <link
        href="{{$myAsset}}/assets/css/theme.min.css"
        type="text/css"
        rel="stylesheet"
        id="style-default"
        />
        <link href="{{ $myAsset.'/assets/css/app.css' }}" rel="stylesheet" />
        
@endsection
@section('js')        
        <script src="{{$myAsset.'/vendors/popper/popper.min.js'}}"></script>
        <script src="{{$myAsset.'/vendors/bootstrap/bootstrap.min.js'}}"></script>   
        <script src="{{$myAsset.'/vendors/fontawesome/all.min.js'}}"></script> 
        <script src="{{$myAsset.'/assets/js/app.js' }} "></script>
@endsection