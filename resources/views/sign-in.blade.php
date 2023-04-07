<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
       <link type="text/css" href="{{ asset('css/sign.css') }}" rel="stylesheet">
    </head>
    <body class="text-center">        
        <div class="container">
         <main class="form-signin w-100 m-auto">
  <form method="post" action="/sign-in">
    @csrf
    <img class="mb-4" src="{{ asset('images/bootstrap-logo.svg') }}" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <p>Vui lòng kiểm tra lại dữ liệu.</p>
    </div>
    @endif
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
      @error('email')
        <span style="color:red;">{{$message}}</span>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password"  name="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="false" name="remember" > Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
  </form>
</main>            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>
<script>
  $(document).ready(function(){
    $('input[name="remember"]').click(function(e){             
          e.target.value = e.target.checked           
    });
  });
</script>