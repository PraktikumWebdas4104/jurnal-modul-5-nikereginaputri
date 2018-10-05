<?php 

	if (isset($_POST['submit'])){
		$koneksi = new mysqli("localhost","root"," ","pendaftaran");

		if ($koneksi) {
			$nim=$_POST['nim'];
			$nama=$_POST['nama'];
			$email=$_POST['email'];

			$status=true;
			 if (!is_int($nim) && strlen($nim)!=10) {
			 	echo "nim 10 karakter";

			 	$status=false;
			 }
			 if(strlen($nama)!=25){
	echo "nama 25 karakter";

			 }

			$sql=$koneksi->query("
				INSERT INTO 'pendaftaran'('nim','nama','email')VALUES(".'$nim'.",".'$nama'.",".'$email'.")");
		echo "koneksi berhasil";

	}else{
		echo "koneksi  gagal";
	}
}
 ?>
