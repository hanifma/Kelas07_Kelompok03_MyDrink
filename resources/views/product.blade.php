@extends('main')

@section('content')
<main>
    <div class="container-fluid">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-bold">Produk terbaik dari kami</h1>
        <p class="lead fw-normal">
          Dapatkan contoh produk maklon minuman serbuk, sebelum produksi skala besar di pabrik kami. Untuk informasi harga maklon produk minuman, silahkan hubungi staff kami.        </p>
        <a class="btn btn-outline-secondary" href="#">Explore produk</a>
      </div>
      {{-- <div class="product-device shadow-sm d-none d-md-block">
        <img src="img/product/maklon-kopi.png" width="240px" alt="">
      </div> --}}
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    </div>
    
    <div class="container">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      {{-- card --}}
      <div class="bg-green me-md-3 p-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5 fw-bold">Maklon kopi</h2>
          <p class="lead d-flex justify-content-center align-items-center">
            Maklon kopi bubuk dengan berbagai varian
          </p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; border-radius: 21px 21px 0 0;">
          <img src="img/product/maklon-kopi.png" class="card-img" alt="">
        </div>
        <button class="mt-2 btn btn-outline-light rounded-pill">Lihat produk</button>
      </div>

      {{-- card --}}
      <div class="bg-light me-md-3 p-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5 fw-bold">Maklon minuman collagen</h2>
          <p class="lead d-flex justify-content-center align-items-center">
            Maklon kopi bubuk dengan berbagai varian
          </p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; border-radius: 21px 21px 0 0;">
          <img src="img/product/maklon-kopi.png" class="card-img" alt="">
        </div>
        <button class="mt-2 btn btn-outline-dark rounded-pill">Lihat produk</button>
      </div>
    </div>
  
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead d-flex justify-content-center align-items-center">
            <i class="material-icons-outlined">
            done
            </i>
            Kopi Bubuk 2in1
          </p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        </div>
      </div>
      <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>
  
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>
  
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>
    </div>
  </main>
@endsection