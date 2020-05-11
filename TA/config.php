<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_buku";

$conn = mysqli_connect($server, $user, $pass, $db);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}