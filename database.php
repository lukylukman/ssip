<?php

$server = "localhost";
$user = "id11859806_ssip";
$password = "123456";
$nama_database = "id11859806_ssip";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>