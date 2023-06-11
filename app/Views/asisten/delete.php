<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hapus</h1>
<form action="/asisten/delete" method="post">
    <?= csrf_field() ?>
    NIM:<input type="text" name="nim"/><br/>
    <input type="submit" name="" value="Hapus"/>
</form>
<a href="/asisten" class="btn btn-primary">Daftar Asisten</a>
<a href="/asisten/simpan" class="btn btn-primary">Tambah</a>
<a href="/asisten/update" class="btn btn-primary">Update</a>
<a href="/login/logout" class="btn btn-primary">Logout</a>

</body>
</html>