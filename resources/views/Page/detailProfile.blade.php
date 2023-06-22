@extends('layouts/base')

@section('content')

<div class="container">
    <div class="row mb-5">

        {{-- card profile --}}
        <div class="row">
            <div class="col p-4 m-5 bg-primary rounded-4">
                <div class="row">
                    <div class="mt-4 text-center">
                        <h3 class="mt-3 text-success fw-bold">{{ Auth::user() -> name }}</h3>
                    </div>
                    <div class="row ms-2 mt-5">

                        <div class="col-md-6">
                            <div class="row ms-5">
                                    <div class="col-md-5 p-0" style="max-width: 100px">
                                    <h6 class="text-success">Phone number</h6>
                                    <h6 class="text-success">Address</h6>
                                </div>
                                <div class="col-md-1 ms-1 p-0" style="width: 10px">
                                    <h6 class="text-success">:</h6>
                                    <h6 class="text-success">:</h6>
                                </div>
                                <div class="col-md-6 p-0" style="max-width: 600px">
                                    <h6 class="text-success">{{ Auth::user() -> phone }}</h6>
                                    <h6 class="text-success">{{ Auth::user() -> address }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 text-center">
                            <h6 class="text-success fw-bold">Jumlah produk : {{ $jumlah_produk }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            

        <div class="row">
            <div class="col mx-5 text-center p-2 bg-primary rounded-4">
                <h4 class="text-success fw-bold mt-2">Daftar Produk</h4>
            </div>
        </div>

        {{-- card --}}
        <div class="row justify-content-start ms-2 mt-4 mb-5">
            
            @foreach ($data_produk as $data)
                {{-- Card --}}
                <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="{{ '#detail'.$data -> id }}">
                    <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                    <div class="card-body ms-1">
                        <h5 class="card-text text-success">{{ $data -> nama_produk }}</h5>
                        <h5 class="card-text fw-bold text-success">{{ "Rp ".number_format($data -> harga, 0, ",", "." ) }}</h5>
                    </div>
                </div>
                {{-- End Card --}}

                <!-- Modal detail produk -->
                <div class="modal fade" id="{{ 'detail'.$data -> id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
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
                            <div class="row ms-5 m-3">
                                <div class="col-md-5 p-0">
                                    <img src="../build/assets/images/wortel2.svg" class="rounded" alt="wortel" width="300px">
                                </div>
                                <div class="col-md-6 ms-3 mb-4">
                                    <div class="d-flex flex-column">
                                        <h2 class="fw-bold p-0 text-success">{{ $data -> nama_produk }}</h2>
                                        <p class="fs-6 mt-0 p-0  text-success">{{ $data -> kategori_produk }}</p>
                                    </div>
                                    <div class="d-flex flex-row p-0 mt-0">
                                        <div class="d-inline-flex px-3 bg-warning rounded-4">
                                            <h4 class="fw-bold mt-2 text-success">{{ "Rp ".number_format($data -> harga, 0, ",", "." ) }}</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <h5 class="fw-bold text-success">Umur Simpan</h5>
                                        <p class="text-success">{{ $data -> umur_simpan }}</p>
                                    </div>
                                    <div class="d-flex flex-column mt-2">
                                        <h5 class="fw-bold mb-3 text-success">Informasi Penjual</h5>
                                        <div class="d-flex flex-row">
                                            <a href="#" class="text-success" style="text-decoration: none">
                                                <img src="../build/assets/images/logos_google-maps.svg" alt="google map" class="mb-1 me-2" width="17px">
                                                {{-- {{ Auth::user() -> address }} --}}
                                            </a>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <a href="#" class="text-success" style="text-decoration: none">
                                                <img src="../build/assets/images/logos_whatsapp-icon.svg" alt="google map" class="mb-1 me-2" width="17px">
                                                {{-- {{ Auth::user() -> phone }} --}}
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    sadasdf
                </div>
                {{--  End Modal detail produk --}}
            @endforeach

        </div>

    </div> 
</div>
    
@endsection