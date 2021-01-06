<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="alert alert-info">Data Dosen</div>
	<a href="create.php" class="btn btn-info">tambah data</a>
	<br>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>no</th>
				<th>nip</th>
				<th>nama</th>
				<th>alamat</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				require '../koneksi.php';
				$no = 1;
				$query = "SELECT * FROM dosen";

				$result = mysqli_query($link, $query);
				while ($isi = mysqli_fetch_object($result)) {
					# code...
				
			 ?>
			 <tr>
			 	<td><?=$no++;?></td>
			 	<td><?=$isi->nip;?></td>
			 	<td><?=$isi->nama;?></td>
			 	<td><?=$isi->alamat;?></td>
			 	<td>
			 		<a href="delete.php?nip=<?php echo $isi->nip; ?>" class="btn btn-danger">del</a>
			 		<a href="update.php?url-nip=<?php echo $isi->nip; ?>" class="btn btn-warning">edit</a>
			 	</td>
			 </tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</body>
</html>