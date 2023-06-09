<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/asisten/search" method="post">
    <?= csrf_field() ?>
    Search: <input type="text" name="key"/>
    <input type="submit" name="submit" value="search"/>
</form>
<?php
if(!empty($hasil)) {
    echo "<h1>Hasil pencarian</h1>";
    echo "Nama: " . $hasil['nama'] . "<br/>";
    echo "Praktikum: " . $hasil['praktikum'] . "<br/>";
    echo "IPK: " . $hasil['ipk'];
}
?>
</body>
</html>
