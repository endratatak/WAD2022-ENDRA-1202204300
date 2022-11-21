<?php
require '../MODUL3-ENDRA/config/connector.php';

$nama_mobil = $_POST['nama_mobil'];
$pemilik_mobil = $_POST['nama_pemilik'];
$merk_mobil = $_POST['merk_mobil'];
$tanggal_beli = $_POST['tanggal_beli'];
$deskripsi = $_POST['deskripsi'];
$foto_mobil = $_FILES['foto_mobil']['name'];
$status_pembayaran = $_POST['status_pembayaran'];

$path = '../asset/images/';

if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $path . $foto_mobil)) {
    $addquery = "INSERT INTO showroom_endra_table (nama_mobil, nama_pemilik, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_bayar')";
    if (mysqli_query($connector, $addquery)) {
      header("location: ../pages/ListCar-Endra.php?pesan=success");
    } else {
      header("location: ../pages/ListCar-Endra.php?pesan=failed");
    }
  } else {
    header("location: ../pages/ListCar-Endra.php?pesan=gagal");
  }