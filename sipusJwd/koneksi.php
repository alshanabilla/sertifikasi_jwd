<?php

$host = "localhost:3306";
$user = "root";
$password = "";
$nama_database = "dbpus";

$db = mysqli_connect($host, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

