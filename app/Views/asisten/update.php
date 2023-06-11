<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Form Pendaftaran</title>
    <title>Document</title>
</head>
<body>
<h1>UPDATE ASISTEN PRAKTIKUM</h1>
<form action="/asisten/update" method="post">
    <?= csrf_field() ?>
    NIM:<input type="text" name="nim"/><br/>
    NAMA:<input type="text" name="nama"/><br/>
    PRAKTIKUM:<input type="text" name="praktikum"/><br/>
    IPK:<input type="text" name="ipk"/><br/>
    <input type="submit" name="" value="Update"/>
</form>
<a href="/asisten" class="btn btn-primary">Daftar Asisten</a>
<a href="/asisten/simpan" class="btn btn-primary">Tambah</a>
<a href="/asisten/delete" class="btn btn-primary">Delete</a>
<a href="/login/logout" class="btn btn-primary">Logout</a>
</body>
</html>