<?php

//SESSION
session_start();
if (!isset($_SESSION['nik'])) {
    header('Location: login.php');
}


//DATA

$txt_file = "data.txt";
$dataentry = file($txt_file);
// var_dump($dataentry);
// die;

$data = [];
if ($dataentry) {
    foreach ($dataentry as $row) {
        $detil = explode(";", $row);

        array_push($data, [
            "tgl" => $detil[0],
            "waktu" => $detil[1],
            "lokasi" => $detil[2],
            "suhu" => $detil[3],
        ]);
    }
}
if (!isset($_GET['sort'])) {
    usort($data, function ($a, $b) {
        return $a["tgl"] <=> $b["tgl"];
    });
} else {
    if ($_GET['sort'] == 'tgl') {
        usort($data, function ($a, $b) {
            return $a["tgl"] <=> $b["tgl"];
        });
    } elseif ($_GET['sort'] == 'lokasi') {
        usort($data, function ($a, $b) {
            return $a["lokasi"] <=> $b["lokasi"];
        });
    } elseif ($_GET['sort'] == 'suhu') {
        usort($data, function ($a, $b) {
            return $a["suhu"] <=> $b["suhu"];
        });
    } else {
        usort($data, function ($a, $b) {
            return $a["tgl"] <=> $b["tgl"];
        });
    }
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
    <title>Peduli Diri | Catatan Perjalanan</title>
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
                        <a href="catatan.php" class="font-weight-bold text-dark">Catatan Perjalanan</a> |
                        <a href="entry.php">Isi data</a> |
                        <a href="logout.php">Logout</a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="get">
                                    Urutkan berdasarkan
                                    <select name="sort" id="sort">
                                        <option <?php
                                                if (isset($_GET['sort'])) {
                                                    if ($_GET['sort'] == 'tgl') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> value="tgl">Tanggal</option>
                                        <option <?php
                                                if (isset($_GET['sort'])) {
                                                    if ($_GET['sort'] == 'lokasi') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> value="lokasi">Lokasi</option>
                                        <option <?php
                                                if (isset($_GET['sort'])) {
                                                    if ($_GET['sort'] == 'suhu') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> value="suhu">Suhu Tubuh</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-info">Urutkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-sm table-hover table-bordered">
                                    <thead class="bg-info text-center">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu Tubuh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($data as $row) : ?>
                                            <tr>
                                                <td><?= $row['tgl']; ?></td>
                                                <td><?= $row['waktu']; ?></td>
                                                <td><?= $row['lokasi']; ?></td>
                                                <td><?= $row['suhu']; ?></td>
                                            </tr>
                                        <?php $i++;
                                        endforeach; ?>
                                    </tbody>
                                </table>

                                <div class="col-12 text-right mt-2">
                                    <a href="entry.php" class="btn btn-sm btn-info">Isi Catatan Perjalanan</a>
                                </div>
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