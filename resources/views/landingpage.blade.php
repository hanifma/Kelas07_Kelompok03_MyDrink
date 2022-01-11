<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Drink</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url('../img/bg-lp.jpg'); /* The image used */
            }
            .nav-link{
                color: white;
            }
            .nav-link:hover{
                color: rgb(42, 182, 0);
                text-decoration: none;
            }
            .btn-outline-white {
                border-color: white;
                color: white;
                border: 1px solid white;
                border-radius: 30px;
                padding: 10px 30px; 
                margin: 20px;
            }
            .btn-outline-white:hover {
                border-color: white;
                color: rgb(42, 182, 0);
                border: 1px solid white;
                background-color: white;
                border-radius: 30px;
                padding: 10px 30px; 
                margin: 20px;
                text-decoration: none;
            }
            .content{
                margin-top: 300px;
            }
        </style>
        
    </head>
    <body>
            <ul class="nav nav-pills nav-fill mt-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.maklonminuman.co.id/tentang/">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.maklonminuman.co.id/tentang/prosedur-maklon/">Prosedur Maklon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.maklonminuman.co.id/hubungi-kami/">Hubungi Kami</a>
                </li>
            </ul>
            <div class="content text-center">
                <div>
                    <img src="img/logo.png">
                </div>
                <div class="mt-2">
                    <a class="btn-outline-white" href="#">Masuk</a>
                    <a class="btn-outline-white" href="#">Daftar</a>
                </div>
            </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
