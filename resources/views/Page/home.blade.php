@extends('Layout/base')

@section('content')
{{-- Hero --}}
<section>
    <div class="py-lg-18 py-10" style="background: url(../build/assets/images/hero.svg)no-repeat; background-size: cover; ">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center ">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center"><br><br><br><br><br><br>
                        <h1 class="display-2 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Build Better</span> <span class="headingTyped text-primary"></span>
                        </h1>
                        <p class="mb-6 h2 text-dark">
                        Build skills with courses Join Geeks to watch, play, learn, make, and discover, uscipit esi viimentum
                        laoreet non et odio.</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Hero --}}

{{-- List Fitur --}}
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mt-5 fw-bold">
                <h1 class="fw-bold">Fitur</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="row justify-content-center">
                    {{-- Card --}}
                    <div class="card mx-3 mb-2 bg-primary rounded-4 px-3 py-3 justify-content-center" style="max-width: 465px; max-hight:165px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../build/assets/images/wortel.svg" class="img-fluid rounded-start" alt="wortel">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3 mb-2 bg-primary rounded-4 px-3 py-3 justify-content-center" style="max-width: 465px; max-hight:165px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../build/assets/images/wortel.svg" class="img-fluid rounded-start" alt="wortel">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="row justify-content-center">
                    {{-- Card --}}
                    <div class="card mx-3 mb-2 bg-primary rounded-4 px-3 py-3 justify-content-center" style="max-width: 465px; max-hight:165px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../build/assets/images/wortel.svg" class="img-fluid rounded-start" alt="wortel">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3 mb-2 bg-primary rounded-4 px-3 py-3 justify-content-center" style="max-width: 465px; max-hight:165px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../build/assets/images/wortel.svg" class="img-fluid rounded-start" alt="wortel">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End List Fitur --}}

{{-- About --}}
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mt-5 mb-5 fw-bold">
                
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="card mb-3 mt-5 bg-primary rounded-4 px-5 py-5 justify-content-center" style="max-width: 1036px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title display-4 fw-bold">Lorem ipsum</h5>
                            <p class="card-text fw-semibold pe-5 mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="../build/assets/images/orang.svg" class="img-fluid rounded-start" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End About --}}

{{-- Chategory --}}
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mt-5 mb-5 fw-bold">
                <h1 class="fw-bold">Kategori</h1>
            </div>
        </div>
        <div class="row mb-1 justify-content-center">
            <div class="card bg-primary p-4 m-4 rounded-4 justify-content-center" style="width: 18rem;">
                <img src="../build/assets/images/kacang.svg" class="card-img-top" alt="kacang">
                <div class="card-body">
                    <h4 class="card-text fw-bold text-center mt-2">Lorem ipsum</h4>
                </div>
            </div>
            <div class="card bg-primary p-4 m-4 rounded-4 justify-content-center" style="width: 18rem;">
                <img src="../build/assets/images/kacang.svg" class="card-img-top" alt="kacang">
                <div class="card-body">
                    <h4 class="card-text fw-bold text-center mt-2">Lorem ipsum</h4>
                </div>
            </div>
            <div class="card bg-primary p-4 m-4 rounded-4 justify-content-center" style="width: 18rem;">
                <img src="../build/assets/images/kacang.svg" class="card-img-top" alt="kacang">
                <div class="card-body">
                    <h4 class="card-text fw-bold text-center mt-2">Lorem ipsum</h4>
                </div>
            </div>
        </div>
        <div class="row mb-5 justify-content-center">
            <div class="card bg-primary p-4 m-4 rounded-4 justify-content-center" style="width: 18rem;">
                <img src="../build/assets/images/kacang.svg" class="card-img-top" alt="kacang">
                <div class="card-body">
                    <h4 class="card-text fw-bold text-center mt-2">Lorem ipsum</h4>
                </div>
            </div>
            <div class="card bg-primary p-4 m-4 rounded-4 justify-content-center" style="width: 18rem;">
                <img src="../build/assets/images/kacang.svg" class="card-img-top" alt="kacang">
                <div class="card-body">
                    <h4 class="card-text fw-bold text-center mt-2">Lorem ipsum</h4>
                </div>
            </div>
            <div class="card bg-primary p-4 m-4 rounded-4 justify-content-center" style="width: 18rem;">
                <img src="../build/assets/images/kacang.svg" class="card-img-top" alt="kacang">
                <div class="card-body">
                    <h4 class="card-text fw-bold text-center mt-2">Lorem ipsum</h4>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Chategory --}}
    
@endsection