<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
	    <h1 align=center>Data Mahasiswa UDINUS</h1>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="left">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" size="45" /></td>
				</tr>
				<tr align="left">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="45"/></td>
				</tr>
				<tr align="left">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" size="45"/></td>
				</tr>
				<tr align="left">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" size="45"/></td>
				</tr>
				<tr align="left">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" size="45"/></td>
				</tr>
				<tr align="left">
					<td ><input type="submit" name="submit" value="Simpan"></td>
					<td><a href='index.php'>Tampil Data</a></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
	}
?>