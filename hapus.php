<?php 
function hapus($ab)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE  FROM bengkel11 WHERE id=$ab");
	return mysqli_affected_rows($koneksi); 

}





$ab=$_GET['id'];
$koneksi= new mysqli("localhost", "root", "", "dbbengkel");/* baris ini untuk menghubungkan kedatabase */




if (hapus($ab) > 0) {
	echo "<script> alert(' data BERHASIL dihapus');
	document.location.href = 'caridatakendaraan.php';
	</script>";

}

else{
	echo "<script> alert(' data GAGAL dihapus');
	document.location.href = 'caridatakendaraan.php';
	</script>";
	
}
?>

<?php 
/*
halaman ini dibuat M.OKI,
tanggal 1 Juni sampai 3 Juni 2021.!!!!

 */

 ?>
