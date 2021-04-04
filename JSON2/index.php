<?php
// Follow My blog cakdunme.blogspot.com

//Ambil file json yang sudah dibuat
$file = "data.json";

$getJson = file_get_contents($file);

// Decode Json atau ubah json menjadi array 
$dataJson = json_decode($getJson, true);






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakdun blog</title>
</head>

<body>
    <div class="coba">
        <h1>Nama : <?= $dataJson['name']; ?></h1>
        <h2>Pekerjaan : <?= $dataJson['Pekerjaan']; ?> </h2>
    </div>

</body>

</html>