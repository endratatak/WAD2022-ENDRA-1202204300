<?php


$connect = mysqli_connect("localhost:8080", "root", "", "showroom_endra_table");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error($connect));
}
?>