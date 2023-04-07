<main>
    <!-- section -->
    <section class="my-lg-14 my-8">
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                    <!-- img -->
                    <img src="./freshcart/images/svg-graphics/signin-g.svg" alt="" class="img-fluid" />
                </div>
                <!-- col -->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                    <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
                        <p>Welcome back to FreshCart! Enter your email to get started.</p>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            Đã có lỗi xảy ra.
                        </div>   
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row g-3">
                            <!-- row -->

                            <div class="col-12">
                                <!-- input -->
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="inputEmail4" placeholder="Email"  />                                                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <!-- input -->
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword4" placeholder="Password"  />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between">
                                <!-- form check -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <!-- label -->
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me 
                                    </label>
                                </div>
                                <div>Forgot password? <a href="/forgot">Reset It</a></div>
                            </div>
                            <!-- btn -->
                            <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Sign In</button></div>
                            <div class="d-flex justify-content-between">
                                <a href="/auth/google" class="btn btn-primary w-45" type="button">Sign In Google</a>
                                <a href="/auth/facebook" class="btn btn-primary w-45" type="button">Sign In Facebook</a>
                            </div>
                            <!-- link -->
                            <div>Don’t have an account? <a href="/signup"> Sign Up</a></div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </section>
</main>
