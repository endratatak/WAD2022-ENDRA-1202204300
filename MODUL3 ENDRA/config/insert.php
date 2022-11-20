<?php
include "connector.php";

$nama_mobil = $_POST['nama_mobil'];
$pemilik_mobil = $_POST['nama_pemilik'];
$merk_mobil = $_POST['merk_mobil'];
$tanggal_beli = $_POST['tanggal_beli'];
$deskripsi = $_POST['deskripsi'];
$foto_mobil = $_FILES['foto_mobil']['name'];
$status_pembayaran = $_POST['status_pembayaran'];
$tmp_file = $_FILES['foto_mobil']['tmp_name'];

$path = '../asset/images/';

if(move_uploaded_file($tmp_file, $path)) {
    $sql = "INSERT INTO showroom_endra_table (nama_mobil, nama_pemilik, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran VALUES ('$nama_mobil', '$nama_pemilik', '$merk_mobil', '$deskripsi', '$foto_mobil', '$status_pembayaran')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
}
?>