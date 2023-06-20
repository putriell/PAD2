@extends('layouts/base')

@section('content')

{{-- Hero --}}
<section>
    <div class="row justify-content-center">
        <img src="../build/assets/images/hero.svg" alt="hero" class="cropped-image" style="">
    </div>
</section>
{{-- End Hero --}}

{{-- form --}}
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 mb-5 text-center">
            
            <img src="..\build\assets\images\produk.svg" alt="produk" width="400px">
                
        </div>
        <div class="col-md-6 my-5 p-5">
            <form class="my-5" action="" method="POST">
                <div class="row">
                    <div class="col my-3">
                        <input type="text" class="form-control border border-2 border-primary" id="firsName" name="firstName" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col my-3">
                        <input type="text" class="form-control border border-2 border-primary" id="lastName" name="lastName" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>

                <input type="email" class="form-control my-2 border border-2 border-primary" id="email" name="email" placeholder="email" aria-label="email">

                <input type="text" class="form-control my-4 border border-2 border-primary" id="phoneNumber" name="phoneNumber" placeholder="phone number" aria-label="phone number">

                <input type="text" class="form-control my-4 border border-2 border-primary" id="companyName" name="companyName" placeholder="company name" aria-label="company_name">

                <textarea class="form-control my-4 border border-2 border-primary" id="message" name="message" rows="3" placeholder="message"></textarea>

                <button class="btn btn-bd-primary w-100 mt-3" type="submit" name="hubungi" id="hubungi">Hubungi</button>
            </form>
        </div>
    </div>
</div>
{{-- End form --}}

@endsection