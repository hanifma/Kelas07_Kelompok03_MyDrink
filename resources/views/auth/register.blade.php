<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bs5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- material -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins 300&display=swap" rel="stylesheet">

    <title>DAFTAR</title>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .btn-violet {
        color: #fff;
        background-color: #8540f5;
        border: #8540f5;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col">
                    <div class="mb-3">
                        <h3 class="fw-bold">Daftar</h3>
                    </div>
                </div>

                <!-- form -->
                <form action="{{ route('register.perform') }}" method="POST" class="shadow p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama anda">
                    </div>
                    <div class="mb-3">
                        <label for="Password">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email anda">
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="col">
                                <label for="Password">Confirm password</label>
                                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Konfirmasi Password">
                                @if ($errors->has('cpassword'))
                                    <span class="text-danger text-left">{{ $errors->first('cpassword') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- <input type="hidden" name="level" id="level" value="user" readonly> -->
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-violet">Daftar</button>
                    </div>
                    <hr>
                    <p class="text-center mb-0">Sudah punya akun? <a href="{{ route('login.perform')}}">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> 8c63de5 (Penambahan MVC)
