<?php

include("../database.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
     $id          = $_POST['NIP'];
     $nama        = $_POST['Nama'];
     $divisi      = $_POST['Divisi'];
     $jabatan     = $_POST['Position'];
     $alamat      = $_POST['Alamat'];
     $telepon     = $_POST['Telepon']; 
     $email       = $_POST['Email']; 
     $gender      = $_POST['Gender']; 
     $tglLahir    = $_POST['TglLahir'];
     $status      = $_POST['Status'];
     $pendidikan  = $_POST['Pendidikan'];
     $statuskerja = $_POST['StatusKerja'];
     
     

    // buat query update
    $sql = "UPDATE karyawan SET Emp_Nama='$nama', Emp_Alamat='$alamat', Emp_Divisi='$divisi', Id_Jabatan='$jabatan', Emp_Telepon='$telepon', Emp_Email='$email', Emp_Gender='$gender', Emp_TglLahir='$tglLahir', Emp_Status='$status', Emp_Pendidikan='$pendidikan', Emp_StatusKerja='$statuskerja' WHERE Emp_NIP=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>