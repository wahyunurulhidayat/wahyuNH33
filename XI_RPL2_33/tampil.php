<html>
<body>
<p align="center"><font size="5px"><b>INFO BIODATA ANDA</b></p>
<p align="center"><table>
<?php
		$conn=mysql_connect("localhost", "root", "");
		mysql_select_db("dbinstagram");
		$email=$_POST['email'];
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$sandi=$_POST['sandi'];
		$sql="insert into tinstagram (email, nama, username, sandi) values ('$email', '$nama', '$username', '$sandi')";
		mysql_query($sql);
		echo "<table>";
		echo "<tr><td>Nomor Ponsel atau Email</td> <td>:</td> <td>$email</td></tr>";
		echo "<tr><td>Nama Lengkap</td> <td>:</td> <td>$nama</td></tr>";
		echo "<tr><td>Nama Pengguna</td> <td>:</td> <td>$username</td></tr>";
		echo "<tr><td>Kata Sandi</td> <td>:</td> <td>$sandi</td></tr>";
		echo "</table>";
?>
</body>
</html>
