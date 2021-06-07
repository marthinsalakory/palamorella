<?php
include "function.php";
$a = get('id');

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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="asset/fontawesome-free/css/all.min.css">

    <title>Hello, world!</title>
</head>

<body style="margin-bottom: auto; margin-top: 100px;" id="atas">
    <div class="container fixed-top" style="background-color: white;">
        <div class="row">
            <div class="col">

                <h1 style="color: blue; margin-top: 20px;"><b style="color: red;">PALA</b>MORELA</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12">
                <a href="artikel.php">
                    <button class="btn btn-danger" style="margin-left: 90%;"><i class="fas fa-backward"></i> Kembali</button>
                </a>
            </div>
            <div class="col-sm-12">
                <h2><?= $a['judul']; ?></h2>
            </div>
            <div class="col-sm-12">
                <img src="asset/img/<?= $a['gambar']; ?>" width="900px" height="400px" alt="">
            </div>
            <div class="col-sm-12">
                <h3>Subjek :</h3>
                <p><?= $a['subjek']; ?></p>
                <h3>Detail :</h3>
                <p style="white-space: pre-line;"><?= $a['detail']; ?>
                </p>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>