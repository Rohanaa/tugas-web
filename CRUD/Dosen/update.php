<!DOCTYPE html>
<html>
<head>
	<title>data dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="alert alert-info">update data</div>
	
<?php 
require '../koneksi.php';
if (isset($_GET['url-nip'])) {
	$input_nip = $_GET['url-nip'];
	$query = "SELECT * FROM dosen WHERE nip='$input_nip'";
	$result = mysqli_query($link, $query);
	$isi = mysqli_fetch_object($result);
	# code...
}
if (isset($_POST['simpan'])) {
	# code...
	$input_nip = $_POST['txtnip'];
	$input_nama = $_POST['txtnama'];
	$input_alamat = $_POST['txtalamat'];

	//$query ="INSERT INTO dosen VALUES ('$input_nip','$input_nama','$input_alamat')";
	$query = "UPDATE dosen SET nama='$input_nama', alamat='$input_alamat'
	WHERE nip='$input_nip'";
	$result =mysqli_query($link,$query);
	if ($result) {
		# code...
		header('location: index.php');
	} else {
		echo 'gagal disimpan : ' . mysqli_error($link);
	}
}
 ?>

	<form action="" method="post">
		<div class="form-group">
			<label for="">nip</label>
			<input type="text" class="form-control" name="txtnip" value="<?= $isi->nip; ?>"readonly>
		</div>
		<div class="form-group">
			<label for="">Nama</label>
			<input type="text" class="form-control" name="txtnama" value="<?=$isi->nama; ?>">
		</div>
		<div class="form-group">
			<label for="">alamat</label>
			<input type="text" class="form-control" name="txtalamat" value="<?=$isi->alamat; ?>">
		</div>
		<input type="submit" class="btn btn-primary" name="simpan" value="simpan data">
		<a href="index.php" class="btn btn-warning">Batal</a>

	</form>
</div>
</body>
</html>