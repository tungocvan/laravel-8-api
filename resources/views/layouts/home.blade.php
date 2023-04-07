<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Favicon icon-->
        <title>@yield('title')</title>
        <!-- Libs CSS -->
        @yield('css')
    </head>
    <body>        
              @section('header')  
                @include('parts.header')
                @include('parts.nav')
              @show
              @yield('main')
              @section('footer')  
                @include('parts.footer')
              @show
             
              @section('modal')  
                @include('parts.modal')
              @show                           
       
        @yield('js')
    </body>
</html>
  