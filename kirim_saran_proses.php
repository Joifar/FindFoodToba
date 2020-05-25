<?php
    include 'function.php';
    if(isset($_POST['simpan'])){
        if (!isset($_SESSION['username'])) {
            redirect_to('index.php');
        }
        $username = $_SESSION['username'];
        $id = getUserId($username);
        $namaTempatMakan = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $namaPemilik = $_POST['contact'];
        $status = $_POST['status'];
        $gambar = $_POST['gambar'];
        $deskripsi = $_POST['deskripsi'];
        
        $query3 = 'insert into `tempatmakans` (`id_user`, `nama`, `alamat`, `contact`, `status`, `gambar`, `deskripsi`) values("'.$id.'", "'.$namaTempatMakan.'","'.$alamat.'", "'.$namaPemilik.'", "'.$status.'", "'.$gambar.'", "'.$deskripsi.'")';
        mysqli_query($mysqli, $query3);
        redirect('berhasil.php');
    }
?>