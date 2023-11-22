<?php

require_once "function.php";

if (!isset($_POST["submit"])) {
    $angka  = isset($_POST['angka']) ? $_POST['angka'] : '';
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping</title>
</head>

<body>
    <h1>Looping</h1>
    <form action="" method="post">
        <label for="">Masukan Angka</label>
        <input type="number" name="angka" id="" placeholder="masukan angka">
        <button type="submit" name="kirim">kirim</button>
    </form>

    <?php

    $loop = looping($angka);

    ?>

</body>

</html>