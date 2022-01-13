<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- material -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  {{-- product CSS --}}
  <link rel="stylesheet" href="css/product.css">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #f5f5f5;
        font-family: 'Montserrat', sans-serif;
    }
    /* .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    } */
    .label{
        display: inline-block;
    }
    .btn-green{
        color: #fff;
        background-color: #56B259;
    }
    .bg-green{
        background-color: #56B259;
    }
    /* @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    .bg-light{
        background-color: #fff;
    }  */
</style>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php" style="color: #56B259;"><img src="img/logo-pt.png" alt="" width="36" height="28"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>MyDrink</span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
                            <div class="card border-0" style="width: 20rem;">
                                <div class="card-body p-2">
                                    <a class="card-title" href="#"><h5>Halo, User</h5></a>
                                    <h6 class="card-subtitle mb-4 text-muted">Notifikasi pemesanan anda</h6>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-start align-items-center my-1" href="#">
                                            <i class="me-2 material-icons-outlined">
                                                account_circle
                                            </i>
                                            Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-start align-items-center my-1" href="#">
                                            <i class="me-2 material-icons-outlined">
                                                shopping_cart
                                            </i>
                                            Pemesanan
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-start align-items-center my-1 text-danger" href="#">
                                            <i class="me-2 material-icons-outlined">
                                                logout
                                            </i>
                                            Logout
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-green rounded-pill nav-link text-white" href="#">Signup</a>
                        </li>
                    </li>
                    {{-- <li>
                        <img src="img/people.png" class="img-fluid rounded-5" style="width: 50px" alt="">
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- isi -->
    @yield('content')

    {{-- footer --}}
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Beranda</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pemesanan</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Kontak kami</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Tentang</a></li>
            </ul>
            <p class="text-center text-muted">&copy; MyDrink PT Lumbung Pangan Bogor</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

</body>
</html>