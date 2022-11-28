<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include('../config/connector.php');


    if (isset($_POST['regist'])){
        $id = rand();
        $nama= $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $no_hp = $_POST['no_hp'];

        $query = mysqli_query($connect, "INSERT INTO user_endra(id, nama, email, password, no_hp)
                                            VALUES('$id','$nama','$email','$password','$no_hp')");

        if ($query){
            echo "data berhasil";
        }else {
            echo "Data Gagal Ditambahkan";
        }
    }
?>