@extends('layouts/base')

@section('content')
{{-- Hero --}}
<section>
    <div class="py-lg-18 py-10" style="background: url(../build/assets/images/hero.svg)no-repeat; background-size: cover; ">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center ">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center"><br><br><br><br><br><br>
                        @foreach ($data_content as $content)
                            <h1 class="display-2 fw-bold mb-3 text-primary"><span class="text-success px-3 px-md-0">{{ $content -> hero }}</span> <span class="headingTyped text-primary"></span>
                            </h1>
                            <p class="mb-6 h2 text-success">
                                {{ $content -> hero_body }}
                            </p>
                            <br><br><br>
                        @endforeach
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
                <h1 class="fw-bold text-success">Fitur</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="row justify-content-center">
                    {{-- Card --}}
                    @foreach ($data_content as $item)
                        <div class="card mx-3 mb-2 mt-4 bg-primary rounded-4 px-3 py-3 justify-content-center" style="max-width: 465px; max-hight:165px">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('build/assets/images/'.$item -> foto_fitur) }}" class="img-fluid rounded-start" alt="wortel">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">{{ $item -> fitur }}</h5>
                                        <p class="card-text text-success">{{ $item -> fitur_body }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            @foreach ($data_content as $about)
                                <h5 class="card-title display-4 fw-bold text-success">{{ $about -> about }}</h5>
                                <p class="card-text fw-semibold pe-5 mt-5 text-success">{{ $about -> about_body }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="build/assets/images/orang.svg" class="img-fluid rounded-start" alt="img">
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
                <h1 class="fw-bold text-success">Kategori</h1>
            </div>
        </div>
        <div class="row mb-4 justify-content-center">

            @foreach ($data_content as $kategori)
                <div class="card bg-primary p-4 m-3 rounded-4 justify-content-center" style="width: 14rem;">
                    {{-- <img src="{{ asset('build/assets/images/'.$kategori -> foto_ketegori) }}" class="card-img-top" alt="kacang"> --}}
                    <img src="build/assets/images/kacang.svg" class="card-img-top" alt="kacang">
                    <div class="card-body">
                        <h4 class="card-text fw-bold text-success text-center mt-2">{{ $kategori -> kategori }}</h4>
                    </div>
                </div>
            @endforeach
                
        </div>
    </div>
</section>
{{-- End Chategory --}}
    
@endsection