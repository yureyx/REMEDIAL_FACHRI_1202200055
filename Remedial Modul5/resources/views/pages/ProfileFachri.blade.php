<?php session_start();
require("../config/connector.php");

    if (!isset($_SESSION['nama'])) {
        header("Location: home.blade.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
    <!-- nav-->
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/HomeFachri.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/ListFachri.php">Mycar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../pages/ProfileFachri.php">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </head>

        <!-- nav-->