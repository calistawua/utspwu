<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notlp= $_POST['notlp'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into t_dosen values('','$nomor','$nama','$alamat','$notlp')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>