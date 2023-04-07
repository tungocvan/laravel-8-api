<main>
    <!-- section -->

    <section class="my-lg-14 my-8">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                    <!-- img -->
                    <img src="./freshcart/images/svg-graphics/signup-g.svg" alt="" class="img-fluid" />
                </div>
                <!-- col -->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                    <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                        <p>Welcome to FreshCart! Enter your email to get started.</p>
                    </div>
                    <!-- form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row g-3">
                            <!-- col -->
                            <div class="col-12">
                                <!-- input -->
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  placeholder="Full name" aria-label="Full name"  />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                            <div class="col-12"> 
                                <!-- input -->                                
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  id="email" placeholder="Enter Email address"  />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <!-- input -->                                
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Password"  />
                        
                                @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <!-- input -->                                
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Enter Password confirm">                        
                            </div>
                            <!-- btn -->
                            <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Register</button></div>
                            <!-- text -->
                            <p>
                                <small>By continuing, you agree to our <a href="#!"> Terms of Service</a> & <a href="#!">Privacy Policy</a></small>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
