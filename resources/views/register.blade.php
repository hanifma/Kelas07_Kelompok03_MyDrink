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
                <form action="" method="POST" class="shadow p-4">
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama anda">
                    </div>
                    <div class="mb-3">
                        <label for="Password">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email anda">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="col">
                                <label for="Password">Confirm password</label>
                                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Konfirmasi Password">
                            </div>
                        </div>
                    </div>
                    <!-- <input type="hidden" name="level" id="level" value="user" readonly> -->
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-violet">Daftar</button>
                    </div>

                    <hr>

                    <p class="text-center mb-0">Sudah punya akun? <a href="login.php">Login</a></p>

                </form>
            </div>
        </div>
    </div>
</body>

</html>