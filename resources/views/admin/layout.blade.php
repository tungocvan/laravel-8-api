<!-- Wrapper  -->

@php 
    $myAsset = asset('freshcart'); 
    /// echo $data;
@endphp
@extends('layouts.admin')
@section('title')
  {{ $data['status'] }}
@endsection
@section('main')
    @include('parts.admin-sidebar')  
    <div style="padding-top: 90px; padding-left:260px">   
    @include('admin.parts.'.$action)      
    </div>
@endsection
@section('footer') 
  @parent  
@endsection
@section('css')  
        <link href="{{ $myAsset.'/libs/bootstrap-icons/font/bootstrap-icons.css' }}" rel="stylesheet" />
        <link href="{{ $myAsset.'/libs/feather-webfont/dist/feather-icons.css' }}" rel="stylesheet" />            
        <link rel="stylesheet" href="{{ $myAsset.'/css/theme.min.css' }}" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('js')
        <script src="{{ $myAsset.'/libs/jquery/dist/jquery.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/bootstrap/dist/js/bootstrap.bundle.min.js' }} "></script>       
        <script src="{{ $myAsset.'/libs/inputmask/dist/jquery.inputmask.min.js' }} "></script>        
        <script src="{{ $myAsset.'/js/theme.min.js' }} "></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
@endsection