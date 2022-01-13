<<<<<<< HEAD
@extends('main')

@section('content')
<div class="container my-5 vh-100">
    <div class="mt-5">
      <div class="row my-auto">
        <div class="col my-auto">
          <h1 class="display-5 fw-bold">Halo, </h1>
          <p>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of
            Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
          <a class="btn btn-violet btn-lg" type="button" href="#">Explore</a>
        </div>
        <div class="col">
          <img src="" alt="">
        </div>
      </div>
    </div>
    <div class="mt-5">
      <div class="d-flex justify-content-center mt-5">
        <a class="btn btn-outline-primary" href="#">Cari tau</a>
      </div>
    </div>
  </div>
@endsection
=======
@extends('layouts.newhome')

@section('content')
<div class="container">
    <div class="row justify-content-between">
            <div class="card" style="width: 15rem">
                <div class="card-header">{{ __('Pesanan Terbayar') }}</div>

                <div class="card-body">

                    {{ count(App\Models\Transaction::where('status', 'terbayar')->get()) }}
                </div>
            </div>
            <div class="card" style="width: 15rem">
                <div class="card-header">{{ __('Pesanan Diproses') }}</div>

                <div class="card-body">
                    

                    {{ count(App\Models\Transaction::where('status', 'diproses')->get()) }}
                </div>
            </div>
            <div class="card" style="width: 15rem">
                <div class="card-header">{{ __('Pesanan Diantar') }}</div>

                <div class="card-body">
                    

                    {{ count(App\Models\Transaction::where('status', 'pengantaran')->get()) }}
                </div>
            </div>

            <div class="card" style="width: 15rem">
                <div class="card-header">{{ __('Pesanan Selesai') }}</div>

                <div class="card-body">
                    

                    {{ count(App\Models\Transaction::where('status', 'selesai')->get()) }}
                </div>
            </div>
    </div>
</div>
@endsection
>>>>>>> 8c63de5 (Penambahan MVC)
