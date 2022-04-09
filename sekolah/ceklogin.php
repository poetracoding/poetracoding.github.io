<?php
session_start();

if (isset($_POST['txtnik'])) {

    $txt_file = "login.txt";
    $datauser = file($txt_file);
    foreach ($datauser as $user) {
        $detil = explode(";", $user);
        if (trim($_POST['txtnik']) == $detil[0]) {
            $_SESSION['nik'] = $detil[0];
            $_SESSION['nama'] = $detil[1];



            header('Location: index.php');
            die;
        }
    }
    header('Location: login.php');
} else {
    header('Location: login.php');
}
