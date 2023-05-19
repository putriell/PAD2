@extends('Layout/base')

@section('content')
    
<section>
    <div class="row align-item-center">
        <h1 class="disply-2 text-center my-5 py-5">
            Lorem ipsum dolor sit amet
        </h1>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-5">
            {{-- card profile --}}
            <div class="col-md-4 p-3">
                <div class="col p-4 bg-primary rounded-4">
                    <div class="mt-4 text-center">
                        <img src="..\build\assets\images\profile.png" alt="profile" width="113px">
                        <h3 class="mt-3 text-white">Your Full Name</h3>
                    </div>
                    <div class="row ms-2 mt-5">
                        <div class="col-md-5 p-0" style="max-width: 100px">
                            <h6 class="text-white">Email</h6>
                            <h6 class="text-white">Phone number</h6>
                            <h6 class="text-white">Date of birth</h6>
                        </div>
                        <div class="col-md-1 ms-1 p-0" style="width: 10px">
                            <h6 class="text-white">:</h6>
                            <h6 class="text-white">:</h6>
                            <h6 class="text-white">:</h6>
                        </div>
                        <div class="col-md-6 p-0" style="max-width: 600px">
                            <h6 class="text-white">example@example.com</h6>
                            <h6 class="text-white">081234567890</h6>
                            <h6 class="text-white">10 - 12 - 1945</h6>
                        </div>
                    </div>
                    <div class="row mt-5 ms-2">
                        <div class="col p-0">
                            <h6 class="text-white">edit profile</h6>
                            <h6 class="text-white">change password</h6>
                            <h6 class="text-white">Jumlah produk anda : 126</h6>
                        </div>
                    </div>
                </div>
            </div>

            {{-- product --}}
            <div class="col-md-8 p-3">

                {{-- add --}}
                <div class="row justify-content-between p-1 bg-primary rounded-5 mx-3">
                    <div class="col-md-4 p-2 align-self-center">
                        <h4 class="text-white mt-1 ms-2">Daftar Produk</h4>
                    </div>
                    <div class="col-md-4 p-2 align-items-center text-end">
                        <button data-bs-toggle="modal" data-bs-target="#add" class="btn btn-bd-primary ms-sm-auto w-md-auto me-3 fw-bold border border-2 border-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill mb-1 me-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                              </svg>
                            Add
                        </button>
                    </div>
                </div>

                {{-- card --}}
                <div class="row justify-content-start ms-2 mt-4 mb-5" style="max-height: 600px; overflow: auto;">
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                    <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#detail">
                        <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                        <div class="card-body ms-1">
                            <h5 class="card-text">Wortel</h5>
                            <h5 class="card-text fw-bold">Rp100.000</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Modal detail produk -->
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
            <div class="row ms-5 m-3">
                <div class="col-md-5 p-0">
                    <img src="../build/assets/images/wortel2.svg" class="rounded" alt="wortel" width="300px">
                </div>
                <div class="col-md-6 ms-3 mb-4">
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


<!-- Modal add produk -->
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
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
            
            <div class="row text-center">
                <h2 class="fw-bold">Tambah Produk</h2>
            </div>

            {{-- body --}}
            <div class="row mx-5 mt-4">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="namaProduk" class="form-label fw-bold">Nama produk</label>
                        <input type="text" class="form-control" id="namaProduk">
                    </div>
                    <div class="mb-3">
                        <label for="kategoriProduk" class="form-label fw-bold">Kategori produk</label>
                        <select class="form-select" id="kategoriProduk">
                            <option selected disabled>Pilih kategori</option>
                            <option value="1">Sayur</option>
                            <option value="2">Kacang-kacangan</option>
                            <option value="3">Rempah</option>
                            <option value="3">Bumbu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label fw-bold">Harga</label>
                        <input type="text" class="form-control" id="harga">
                    </div>
                    <div class="mb-3">
                        <label for="umurSimpan" class="form-label fw-bold">Umur simpan</label>
                        <input type="text" class="form-control" id="umurSimpan">
                    </div>
                    <h6 class="fw-bold mt-4">Informasi anda:</h6>
                    <div class="row">
                        <div class="col">
                            <label for="alamat" class="form-label fw-bold">Alamat</label>
                            <input type="text" class="form-control" id="alamat">
                        </div>
                        <div class="col">
                            <label for="kontak" class="form-label fw-bold">No. Telp</label>
                            <input type="text" class="form-control" id="kontak">
                        </div>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="upImg" class="form-label fw-bold">Gambar produk</label>
                        <input class="form-control" type="file" id="upImg" multiple>
                    </div>
                    <button class="btn btn-bd-primary w-100 mt-3 fw-bold mb-5" type="submit" name="addProduk" id="addProduk">Tambahkan Produk</button>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection