<?php

include('../config/connector.php');


if (isset($_POST['simpan'])){
    $id_mobil = rand();
    $nama_mobil = $_POST['nama_mobil'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];

    $foto_mobil = $_FILES["foto_mobil"]["name"];
    $temp = $_FILES["foto"]["tmp_name"];
    $folder = "../asset/images/" . $foto;
    move_uploaded_file($temp, '../asset/images/'.$foto);
    $status_pembayaran = $_POST['status_pembayaran'];

    $query = mysqli_query($connect, "INSERT INTO showroom_endra_table(id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
                                         VALUES('$id_mobil','$nama_mobil','$pemilik_mobil','$merk_mobil','$tanggal_beli','$deskripsi','$foto_mobil','$status_pembayaran')");

    if ($query){
        echo "data berhasil";
    }else {
        echo "Data Gagal Ditambahkan";
    }
}
?>


