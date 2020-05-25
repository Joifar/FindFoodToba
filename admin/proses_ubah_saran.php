<?php
    include '../function.php';

    $id_tempatmakan = $_GET['id_tempatmakan'];
    $namaTempatMakan = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
    $alamat = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
    $namaPemilik = mysqli_real_escape_string($mysqli, trim($_POST['contact']));
    $notelprumahmakan = mysqli_real_escape_string($mysqli, trim($_POST['notelprumahmakan']));
    $jambuka = mysqli_real_escape_string($mysqli, trim($_POST['jambuka']));
    $jamtutup = mysqli_real_escape_string($mysqli, trim($_POST['jamtutup']));
    $deskripsi = $_POST['deskripsi'];
    $status_tempatmakan = "request";
    if(isset($_POST['ubah_foto'])){
        $gambar2 = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        
        $gambarbaru = date('dmYHis').$gambar2;
        
        $path = "../img_tempatMakan/".$gambarbaru;
        
        if(move_uploaded_file($tmp, $path)){
            $query = "select * from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
            $sql = mysqli_query($mysqli, $query);
            $data = mysqli_fetch_array($sql);
            
            if(is_file("../img_tempatMakan/".$data['gambar']))
                    unlink("../img_tempatMakan/".$data['gambar']);
            
            $query = "update tempatmakans set nama='".$namaTempatMakan."', alamat='".$alamat."', contact='".$namaPemilik."', notelprumahmakan='".$notelprumahmakan."', jambuka='".$jambuka."', jamtutup='".$jamtutup."', gambar='".$gambarbaru."', deskripsi='".$deskripsi."', status_saran_tempatmakan='".$status_tempatmakan."' where id_tempatmakan='".$id_tempatmakan."'";
            $sql = mysqli_query($mysqli, $query);
            
            if($sql){
                redirect('tampil_all_saran.php');
            }else{
                echo "telah terjadi kesalahan dalam menyimpan data. <a href='form_ubah_saran.php'>Kembali ke Form</a>";
            }
        }else{
            echo "maaf gambar gagal untuk diupload.";
            echo "<br><a href='form_ubah.php'>Kembali ke Form</a>";
        }
    }else{
        $query = "update tempatmakans set nama='".$namaTempatMakan."', alamat='".$alamat."', contact='".$namaPemilik."', notelprumahmakan='".$notelprumahmakan."', jambuka='".$jambuka."', jamtutup='".$jamtutup."', deskripsi='".$deskripsi."', status_saran_tempatmakan='".$status_tempatmakan."' where id_tempatmakan = '".$id_tempatmakan."'";
        $sql = mysqli_query($mysqli, $query);
        
        if($sql){
            echo 'tempat makan yang anda sarankan telah ditambahkan!';
        }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";    
            echo "<br><a href='form_ubah_saran.php'>Kembali Ke Form</a>";
        }
    }

?>