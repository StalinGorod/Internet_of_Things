<?php
$koneksi = mysqli_connect("localhost", "root", "", "iot");

$query = mysqli_query($koneksi, "SELECT * FROM led");

while ($data = mysqli_fetch_array($query)) {
    echo $data['status'];
}
