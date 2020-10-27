<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>

	<h1 align="center">Mahasiswa</h1>
	<h3 align="center" color="#ff0000">Welcome Dobleh <?= $nama_lenkap ?></h3>
	<p>Nim Dobleh : <?= $nim ?></p>
	<hr>
	<a href="<?= site_url('mahasiswa/tambah') ?>">Tambah</a>
	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama Mahasiswa</th>
		</tr>
		<?php foreach ($mahasiswa as $key): ?> 
			
		<tr>
			<td><?= $key['nim'] ?></td>
			<td><?= $key['nama']?></td>
		</tr>
	<?php endforeach ?>
	</table>
	

</body>
</html>