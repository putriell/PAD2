@extends('Layout/base')

@section('content')
{{-- Hero --}}
<section>
    <div class="row justify-content-center">
        <img src="../build/assets/images/hero.svg" alt="hero" class="cropped-image" style="">
    </div>
</section>
{{-- End Hero --}}

{{-- Search bar --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 m-5">
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="input-group" style="width: 769px; height: 50px">
                        <input type="text" class="form-control fst-italic" placeholder="Cari produk ..." aria-label="Cari produk ..." aria-describedby="button-addon2">
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

    {{-- card --}}
    <div class="row justify-content-start ms-3">
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 15rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
            <div class="card-body ms-1">
                <h5 class="card-text">Wortel</h5>
                <h5 class="card-text fw-bold">Rp100.000</h5>
            </div>
        </div>
    </div>
    
    {{-- End Card --}}

    {{-- Pagination --}}
    <nav aria-label="Page navigation">
        <div class="container">
            <ul class="pagination justify-content-end me-3">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>  
    </nav>
    {{-- Pagination --}}

</div>


<!-- Modal detai produk-->
<div class="modal fade" id="detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-primary">
            {{-- header --}}
            <div class="row ms-5 mt-4 mb-3">
                <button type="button" class="btn btn-bd-primary fw-bold " style="width: 100px;" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" style="margin-bottom: 3px; margin-right: 3px" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                      </svg>
                    Back
                </button>
            </div>

            {{-- body --}}
            <div class="row ms-5 m-3 mb-5">
                <div class="col-md-5 p-0">
                    <img src="../build/assets/images/wortel2.svg" class="rounded" alt="wortel" width="300px">
                </div>
                <div class="col-md-6 ms-3">
                    <div class="d-flex flex-column">
                        <h2 class="fw-bold p-0">Wortel</h2>
                        <p class="fs-6 mt-0 p-0 fw-light">Sayur</p>
                    </div>
                    <div class="d-flex flex-row p-0 mt-0">
                        <div class="d-inline-flex px-3 bg-warning rounded-4">
                            <h4 class="fw-bold mt-2">Rp 100.000</h4>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <h5 class="fw-bold">Umur Simpan</h5>
                        <p>ini penjelasan umur simpan ya, cuman umur simpan barang yang di contoh nya gitulah pokoknya. </p>
                    </div>
                    <div class="d-flex flex-column mt-2">
                        <h5 class="fw-bold mb-3">Informasi Penjual</h5>
                        <div class="d-flex flex-row">
                            <a href="#" class="text-black" style="text-decoration: none">
                                <img src="../build/assets/images/logos_google-maps.svg" alt="google map" class="mb-1 me-2" width="17px">
                                Sinduadi, Mlati, Sleman, Yogyakarta
                            </a>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <a href="#" class="text-black" style="text-decoration: none">
                                <img src="../build/assets/images/logos_whatsapp-icon.svg" alt="google map" class="mb-1 me-2" width="17px">
                                081234567890
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection