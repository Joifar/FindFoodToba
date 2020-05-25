<?php
    include("../function.php");

    $id_makanan = $_GET['id_makanan'];
    $namaMenu = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    if(isset($_POST['ubah_foto'])){
        $gambar2 = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        
        $gambarbaru = date('dmYHis').$gambar2;
        
        $path = "../img_menuMakan/".$gambarbaru;
        
        if(move_uploaded_file($tmp, $path)){
            $query = "select * from makanans where id_makanan='".$id_makanan."'";
            $sql = mysqli_query($mysqli, $query);
            $data = mysqli_fetch_array($sql);
            
            if(is_file("../img_menuMakan/".$data['gambar']))
                    unlink("../img_menuMakan/".$data['gambar']);
            
            $query = "update makanans set nama='".$namaMenu."', harga='".$harga."', gambar='".$gambarbaru."', deskripsi='".$deskripsi."' where id_makanan='".$id_makanan."'";
            $sql = mysqli_query($mysqli, $query);
            
            if($sql){
                redirect('tampil_semuaMenu.php');
            }else{
                echo "telah terjadi kesalahan dalam menyimpan data. <a href='form_ubahMenu.php'>Kembali ke Form</a>";
            }
        }else{
            echo "maaf gambar gagal untuk diupload.";
            echo "<br><a href='form_ubahMenu.php'>Kembali ke Form</a>";
        }
    }else{
        $query = "update makanan set nama='".$namaMenu."', harga='".$harga."', deskripsi='".$deskripsi."' where id_makanan = '".$id_makanan."'";
        $sql = mysqli_query($mysqli, $query);
        
        if($sql){
            echo 'menu Makanan telah ditambahkan!';
        }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";    
            echo "<br><a href='form_ubahMenu.php'>Kembali Ke Form</a>";
        }
    }

?>