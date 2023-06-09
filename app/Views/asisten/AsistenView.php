<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--	 Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/8c8c8c8c8c.js" crossorigin="anonymous"></script>
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="header.js"></script>
    <title>Daftar Calon Asisten</title>
    <style>
        p {
            min-height: 25px;
        }
    </style>
</head>
<body>
<div class="container">
    <div>
        <div>
            <h1>Daftar asisten</h1>
        </div>
        <?php
        echo '<table class="table table-striped">
        <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>IPK</th>
        </tr>
    </thead>';
        $i = 0;
        foreach ($mahasiswa as $asisten) {
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $asisten['nim'] . '</td>';
            echo '<td>' . $asisten['nama'] . '</td>';
            echo '<td>' . $asisten['praktikum'] . '</td>';
            echo '<td>' . $asisten['ipk'] . '</td>';
            echo '</tr>';
            $i = $i + 1;
        }

        echo '</table>';
        ?>

    </div>

</div>
<div>
    <a href="/asisten/simpan" class="btn btn-primary">Tambah</a>
    <a href="/asisten/update" class="btn btn-primary">Update</a>
    <a href="/asisten/delete" class="btn btn-primary">Delete</a>
    <a href="/login/logout" class="btn btn-primary">Logout</a>
</div>
</body>
</html>