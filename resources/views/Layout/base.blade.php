<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= mt-3.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="../build/assets/images/jagung.svg">
        <title>Jagung</title>
        @vite(['resources/js/app.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-lg">
                <a class="navbar-brand ms-3" href="#">
                    <img src="../build/assets/images/jagung.svg" alt="jagung" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb- mb-lg-0 justify-content-end">
                        <li class="nav-item me-3">
                            <a class="nav-link fw-bold text-black " href="/home">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link fw-bold text-black " href="/product">Product</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link fw-bold text-black " href="/contact">Contact</a>
                        </li>
                        <li class="nav-item py- py-sm-0 me-3">
                            <a href="/profile" class="btn btn-bd-primary ms-sm- w-100 w-md-auto fw-bold">Login</a>
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
            <div class="text-center text-black pb-3 pt-2">
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
    @stack('script')

</html>