<?php
session_start();

if (!isset($_SESSION['nik'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Peduli Diri | Home</title>
</head>

<body>


    <div class="container mt-3">
        <div class="row">
            <div class="col-2 text-center">
                <img width="100px" src="./img/image.png" alt="Logo">
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12">
                        <h3>PEDULI DIRI</h3>
                        <h6>Catatan Perjalanan</h6>
                        <a href="index.php" class="font-weight-bold text-dark">Home</a> |
                        <a href="catatan.php">Catatan Perjalanan</a> |
                        <a href="entry.php">Isi data</a> |
                        <a href="logout.php">Logout</a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                Selamat Datang <strong> <?= $_SESSION['nama']; ?></strong>, di aplikasi diri
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-right mt-2">
                        <a href="entry.php" class="btn btn-sm btn-info">Isi Catatan Perjalanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Javascript -->
    <script src="jquery-3.6.0.slim.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>

</html>