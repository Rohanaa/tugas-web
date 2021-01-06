<?php 
if (isset($_GET['nim'])) {
	# code...

	require '../koneksi.php';
	$input_nim = $_GET['nim'];
	$query = "DELETE FROM mahasiswa WHERE nim='$input_nim'";

	$result = mysqli_query($link,$query);
	if ($result) {
		header('location:index.php');
		# code...
	} else {
		echo 'gagal dihapus : ' . mysqli_error($link);
	}
}
 ?>