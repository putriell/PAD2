@extends('layouts/base')

@section('content')
    
{{-- Hero --}}
<section>
    <div class="row justify-content-center">
        <img src="../build/assets/images/hero.svg" alt="hero" class="cropped-image" style="">
    </div>
</section>
{{-- End Hero --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 m-5">
            <form action="{{ route('product.search', $keyword) }}" method="GET">
                <div class="row justify-content-center">
                    <div class="input-group" style="width: 769px; height: 50px">
                        <input type="text" name="key_word" class="form-control fst-italic" placeholder="Cari produk ..." aria-label="Cari produk ..." aria-describedby="button-addon2">
                        <button class="btn btn-primary-input" type="button" id="button-addon2" style="width: 80px;">
                            <img src="../build/assets/images/ic_search.svg" alt="search" width="30px">
                        </button>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Semua kota ...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Urutkan harga</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- End Search bar --}}
</div>


@endsection