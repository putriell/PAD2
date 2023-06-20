<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="../build/assets/images/jagung.svg">
        <title>Jagung | Login</title>

        {{-- Style --}}
        @vite(['resources/js/app.js'])
        
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row my-5 bg-primary rounded-5">
                    <div class="col">
                        <div class="row m-5">
                            <div class="col-md-6">
                                <a href="/">
                                    <button type="button" class="btn btn-bd-primary fw-bold " style="width: 100px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" style="margin-bottom: 3px; margin-right: 3px" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                          </svg>
                                        Back
                                    </button>   
                                </a>
                                <div class="text-center my-4">
                                    <img src="../build/assets/images/Login.png" alt="Login" style="width: 420px;">
                                </div>
                                
                            </div>
                            <div class="col-md-6 mt-4 ">
                                <h1 class="text-success mt-5">Login</h1>
                                <p class="text-success mt-3 fs-4">Please login to your account</p>

                                @if (Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-floating mt-5">
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="form-floating mt-4">
                                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter your password">
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                    <div class="row mx-2 justify-content-between">
                                        <div class="col-md-6">
                                            <div class="mt-4 form-check">
                                                <input type="checkbox" class="form-check-input outline-primary border-primary" id="remember" name="remember">
                                                <label class="form-check-label" for="remember">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <div class="mt-4">
                                                <a href="#" class="text-success fst-italic">forgot password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-bd-primary w-100 mt-4" type="submit" name="login" id="login">Log in</button>
                                    <div class="mt-2 text-center">
                                        <a href="{{ route('auth.google') }}">
                                            <i class="bi bi-google text-danger fs-3"></i>
                                        </a>
                                    </div>
                                    
                                    <div class="mt-2 text-center">
                                        <p class=" text-success">don't have an account? <a href="/register" class="text-success"> Create account</a></p>
                                    </div>
                                </form>                   
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
    </body>
</html>