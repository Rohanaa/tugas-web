<!DOCTYPE html>
<html>
<head>
	<title>data mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="alert alert-info">tambah data</div>

	<?php 
	require '../koneksi.php';
	while (isset($_POST['simpan'])) {
		# code...
	$input_nim = $_POST['txtnim'];
	$input_nama = $_POST['txtnama'];
	$input_prodi = $_POST['txtprodi'];

	$query ="INSERT INTO mahasiswa VALUES ('$input_nim','$input_nama','$input_prodi')";
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
			<label for="">nim</label>
			<input type="text" class="form-control" name="txtnim">
		</div>
		<div class="form-group">
			<label for="">Nama</label>
			<input type="text" class="form-control" name="txtnama">
		</div>
		<div class="form-group">
			<label for="">prodi</label>
			<input type="text" class="form-control" name="txtprodi">
		</div>
		<input type="submit" class="btn btn-primary" name="simpan" value="simpan data">
		<a href="index.php" class="btn btn-warning">Batal</a>

	</form>
</div>
</body>
</html>
