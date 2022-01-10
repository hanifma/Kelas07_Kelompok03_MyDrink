<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bs5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- CSS --}}
    <link rel="stylesheet" href="app.css">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="col">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="col">
                        <div class="mb-3">
                            <h3 class="fw-bold">Login</h3>
                        </div>
                    </div>
                    <!-- form -->
                    <form action="" method="POST" class="shadow p-4">
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <label class="mb-3">
                            <input type="checkbox" name="ingatsaya"> Ingat saya
                        </label>
    
                        <div class="mb-3">
                            <button type="submit" name="" class="btn btn-violet">Login</button>
                        </div>
                        <hr>
                        <p class="text-center">Tidak punya akun?<a href="#">Daftar</a></p>
                        <p class="text-center fw-light">atau ke</p>
                        <p class="text-center"><a href="#">Beranda</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>