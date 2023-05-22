<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data </title>
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
  background-color: blue;
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
textarea {
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

    <h3>Tambah Dosen</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>            
                <td>Nomor Induk</td>
                <td><input type="text" name="nomor" required></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
              <tr>
                <td>NO Telepon</td>
                <td><input type="number" name="notlp" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>  
            </tr>    
        <!--     <tr>
                <td></td>
                <td><a href="index.php" class="tombol">KEMBALI</a></td> 
            </tr>    -->
        </table>
        <a href="index.php" class="tombol">KEMBALI</a>
    </form>
</body>
</html>