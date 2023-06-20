<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="../build/assets/images/jagung.svg">
        <title>Jagung | Register</title>

        {{-- Style --}}
        @vite(['resources/js/app.js'])

    </head>
    <body>
        <section>
            <div class="container">
                <div class="row my-5 bg-primary rounded-5">
                    <div class="col m-5">
                        <h2 class="text-success fw-bold">Register</h2>
                        <h5 class="text-success mt-4">Please input your detail</h5>
                        <div class="row">

                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mt-5">
                                            <input type="text" class="form-control" id="name" name="name" aria-describedby="yourName" placeholder="Enter your name">
                                            <label for="name" class="form-label">Name</label>
                                        </div>
                                        <div class="form-floating mt-4">
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                                            <label for="email" class="form-label">Email</label>
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
                                            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter your password">
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                        <div class="form-floating mt-4">
                                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" aria-describedby="confimPassword" placeholder="Confirm password">
                                            <label for="password" class="form-label">Konfirmasi Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button class="btn btn-bd-primary w-25 mt-3 fw-bold" type="submit" name="register" id="register">Register</button>
                                    <p class="text-success mt-3">already have an account? <a href="/login" class="text-success">login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>