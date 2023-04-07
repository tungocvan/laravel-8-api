@php 
    $myAsset = asset('freshcart'); 
@endphp
@extends('layouts.admin')
@section('title')
  Admin
@endsection
@section('main')
    @include('parts.admin-sidebar') 
    @include('parts.admin-main') 
@endsection
@section('footer')
  @parent  
@endsection
@section('css')  
        <link href="{{ $myAsset.'/libs/bootstrap-icons/font/bootstrap-icons.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/feather-webfont/dist/feather-icons.css' }}" rel="stylesheet" />            
        <link rel="stylesheet" href="{{ $myAsset.'/css/theme.min.css' }}" />
@endsection
@section('js')
        <script src="{{ $myAsset.'/libs/jquery/dist/jquery.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/bootstrap/dist/js/bootstrap.bundle.min.js' }} "></script>       
        <script src="{{ $myAsset.'/libs/inputmask/dist/jquery.inputmask.min.js' }} "></script>        
        <script src="{{ $myAsset.'/js/theme.min.js' }} "></script>
@endsection