<div class="modal fade" id="userModalSignUp" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}"> 
                    @csrf    
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="fullName" placeholder="Enter Your Name" value="{{ old('name') }}" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  id="email" placeholder="Enter Email address"  />
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Password"  />
                        
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password-confirm" class="form-label">Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Enter Password confirm">
                        <small class="form-text">By Signup, you agree to our <a href="#!">Terms of Service</a> & <a href="#!">Privacy Policy</a></small>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer border-0 justify-content-center">Already have an account? <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModalSignIn">Sign in</a></div>
        </div>
    </div>
</div>