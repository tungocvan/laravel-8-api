<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Favicon icon-->
        <title>@yield('title')</title>
        <!-- Libs CSS -->
        @yield('css')
    </head>
    <body>        
      <main class="docs-main-wrapper">
              @section('header')  
                @include('parts.admin-header')                
              @show
              @yield('main')
              @section('footer')  
                @include('parts.admin-footer')
              @show             
      </main>      
      @yield('js')
      
    </body>
</html>
  