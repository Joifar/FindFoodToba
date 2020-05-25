<?php
    include 'function.php';
    
    $id_tempatmakan=$_GET['id_tempatmakan'];
    
    $query = "Select * from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
    $sql = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_array($sql);
    
    if(is_file("img_tempatMakan/".$data['gambar']))
            unlink("img_tempatMakan/".$data['gambar']);
    
    $query2 = "delete from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
    $sql2 = mysqli_query($mysqli, $query2);
    
    if($sql2){
        header("location: tampil_all_saran.php");
    }else{
        echo 'Maaf data anda gagal dihapus. <a href="tampil_all_saran.php">Kembali</a>';
    }   
?>