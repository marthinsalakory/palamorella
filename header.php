<?php
include "function.php";
// cek login
if (isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="asset/css/morela.css">

    <title>Hello, world!</title>
</head>

<body style="margin-bottom: auto; margin-top: 150px;">
    <div class="container fixed-top" style="background-color: white;">
        <div class="row">
            <div class="col">

                <h1 style="color: blue; margin-top: 20px;"><b style="color: red;">PALA</b>MORELA</h1>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                        <!-- <a class="navbar-brand page-scroll" href="#atas">Morela</a> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 aktif">
                                <li class="nav-item">
                                    <a class="nav-link active page-scroll" aria-current="page" href="#atas">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#artikel">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="admin.php">Admin</a>
                                </li>
                            </ul>
                            <form class="d-flex" action="" method="POST">
                                <input class="form-control me-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light" name="search" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>