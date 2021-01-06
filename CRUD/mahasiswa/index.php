<!DOCTYPE html>
<html>
<head>
	<title>data mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">data mahasiswa</div>
		<a href="create.php" class="btn btn-info">tambah data</a>
	<br> <br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>no</th>
					<th>nim</th>
					<th>nama</th>
					<th>prodi</th>
					<th>aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				require '../koneksi.php';
				$no=1;
				$query= "SELECT * FROM mahasiswa";

				$result= mysqli_query($link,$query);
				while ($isi = mysqli_fetch_object($result)) {
					# code...
				
				 ?>
				 <tr>
			 	<td><?=$no++;?></td>
			 	<td><?=$isi->nim;?></td>
			 	<td><?=$isi->nama;?></td>
			 	<td><?=$isi->prodi;?></td>
			 	<td>
			 		<a href="update.php?url-nim=<?php echo $isi->nim;?>" class="btn btn-warning">edit</a>
			 		<a href="delete.php?nim=<?php echo $isi->nim;?>" class="btn btn-danger">delete</a>
			 	</td>
			 </tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>