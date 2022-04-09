<?php
if (isset($_POST['txttgl'])) {
    $tgl        = $_POST['txttgl'];
    $waktu      = $_POST['txtwaktu'];
    $lokasi     = $_POST['txtlokasi'];
    $suhu       = $_POST['txtsuhu'];


    $txt_file = "data.txt";
    $dataentry = file($txt_file);

    $fp = fopen('data.txt', 'w');
    if ($dataentry) {
        foreach ($dataentry as $update) {
            fwrite($fp, $update);
        }
        fwrite($fp, "\n" . $tgl . ";" . $waktu . ";" . $lokasi . ";" . $suhu);
    } else {
        fwrite($fp, $tgl . ";" . $waktu . ";" . $lokasi . ";" . $suhu);
    }
    fclose($fp);
    header('Location: catatan.php');
} else {

    header('Location: entry.php');
}
