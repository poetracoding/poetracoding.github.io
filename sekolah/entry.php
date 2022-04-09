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
    <title>Peduli Diri | Isi Data</title>
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
                        <a href="index.php">Home</a> |
                        <a href="catatan.php">Catatan Perjalanan</a> |
                        <a href="entry.php" class="font-weight-bold text-dark">Isi data</a> |

                        <a href="logout.php">Logout</a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>ISI DATA</h4>
                                <form action="prosesentry.php" method="post">
                                    <div class="form-group row">
                                        <label class=" col-4" for="txttgl">Tanggal</label>
                                        <input required type="date" name="txttgl" id="txttgl" class="form-control form-control-sm col-4">
                                    </div>
                                    <div class="form-group row">
                                        <label class=" col-4" for="txtwaktu">Waktu</label>
                                        <input required type="time" name="txtwaktu" id="txtwaktu" class="form-control form-control-sm col-4">
                                    </div>
                                    <div class="form-group row">
                                        <label class=" col-4" for="txtlokasi">Lokasi</label>
                                        <input required type="text" name="txtlokasi" id="txtlokasi" class="form-control form-control-sm col-4">
                                    </div>
                                    <div class="form-group row">
                                        <label class=" col-4" for="txtsuhu">Suhu Tubuh</label>
                                        <input required type="text" name="txtsuhu" id="txtsuhu" class="form-control form-control-sm col-4">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col text-right">
                                            <button type="submit" class="btn-sm btn-info">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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