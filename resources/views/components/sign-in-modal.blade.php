<div class="modal fade" id="userModalSignIn" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign In</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
            @csrf                  
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  id="email" placeholder="Enter Email address" required="" />
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" required="" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <small class="form-text">By Signup, you agree to our <a href="#!">Terms of Service</a> & <a href="#!">Privacy Policy</a></small>
                    </div>
                        
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
            <div class="modal-footer border-0 justify-content-center">Already have an account?<a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModalSignUp">Sign up</a></div>
        </div>
    </div>
</div>