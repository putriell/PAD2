@extends('layouts/base')

@section('content')

<section>
    <div class="row align-item-center">
        <h1 class="disply-2 text-center text-success my-5 py-5">
            Selamat Datang, {{ strtok(Auth::user() -> name, " ")}}
        </h1>
    </div>
</section>

<section>
    <div class="container">

        {{-- alert --}}
        @if (Session::has('success_add'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success_add') }}
            </div>
        @endif
        @if (Session::has('successChangePassword'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('successChangePassword') }}
            </div>
        @endif
        @if (Session::has('pwBerbeda'))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('pwBerbeda') }}
            </div>
        @endif
        @if (Session::has('passwordLamaSalah'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('passwordLamaSalah') }}
            </div>
        @endif
        {{-- end alert --}}

        
        <div class="row mb-5">
            {{-- card profile --}}
            <div class="col-md-4 p-3">
                <div class="col p-4 bg-primary rounded-4">
                    <div class="mt-4 text-center">
                        <img src="..\build\assets\images\profile.png" alt="profile" width="113px">
                        <h3 class="mt-3 text-success">{{ Auth::user() -> name }}</h3>
                    </div>
                    <div class="row ms-2 mt-5">
                        <div class="col-md-5 p-0" style="max-width: 100px">
                            <h6 class="text-success">Email</h6>
                            <h6 class="text-success">Phone number</h6>
                            <h6 class="text-success">Address</h6>
                        </div>
                        <div class="col-md-1 ms-1 p-0" style="width: 10px">
                            <h6 class="text-success">:</h6>
                            <h6 class="text-success">:</h6>
                            <h6 class="text-success">:</h6>
                        </div>
                        <div class="col-md-6 p-0" style="max-width: 600px">
                            <h6 class="text-success">{{ Auth::user() -> email }}</h6>
                            <h6 class="text-success">{{ Auth::user() -> phone }}</h6>
                            <h6 class="text-success">{{ Auth::user() -> address }}</h6>
                        </div>
                    </div>
                    <div class="row mt-5 ms-2">
                        <div class="col p-0">
                            <a href="" data-bs-toggle="modal" data-bs-target="#editProfile"><h6 class="text-success">edit profile</h6></a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#changePassword"><h6 class="text-success">change password</h6></a>
                            <h6 class="text-success">Jumlah produk anda : {{ $jumlah_produk }}</h6>
                        </div>
                    </div>
                </div>
            </div>

            {{-- product --}}
            <div class="col-md-8 p-3">

                {{-- add --}}
                <div class="row justify-content-between p-1 bg-primary rounded-5 mx-3">
                    <div class="col-md-4 p-2 align-self-center">
                        <h4 class="text-success mt-1 ms-2">Daftar Produk</h4>
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
            
                    @foreach ($data_produk as $data)
                        {{-- Card --}}
                        <div class="card bg-primary mb-4 mx-3 p-0" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="{{ '#detail'.$data -> id }}">
                            <img src="../build/assets/images/wortel2.svg" class="card-img-top" alt="wortel">
                            <div class="card-body ms-1">
                                <h5 class="card-text text-success">{{ $data -> nama_produk }}</h5>
                                <h5 class="card-text fw-bold text-success">{{ "Rp ".number_format($data -> harga, 0, ",", "." ) }}</h5>
                            </div>
                            <div class="row justify-content-center mb-2">
                                <div class="col-4 ms-1 bg-danger rounded">
                                    <div class="col">
                                        <a data-bs-toggle="modal" data-bs-target="{{ '#delete'.$data -> id }}">
                                            <i class="bi bi-trash-fill ms-2 fs-5"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-4 ms-2 bg-warning rounded">
                                    <div class="col">
                                        <a data-bs-toggle="modal" data-bs-target="{{ '#edit'.$data -> id }}">
                                            <i class="bi bi-pencil-fill ms-2 fs-5"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>    
                        </div>
                        {{-- End Card --}}


                        <!-- Modal detail produk -->
                        <div class="modal fade" id="{{ 'detail'.$data -> id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content bg-primary">
                                    {{-- header --}}
                                    <div class="row ms-5 mt-4 mb-3">
                                        <div class="col">
                                            <button type="button" class="btn btn-bd-primary fw-bold " style="width: 100px;" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" style="margin-bottom: 3px; margin-right: 3px" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                                </svg>
                                                Back
                                            </button>
                                        </div>
                                        
                                        <div class="col-2 ms-auto">
                                            <a href="">
                                                <i class="bi bi-person-circle text-dark fs-4"></i>
                                            </a>
                                        </div>
                                        
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
                                                        {{ Auth::user() -> address }}
                                                    </a>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <a href="#" class="text-success" style="text-decoration: none">
                                                        <img src="../build/assets/images/logos_whatsapp-icon.svg" alt="google map" class="mb-1 me-2" width="17px">
                                                        {{ Auth::user() -> phone }}
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  End Modal detail produk --}}


                        {{-- Modal Konfirmasi hapus--}}
                        <div class="modal fade" id="{{ 'delete'.$data -> id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus produk?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ 'Apakah anda ingin menghapus '.$data -> nama_produk }}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <form action="{{ route('product.destroy', $data -> id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Ya</button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Modal Konfirmasi hapus --}}


                        <!-- Modal edit produk -->
                        <div class="modal fade" id="{{ 'edit'.$data -> id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
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
                                        <h2 class="fw-bold">Edit Produk</h2>
                                    </div>

                                    {{-- body --}}
                                    <div class="row mx-5 mt-4">
                                        <form action="{{ route('product.edit', $data -> id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="namaProduk" class="form-label fw-bold">Nama produk</label>
                                                <input type="text" class="form-control" name="namaProduk" id="namaProduk" value="{{ $data -> nama_produk }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategoriProduk" class="form-label fw-bold">Kategori produk</label>
                                                <select class="form-select" name="kategori" id="kategoriProduk">
                                                    <option selected disabled>Pilih kategori</option>
                                                    <option value="Sayur">Sayur</option>
                                                    <option value="Kacang-kacangan">Kacang-kacangan</option>
                                                    <option value="Rempah">Rempah</option>
                                                    <option value="Bumbu">Bumbu</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mobile" class="form-label fw-bold">Harga</label>
                                                <input type="text" class="form-control" name="harga" id="harga" value="{{ $data -> harga }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="umurSimpan" class="form-label fw-bold">Umur simpan</label>
                                                <textarea class="form-control" name="umurSimpan" id="umurSimpan">{{ $data -> umur_simpan }}</textarea>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="upImg" class="form-label fw-bold">Gambar produk</label>
                                                <input class="form-control" type="file" name="foto" id="upImg" multiple>
                                            </div>
                                            <button class="btn btn-bd-primary w-100 mt-3 fw-bold mb-5" type="submit" name="editProduk" id="addProduk">Simpan Produk</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- End Modal edit produk --}}
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>


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
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="namaProduk" class="form-label fw-bold">Nama produk</label>
                        <input type="text" class="form-control" name="namaProduk" id="namaProduk">
                    </div>
                    <div class="mb-3">
                        <label for="kategoriProduk" class="form-label fw-bold">Kategori produk</label>
                        <select class="form-select" name="kategori" id="kategoriProduk">
                            <option selected disabled>Pilih kategori</option>
                            <option value="Sayur">Sayur</option>
                            <option value="Kacang-kacangan">Kacang-kacangan</option>
                            <option value="Rempah">Rempah</option>
                            <option value="Bumbu">Bumbu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label fw-bold">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>
                    <div class="mb-3">
                        <label for="umurSimpan" class="form-label fw-bold">Umur simpan</label>
                        <textarea class="form-control" name="umurSimpan" id="umurSimpan"></textarea>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="upImg" class="form-label fw-bold">Gambar produk</label>
                        <input class="form-control" type="file" name="foto" id="upImg" multiple>
                    </div>
                    <button class="btn btn-bd-primary w-100 mt-3 fw-bold mb-5" type="submit" name="addProduk" id="addProduk">Tambahkan Produk</button>
                </form>
            </div>

        </div>
    </div>
