<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center">IoT</h1>
    <p class="text-center">Projek IOT Menggunakan Server Local XAMPP</p>
    <hr>
    <center>
        <a href="index.php?status=ON" class="btn btn-success p-2 text-dark btn-lg">ON</a> <a href="index.php?status=OFF" class="btn btn-danger p-2 text-dark btn-lg">OFF</a>
    </center>

    <?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        $koneksi = mysqli_connect("localhost", "root", "", "iot");

        $query = mysqli_query($koneksi, "UPDATE led set status='$status'");
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>