<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= mt-3.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="../build/assets/images/jagung.svg">
        <title>Jagung</title>

        {{-- style --}}
        @vite(['resources/js/app.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-lg">
                <a class="navbar-brand ms-3" href="/">
                    <img src="../build/assets/images/jagung.svg" alt="jagung" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb- mb-lg-0 justify-content-end">
                        <li class="nav-item me-3">
                            <a class="nav-link fw-bold text-success " href="/home">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link fw-bold text-success " href="/product">Product</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link fw-bold text-success " href="/contact">Contact</a>
                        </li>
                        <li class="nav-item me-3">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item ">
                                        <a class="nav-link btn btn-bd-primary px-3 w-100 w-md-auto fw-bold text-success"  href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-bd-primary ms-sm- w-100 w-md-auto fw-bold text-success" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ strtok(Auth::user() -> name, " ") }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            {{ __('Profile') }}
                                        </a>

                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button href="/login" type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- End Navbar --}}


        {{-- Content --}}
        @yield('content')
        {{-- End Content --}}


        {{-- Footer --}}
        <footer class="text-center text-lg-start bg-primary ">
            <div class="container d-flex justify-content-center">
                <a href="#" class="mx-1 mt-3">
                    <img src="../build/assets/images/footer/whatsapp.svg" alt="whatsapp">
                </a>
                <a href="#" class="mx-1 mt-3">
                    <img src="../build/assets/images/footer/facebook.svg" alt="facebook">
                </a>
                <a href="#" class="mx-1 mt-3">
                    <img src="../build/assets/images/footer/linkedin.svg" alt="linkedin">
                </a>
                <a href="#" class="mx-1 mt-3">
                    <img src="../build/assets/images/footer/instagram.svg" alt="instagram">
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-center text-success pb-3 pt-2">
                © 2023 Copyright: Lorem ipsum
            </div>
            <!-- Copyright -->
        </footer>
        {{-- End Footer --}}

    </body>

    {{-- script --}}
    <script>
        
        // navbar
        const activePage = window.location.pathname;
        const navLinks = document.querySelectorAll('nav a');


        navLinks.forEach((link) => {
            console.log(`${activePage}`);
            if (`${activePage}` != '' && `${activePage}` != '/profile' && `${activePage}` != '/') {
                if (link.href.includes(`${activePage}`)) {
                    link.classList.add('active');
                }
            }
        });
        
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @stack('script')
    <script>
        AOS.init();
    </script>

</html>