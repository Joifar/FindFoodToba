<?php
    include 'function.php';
    if(isset($_POST['tambah'])){
        if (!isset($_SESSION['username'])) {
            redirect_to('index.php');
        }
        $username = $_SESSION['username'];
        $id = getUserId($username);
        // Get the user id
        $namaTempatMakan = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
        $alamat = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
        $namaPemilik = mysqli_real_escape_string($mysqli, trim($_POST['contact']));
        $status = mysqli_real_escape_string($mysqli, trim($_POST['status']));
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "img_tempatMakan/".$gambar);
        $deskripsi = mysqli_real_escape_string($mysqli, trim($_POST['deskripsi']));
        $status_tempatmakan = "request"; 
        
        $query3 = 'insert into `tempatmakans` (`id_user`, `nama`, `alamat`, `contact`, `status`, `gambar`, `deskripsi`, `status_saran_tempatmakan`) values("'.$id.'", "'.$namaTempatMakan.'","'.$alamat.'", "'.$namaPemilik.'", "'.$status.'", "'.$gambar.'", "'.$deskripsi.'", "'.$status_tempatmakan.'")';
        mysqli_query($mysqli, $query3);
        redirect('tampil_all_saran.php');
    }
?>