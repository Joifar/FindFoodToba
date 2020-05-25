<?php
    include '../function.php';
    
    $id_makanan=$_GET['id_makanan'];
    
    $query = "Select * from makanans where id_makanan='".$id_makanan."'";
    $sql = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_array($sql);
    
    if(is_file("img_menuMakan/".$data['gambar']))
            unlink("img_menuMakan/".$data['gambar']);
    
    $query2 = "delete from makanans where id_makanan='".$id_makanan."'";
    $sql2 = mysqli_query($mysqli, $query2);
    
    if($sql2){
        header("location: tampil_semuaMenu.php");
    }else{
        echo 'Maaf data anda gagal dihapus. <a href="tampil_all_saran.php">Kembali</a>';
    }   
?>