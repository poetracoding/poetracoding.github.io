<?php
session_start();
if (isset($_SESSION['nik'])) {
    header('Location: index.php');
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
    <style>
        .center {
            position: fixed;
            margin-top: 150px;
            text-align: center;
            left: 40%;
        }
    </style>
    <title>Login</title>

</head>

<body>
    <form action="ceklogin.php" method="post">
        <div class="center">
            <input type="text" name="txtnik" id="txtnik" class="form-control mb-1" placeholder="NIK">
            <a href="register.php" class="btn btn-secondary">Saya Pengguna Baru</a>
            <button type="Submit" class="btn btn-info">Masuk</button>
        </div>
    </form>

    <!-- Bootstrap Javascript -->

    <script src="jquery-3.6.0.slim.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>

</html>