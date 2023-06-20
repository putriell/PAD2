@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2 bg-primary rounded-5">
        <div class="col m-5">
            <h2 class="text-success fw-bold">Register</h2>
            <h5 class="text-success mt-4">Please input your detail</h5>
            <div class="row">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mt-5">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus aria-describedby="yourName" placeholder="Enter your name" >
                                <label for="name" class="form-label">Name</label>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mt-4">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" aria-describedby="emailHelp" placeholder="Enter your email">
                                <label for="email" class="form-label">Email</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mt-4">
                                <input type="mobile" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumber" placeholder="Enter your phone number">
                                <label for="phoneNumber" class="form-label">No. Telp</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-5">
                                <input type="text" class="form-control" id="address" name="address" aria-describedby="address" placeholder="Enter your address">
                                <label for="address" class="form-label">Alamat</label>
                            </div>
                            <div class="form-floating mt-4">
                                <input type="password" class="form-control @error('name') is-invalid @enderror" id="password" name="password" required autocomplete="new-password" aria-describedby="passwordHelp" placeholder="Enter your password">
                                <label for="password" class="form-label">Password</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mt-4">
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="confirmPassword" aria-describedby="confimPassword" placeholder="Confirm password">
                                <label for="confirmPassword" class="form-label" >Konfirmasi Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-bd-primary w-50 mt-3 fw-bold" type="submit" name="register" id="register">Register</button>
                        <p class="text-success mt-3">already have an account? <a href="/login" class="text-success">login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
