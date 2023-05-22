<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nidn = $_POST['nidn'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

 
// update data ke database
mysqli_query($koneksi,"update t_dosen set nama='$nama',nidn='$nidn',alamat='$alamat',nohp='$nohp' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>