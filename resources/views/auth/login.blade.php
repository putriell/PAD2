@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row  bg-primary rounded-5">
        <div class="col m-5">
            <div class="row">
                <div class="col-md-6">
                    {{-- <a href="/">
                        <button type="button" class="btn btn-bd-primary fw-bold " style="width: 100px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" style="margin-bottom: 3px; margin-right: 3px" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                              </svg>
                            Back
                        </button>   
                    </a> --}}
                    <div class="text-center mt-4">
                        <img src="../build/assets/images/Login.png" alt="Login" style="width: 420px;">
                    </div>
                </div>
                <div class="col-md-6 mt-4 ">
                    <h1 class="text-success mt-4">Login</h1>
                    <p class="text-success mt-3 fs-4">Please login to your account</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mt-4">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                            <label for="email" class="form-label">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mt-4">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter your password">
                            <label for="password" class="form-label">Password</label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mx-2 justify-content-between">
                            <div class="col-md-6">
                                <div class="mt-4 form-check">
                                    <input type="checkbox" class="form-check-input outline-primary border-primary" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="mt-4">
                                    {{-- <a href="#" class="text-success fst-italic">forgot password?</a> --}}
                                    @if (Route::has('password.request'))
                                        <a class="text-success fst-italic" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-bd-primary w-100 mt-4" type="submit" name="login" id="login">Log in</button>
                        {{-- <div class="mt-3 text-center">
                            <p class=" text-success">don't have an account? <a href="{{ route('register') }}" class="text-success"> Create account</a></p>
                        </div> --}}
                    </form>                   
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
