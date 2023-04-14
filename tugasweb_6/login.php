<?php 
 //ambil nilai variabel error
 if (isset($_GET['error']))
 	{
 		$error=$_GET['error'];
 	}
 	else
 	{
 		$error="";
 	}	
 	//Siapkan Pesan Kesalahan
 	$pesan="";
 	if ($error=="variabel_belum_diset") 
 		{
 			$pesan="<h3>Maaf, Anda harus mengakses Halaman ini dari login.php</h3>";
 		}
 	if ($error=="nama_kosong")
 		{
	 		$pesan="<h3>Maaf, Anda harus mengisi nama</h3>";
	 	}
	 if ($error=="email_kosong") 
	 	{
	 		$pesan="<h3>Maaf, anda harus mengisi email</h3>";
	 	}
 ?>

 <!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Form Login</title>
</head>
<body>
   <h2>Form Login</h2>
   <?php 
 		echo $pesan;
 	 ?>
   <form action="proses.php" method="get">
     Nama: <input type="text" name="nama" />
     <br>
     <br>
     E-Mail: <input type="text" name="email" />
     <br>
     <br>
     <input type="submit" value="Submit" >
   </form>
</body>
</html>