<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    
    <!-- nav-->
    <body>
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../views/pages/HomeFachri.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ListFachri">Mycar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/pages/ProfileFachri.php">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav-->

        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h1>Selamat Datang, Di Showroom Fachri </h1>
                    <p class="mb-5">SELAMAT DATANG SELAMAT DATANG SELAMAT DATANG SELAMAT DATANG</p>
                    <a href="../views/pages/ListFachri.blade.php" class="btn btn-primary p-2 px-4 mb-5">MyCar</a>
                    <div>
                        <img src="../assets/images/logo-ead.png" alt="Logo" height="32" width="auto">
                        <span class="px-3">Fachri-1202200055</span>
                    </div>
                </div>
                <div class="col">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/2004_Nissan_350Z_3.5_Front.jpg/420px-2004_Nissan_350Z_3.5_Front.jpg" class="img-fluid" style="height: 400px;">
                </div>
            </div>
        </div>
    </body>
</html>