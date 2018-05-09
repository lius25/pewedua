<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
		<?php
	$kabupaten=[
					[
						"id"=>1,
						"nama_kab"=>"Pontianak"
					],
					[
						"id"=>2,
						"nama_kab"=>"Sekadau"
					],
					[
						"id"=>3,
						"nama_kab"=>"Sintang"
					]
				];

?>

		<h1>FROM REGISTRASI</h1>
		<form method="POST" action="proses.php">
			<table>
				<tr>
					<td>nama</td>
					<td>:</td>
					<td>
						<input type="text" name="nama">
					</td>
				</tr>
				<tr>
					<td>username</td>
					<td>:</td>
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td>alamat</td>
					<td>:</td>
					<td>
						<textarea name="alamat" rows="5" cols="30"></textarea>
					</td>		
				</tr>
				<tr>
					<td>kabupaten</td>
					<td>:</td>
					<td>
						<select name="kabupaten">
					<?php foreach ($kabupaten as $kab):?>
						<option value="<?php echo $kab['id'] ?>"><?php echo
							$kab['nama_kab'];?> </option>
					<?php endforeach ?>
			</select>
					</td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td>:</td>
					<td>
						<input type="number" name="no_hp">
					</td>

				</tr>
				<tr>
					<td> Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="Jenis Kelamin" value="1">Pria
						<input type="radio" name="Jenis Kelamin" value="2">Wanita
					</td>
				</tr>
				<tr>
					<td>Pilih Prodi</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="Pilih Prodi">Sistem informasi <br>
						<input type="checkbox" name="Pilih Prodi"> Sistem komputer <br>
						<input type="checkbox" name="Pilih Prodi"> Teknik Informatika <br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="simpan">
					</td>
				</tr>
			</table>
</form>
</body>
</html>