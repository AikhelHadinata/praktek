<!doctype html>
<html lang="en">
<h1>Input Kabupaten</h1>
 <head><br>
  <title>Data Kabupaten</title>
  <script>
		function onlynumber(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   	alert('Please enter data in the form of numbers (ex: 0,1,2,3....etc');
		   	return false;
		   } else {
		   	return true;
		   }
		  	
		}
	</script>
 </head>
 <body>
  <form method="post" action="sKabupaten.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><select name="kode_provinsi">
			<?php
			include "koneksi.php";
			$sql="select * from provinsi";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[0]'>$data[1]</option>";
			}
			?>
		</select></td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kabupaten" onkeypress="return onlynumber(event)"></td>
	</tr>
	<tr>
		<td>Nama Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kabupaten"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data Kabupaten</strong>
  <table border="1">
  <tr>
	<td>Kode Provinsi</td>
	<td>Kode Kabupaten</td>
	<td>Nama Kabupaten</td>
	<td>Pilihan</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kabupaten";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td>$data[2]</td>";
	echo"<td><a href=./ekabupaten.php?id=$data[1]>Edit</a>|<a href=./dkabupaten.php?id=$data[1]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
