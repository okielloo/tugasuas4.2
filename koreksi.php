<?php  
$koneksi= new mysqli("localhost", "root", "", "dbbengkel");/* baris ini untuk menghubungkan kedatabase */
$id=$_GET['id'];
$cek=mysqli_query( $koneksi,"SELECT * FROM dbbengkel WHERE id=$id");/* baris ini mengambil data dari tabel kendaraan berdasarkan id yang diinput*/



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="" method="post" >
	<center>
	<table >
	<?php ($row=mysqli_fetch_assoc($cek) );{
		 ?>

<tr>
	<input type="hidden" name="id" value="<?php echo$row["id"]; ?>">
</tr>
<tr>
	<td>Nomor mesin kendaraan</td>
	<td><input type="text" name="a" id="a" value="<?php echo$row["nomer_mesin"]; ?>" required="" minlength="3"></td>
</tr>
<tr>
	<td>Nomor rangka kendaraan</td>
	<td><input type="text" name="b" id="b" value="<?php echo$row["nomer_rangka"]; ?>" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Jenis kendaraan</td>
	<td ><select name="c" id="c" value="<?php echo$row["jenis_kendaraan"]; ?>">
		<option>Sepeda motor</option>
		<option>Mobil</option>
		<option>Mobil</option>
		<option>Bus</option>
		<option>Truk</option>
	</select></td>
	</tr>
	<tr>
	<td>Nama kendaraan </td>
	<td><input type="text" name="d" id="d" value="<?php echo$row["nama_kendaraan"]; ?>" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Tanggal buat</td>
	<td><input type="date" name="e" id="e" value="<?php echo$row["tanggal"]; ?>" required="" minlength="3"></td>
	</tr><tr>
	<td>Nomor BPKB</td>
	<td><input type="text" name="g" id="g" value="<?php echo$row["nomer_BPKB"]; ?>" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Nomor STNK</td><td><input type="text" name="h" id="h" value="<?php echo$row["nomer_STNK"]; ?>" required="" minlength="3"></td></tr>
	<tr>
	<td>Status STNK</td>
	<td><select name="i" id="i" value="<?php echo$row["status_STNK"]; ?>">
		<option>Pajak masih aktif</option>
		<option>Pajak sudah mati </option>
	</select></td>
	</tr>	
<tr>
<td>Catatan kondisi</td>
<td>
<textarea id="f" name="f" value="<?php echo$row["kondisi"]; ?>" required="" minlength="3"></textarea></td>
</tr>
<tr> 
<td></td>

	<td>
<button type="submit" name="kirim">Kirim</button>
<b><button><a href="daftar kendaraan dan cari.php" style="text-decoration: none;">kembali kedaftar</a></button></b>

</td>
</tr>
<?php } ?>
</table>
</center>
</body>
<footer >
 <p style="text-align: center; color: #000;"> &copy;M.OKI 2021</p>
</footer>
</html>
<?php 
if (isset($_POST['kirim'])) {
	$id= $_POST['id'];
	$nomer_mesin=htmlspecialchars($_POST['a']);
	$nomer_rangka=htmlspecialchars($_POST['b']);
	$jenis_kendaraan=htmlspecialchars($_POST['c']);
	$nama_kendaraan=htmlspecialchars($_POST['d']);
	$tanggal=htmlspecialchars($_POST['e']);
	$nomer_BPKB=htmlspecialchars($_POST['g']);
	$nomer_STNK=htmlspecialchars($_POST['h']);
	$status_STNK=htmlspecialchars($_POST['i']);
	$Catatan=htmlspecialchars($_POST['f']);
	
	$koneksi= new mysqli("localhost", "root", "", "kendaraan");/* baris ini untuk menghubungkan kedatabase */
	$sql="UPDATE `kendaraan` SET 
	id='$id', nomer_mesin='$nomer_mesin', nomer_rangka='$nomer_rangka', jenis_kendaraan='$jenis_kendaraan', nama_kendaraan='$nama_kendaraan', tanggal='$tanggal', nomer_BPKB='$nomer_BPKB', nomer_STNK='$nomer_STNK', status_STNK='$status_STNK', kondisi='$Catatan' WHERE id=$id

";
	$q=$koneksi->query($sql);
if ($q) {
	echo "<script> alert(' data BERHASIL diubah');
	
document.location.href = 'daftar kendaraan dan cari.php';
	</script>";
}

else{
	echo "<script> alert(' data GAGAL diubah');
document.location.href = 'ubah.php';
	
	</script>";
}

}


 ?>





<?php 
/*
halaman ini dibuat oleh M.OKI,
tanggal 1 Juni sampai 3 Juni 2021.!!!!

 */

 ?>
