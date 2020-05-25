<?php
    include 'function.php';
    if(isset($_POST['tambah'])){
        if (!isset($_SESSION['username'])) {
            redirect_to('index.php');
        }
        $username = $_SESSION['username'];
        $id = getUserId($username);
        // Get the user id
        $namaMenu = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
        $hargaMenu = mysqli_real_escape_string($mysqli, trim($_POST['harga']));
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "../img_menuMakan/".$gambar);
        $deskripsi = mysqli_real_escape_string($mysqli, trim($_POST['deskripsi']));
        
        $query3 = 'insert into `makanans` (`nama`, `harga`, `gambar`, `deskripsi`) values("'.$namaMenu.'", "'.$hargaMenu.'", "'.$gambar.'", "'.$deskripsi.'")';
        mysqli_query($mysqli, $query3);
        redirect('index.php');
    }
?>