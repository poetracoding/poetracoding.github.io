<?php
if (isset($_POST['txtnik'])) {
    $nik = $_POST['txtnik'];
    $nama = $_POST['txtnama'];

    $txt_file = "login.txt";
    $datauser = file($txt_file);
    foreach ($datauser as $user) {
        $detil = explode(";", $user);
        if (trim($_POST['txtnik']) == $detil[0]) {
            echo "NIK sudah ada";
            die;
        }
    }

    $fp = fopen('login.txt', 'w');
    foreach ($datauser as $update) {
        fwrite($fp, $update);
    }
    fwrite($fp, "\n" . $nik . ";" . $nama);
    fclose($fp);
    header('Location: login.php');
} else {
    header('Location: login.php');
}