</div>


{{-- Modal edit profile --}}
<div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
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
                <h2 class="fw-bold">Edit Profile</h2>
            </div>

            {{-- body --}}
            <div class="row mx-5 mt-4">
                <form action="{{ route('profile.edit', Auth::user() -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name_profile" class="form-label fw-bold">Name </label>
                        <input type="text" class="form-control" name="name_profile" id="name_profile" value="{{ Auth::user() -> name }}">
                    </div>
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user() -> email }}">
                        </div>
                    </fieldset>
                    <div class="mb-3">
                        <label for="phone" class="form-label fw-bold">Phone</label>
                        <input type="mobile" class="form-control" name="phone" id="phone" value="{{ Auth::user() -> phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ Auth::user() -> address }}">
                    </div>
                    {{-- <div class="mb-3 mt-4">
                        <label for="upImg" class="form-label fw-bold">Foto</label>
                        <input class="form-control" type="file" name="foto" id="upImg" multiple>
                    </div> --}}
                    <button class="btn btn-bd-primary w-100 mt-3 fw-bold mb-5" type="submit" name="editProfile" id="editProfile">Simpan Profile</button>
                </form>
            </div>

        </div>
    </div>
</div>


{{-- Modal Change Password --}}
<div class="modal fade" id="changePassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
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
                <h2 class="fw-bold">Change Password</h2>
            </div>

            {{-- body --}}
            <div class="row mx-5 mt-4">
                <form action="{{ route('changePassword') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="old_password" class="form-label fw-bold">Password </label>
                        <input type="password" class="form-control" name="old_password" id="old_password">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label fw-bold">New Password </label>
                        <input type="password" class="form-control" name="new_password" id="new_password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label fw-bold">Confirm New Password </label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                    </div>
                    <button class="btn btn-bd-primary w-100 mt-3 fw-bold mb-5" type="submit" name="editProfile" id="editProfile">Ganti Password</button>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection