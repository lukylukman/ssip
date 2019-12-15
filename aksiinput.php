<?php

include("../database.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
    
    // ambil data dari formulir

     $nip          = $_POST['NIP'];
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
     
      
     // Rename nama fotonya dengan menambahkan tanggal dan jam upload
 
// Proses upload
     
 // Cek apakah gambar berhasil diupload atau tidak
     

    
    
    // buat query
    $insert =mysqli_query($db,"INSERT INTO karyawan VALUES ('$nip', '$nama', '$divisi', '$jabatan', '$alamat', '$telepon', '$email', '$gender', '$tglLahir', '$status', '$pendidikan','$statuskerja')");
    
    
    // apakah query simpan berhasil?
    if( $insert ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
    
    
} 

?>
