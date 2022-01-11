@extends('main')

@section('content')
    {{-- konten --}}
    <div class="container">
        <form action="" method="POST">
            <h3 class="text-center">Pemesanan Maklon Minuman</h3>
            <div class="mb-3">
              <label for="brand" class="form-label">Nama Brand</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat usaha</label>
              <textarea type="text" class="form-control" name="alamat" id="alamat"></textarea>
            </div>
            <div class="mb-3">
              <label for="izin" class="form-label">Uplaod perizinan usaha</label>
              <input type="file" class="form-control" name="izin" id="alamat">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Deskripsi pesanan</label>
              <textarea type="text" class="form-control" name="deskripsi" id="alamat" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Pesan</button>
          </form>
    </div>
    
@endsection