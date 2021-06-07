<?php
include "function.php";

// cek login
if (isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin') {
        if ($password == 'admin') {
            $_SESSION["login"] = true;
            header("Location: admin.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="margin-bottom: auto; margin-top: 150px;">

    <div class="container fixed-top" style="background-color: white;">
        <div class="row">
            <div class="col">

                <h1 style="color: blue; margin-top: 20px;"><b style="color: red;">PALA</b>MORELA</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (isset($error)) : ?>
                    <h3 class="text-center mb-5 text-light bg-danger">Username / Password Salah</h3>
                <?php endif; ?>
                <form action="" method="POST">
                    <h2 class="h1 text-primary" style="text-align: center;"><u><b>Halaman Login</b></u></h2>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <a href="<?= $baseurl; ?>">
                        <button type="button" class="btn btn-danger">Kembali</button>
                    </a>
                </form>
                <h4 class="text-center bg-warning" style="height: 40px; margin-top: 100px;">Username = admin | Password = admin</h4>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>