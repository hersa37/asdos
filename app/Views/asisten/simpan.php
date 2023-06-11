<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    Bootstrap 5 cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          crossorigin="anonymous">
    <!--    Bootstrap 5 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Form Pendaftaran</title>
</head>
<body>
<h1>PENDAFTARAN ASISTEN PRAKTIKUM</h1>
<form action="/asisten/simpan" method="post">
    <?= csrf_field() ?>
    NIM:<input type="text" name="nim"/><br/>
    NAMA:<input type="text" name="nama"/><br/>
    PRAKTIKUM:<input type="text" name="praktikum"/><br/>
    IPK:<input type="text" name="ipk"/><br/>
    <input type="submit" name="" value="Simpan"/>
</form>
<a href="/asisten" class="btn btn-primary">Daftar Asisten</a>
<a href="/asisten/update" class="btn btn-primary">Update</a>
<a href="/asisten/delete" class="btn btn-primary">Delete</a>
<a href="/login/logout" class="btn btn-primary">Logout</a>
</body>
</html>
