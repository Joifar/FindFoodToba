<?php
    include 'function.php';
    if(isset($_POST['submit'])){
        if (!isset($_SESSION['username'])) {
            redirect_to('index.php');
        }
        $username = $_SESSION['username'];
        $id = getUserId($username);
        // Get the user id
        $namaTempatMakan = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
        $alamat = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
        $namaPemilik = mysqli_real_escape_string($mysqli, trim($_POST['contact']));
        $notelprumahmakan = mysqli_real_escape_string($mysqli, trim($_POST['notelprumahmakan']));
        $jambuka = mysqli_real_escape_string($mysqli, trim($_POST['jambuka']));
        $jamtutup = mysqli_real_escape_string($mysqli, trim($_POST['jamtutup']));
        $haribuka = mysqli_real_escape_string($mysqli, trim($_POST['haribuka']));
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "img_tempatMakan/".$gambar);
        $deskripsi = mysqli_real_escape_string($mysqli, trim($_POST['deskripsi']));
        $status_tempatmakan = "request"; 
        
        $query3 = 'insert into `tempatmakans` (`id_user`, `nama`, `alamat`, `contact`, `notelprumahmakan`, `jambuka`, `jamtutup`, `haribuka`, `gambar`, `deskripsi`, `status_saran_tempatmakan`) values("'.$id.'", "'.$namaTempatMakan.'","'.$alamat.'", "'.$namaPemilik.'", "'.$notelprumahmakan.'", "'.$jambuka.'", "'.$jamtutup.'", "'.$haribuka.'", "'.$gambar.'", "'.$deskripsi.'", "'.$status_tempatmakan.'")';
        mysqli_query($mysqli, $query3);
        redirect('logsaran.php');
    }
?>