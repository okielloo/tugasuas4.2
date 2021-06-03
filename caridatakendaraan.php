<?php  
$koneksi= new mysqli("localhost", "root", "", "dbbengkel"); /* baris ini untuk menghubungkan kedatabase */

$cek=mysqli_query($koneksi, "SELECT * FROM bengkel11");/* baris ini menampilkan semua data dari tabel kendaraan */
?>
<?php 

if (isset($_POST['cari'])) {
	$cari=$_POST['car'];
	$cek= mysqli_query($koneksi,"SELECT * FROM bengkel11 WHERE nomer_mesin like '%".$cari."%' 

		"); /* baris ini menampilkan semua data dari tabel kendaraan berdasarkan nomer mesin yang diinput, minimal mempunyai kemiripan 1 huruf */
}

else{
	$cek= mysqli_query($koneksi,"SELECT * FROM bengkel11"); /* baris ini menampilkan semua data dari tabel kendaraan  ketika tombol cari tidak ditekan*/
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>daftar kendaraan</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="car" id="car" size="50px" autofocus autocomplete="off" placeholder="ketik nomer_mesin yang ingin dicari">
		<button type="submit"  name="cari"> cari</button>
		<b><button><a href="inputdata.php" style="text-decoration: none;">Tambah data</a></button></b>
				<b><button><a href="daftar kendaraan dan cari.php" style="text-decoration: none;">perbarui</a></button></b>
	</form>
	<br>
<table border="1px" cellpadding="15px" cellspacing="0">	
<tr>
	<th>Aksi</th>
	<th>Nomer mesin kendaraan</th>
	<th>Nomer rangka kendaraan</th>
	<th>Jenis kendaraan</th>
	<th>Nama kendaraan </th>
	<th>Tanggal buat</th>
	<th>Nomer BPKB</th>
	<th>Nomer STNK</th>
	<th>Status STNK</th>
	<th>Kondisi</th>
</tr>
	<?php  while ($row=mysqli_fetch_assoc($cek) )/* baris ini mengambil  semua data dari variabel $cek menjadi menjadi array asosiatip atau keynya berdasarkan name atau nama, dan melakukan perulangan */ :{
		} ?>
<tr>
	<td><button><a href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('yakin');" style="text-decoration: none;">hapus data</a></button>
	<button><a href="ubah.php?id=<?= $row["id"]; ?>" style="text-decoration: none;"> ubah data</a></button>
</td>
	<td><?php echo$row["Nomor Mesin Kendaraan"]; ?></td><?php /* baris ini menampikan data dari  dari tabel kendaraan berdasarkan name atau nama */ ?>
	<td><?php echo$row["Nomor Rangka Kendaraan"]; ?></td>
	<td><?php echo$row["Jenis Kendaraan"]; ?></td>
	<td><?php echo$row["Nama Kendaraan"]; ?></td>
	<td><?php echo$row["Tanggal Buat"]; ?></td>
	<td><?php echo$row["Catatan Kondisi Kendaraan"]; ?></td>
	<td><?php echo$row["Nomor BPKB Bila Ada"]; ?></td>
	<td><?php echo$row["Nomor STNK Bila Ada"]; ?></td>
	<td><?php echo$row["Status STNK ( Aktif / Mati )"]; ?></td>
</tr>
<?php  endwhile;  /* baris ini berfungsi mengakhiri perulangan while */?>
</table>
</body>
<footer >
 <p style="text-align: center; color: #000;"> &copy; M.OKI 2021</p>
</footer>
</html>
<?php 
/*
halaman ini dibuat oleh M.OKI,
tanggal 1 Juni sampai 3 Juni 2021.!!!!

 */

 ?>




