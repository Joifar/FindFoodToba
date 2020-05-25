<?php 	include "function.php";

	if(isset($_POST['komentari'])){
		$id_tempatmakan = $_GET['id_tempatmakan'];
		$id = getUserId($_SESSION['username']);
		$tgl=date('Y-m-d');

		$komentar = mysqli_real_escape_string($mysqli,trim($_POST['komentar']));
		echo $id_tempatmakan, $id, $komentar;
		$query = mysqli_query($mysqli, "insert into komentars (id_tempatmakan,komentar,id_user,tanggal)
									values ('$id_tempatmakan','$komentar','$id','$tgl')");
		//echo "<br>" . $mysqli->error;
		redirect('tampil_tempat_makan.php?id_tempatmakan='.$id_tempatmakan.'');
	}
?>
