<!DOCTYPE html>
<html>
<head>
	<title>halaman proses</title>
</head>
<body>
	<h1> Selamat Bergabung</h1>
	<p>Selamat Anda terdaftar</p><br>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $_POST['nama'] ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $_POST['alamat']; ?></td>
	</tr>
	<tr>
		<td>User_Name</td>
		<td>:</td>
		<td><?php echo $_POST['username']; ?></td>
	</tr>
</table>
</body>
</html>