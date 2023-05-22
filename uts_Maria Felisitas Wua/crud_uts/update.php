<!DOCTYPE html>
<html>
<head>
	<title>Uts Pemrograman web 1</title>
	   <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input {
  width: 100%;
}
 table {
    width: 1000px;
 }

 h3{
    color: green;
    padding-left: 500px;
 }
  h2{
    color: blue;
    padding-left: 500px;
 }
 .tombol{
    width: 100%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 }

</style>
</head>
<body>
 
	<br/>
	<!-- <a href="index.php">KEMBALI</a> -->
	<br/>
	<br/>
	<h3>Update Data</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from t_dosen where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="updatepost.php">
			<table>
				<tr>			
					<td>Nomor Induk</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nidn" value="<?php echo $d['nidn']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				 <tr>
                <td>No telepon</td>
                <td><input type="number" name="nohp" value="<?php echo $d['nohp']; ?>" required></td>
            </tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>		
			</table>
			 <a href="index.php" class="tombol">Batal</a>
		</form>
		<?php 
	}
	?>
 
</body>
</html>