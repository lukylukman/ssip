<?php 
// koneksi database
include '../database.php';

// menangkap data id yang di kirim dari url
$id = $_GET['Id'];


// menghapus data dari database
mysqli_query($db,"delete from karyawan where Emp_NIP='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>