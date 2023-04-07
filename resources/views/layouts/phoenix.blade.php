@php 
    $myAsset = asset('phoenix/assets'); 
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{$myAsset}}/img/favicons/favicon.ico"
      />
        <!-- Favicon icon-->
        <title>@yield('title')</title>
        <!-- Libs CSS -->
        @yield('css')
    </head>
    <body>        
              @section('header')  
                            
              @show
              @yield('main')
              @section('footer')  
                
              @show
             
              @section('modal')  
                
              @show                           
       
        @yield('js')
    </body>
</html>
  