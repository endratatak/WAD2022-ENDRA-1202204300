<?php
$connector = new mysqli("127.0.0.1". ":" . "8080", "root", "", "modul3");

if (!$connector) {
  die("Koneksi Error: " . $connector->connect_error);
}
