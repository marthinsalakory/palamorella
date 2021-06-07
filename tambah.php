<?php
include "function.php";

// cek apakah tombol beli sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasi di tambahkan atau tidak
    if (insert($_POST) > 0) {
        echo "
        <script>
            alert('Berhasil menambahkan artikel baru');
            document.location.href = 'index.php#portfolio';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menambahkan artikel baru');
        </script>
        ";
    }
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
    <!-- Untuk tampil foto input -->
    <script>
        function previewImg() {
            const gambar = document.querySelector("#gambar");
            const label = document.querySelector(".file-label");
            const imgPreview = document.querySelector(".img-preview");

            label.textContent = gambar.files[0].name;

            const gambarBaru = new FileReader();
            gambarBaru.readAsDataURL(gambar.files[0]);

            gambarBaru.onload = function(e) {
                imgPreview.src = e.target.result;
            };
        }
    </script>

    <title>Hello, world!</title>
</head>

<body style="margin-bottom: auto; margin-top: 150px;" id="atas">
    <div class="container fixed-top" style="background-color: white;">
        <div class="row">
            <div class="col">

                <h1 style="color: blue; margin-top: 20px;"><b style="color: red;">PALA</b>MORELA</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-6">
                <img class="img-preview" src="asset/img/defauld.png" alt="" width="400px" height="200px">
            </div>
            <div class="col-sm-6">
                <h3><b>Tambah Artikel</b></h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Artikel</label>
                        <input required autocomplete="off" type="text" class="form-control" name="judul" id="judul" aria-describedby="judul">
                    </div>
                    <div class="mb-3">
                        <label for="subjek" class="form-label">Subjek</label>
                        <input minlength="130" maxlength="160" required autocomplete="off" type="text" name="subjek" class="form-control" id="subjek">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input required autocomplete="off" type="file" class="form-control" name="gambar" id="gambar" onchange="previewImg()">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label file-label">Detail Artikel</label>
                        <textarea required autocomplete="off" class="form-control" name="detail" id=detail" cols="30" rows="2"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="artikel.php">
                        <button type="button" class="btn btn-danger">kembali</button>
                    </a>
                </form>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>