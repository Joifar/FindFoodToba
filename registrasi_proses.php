<?php
  include("function.php");
  if(isset($_POST['registrasi'])){
    $username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $notelp = mysqli_real_escape_string($mysqli, trim($_POST['notelp'])); 
    $pass = mysqli_real_escape_string($mysqli, trim($_POST['password']));
    $pass2 = mysqli_real_escape_string($mysqli, trim($_POST['konfirmasi_pass']));
    $foto = $_FILES['img_user']['name'];
    $tmp = $_FILES['img_user']['tmp_name'];
    move_uploaded_file($tmp, "img_user/".$foto);
    $roles = mysqli_real_escape_string($mysqli, trim($_POST['role']));
    
  if ($pass != $pass2) {
      redirect('redirect.php');
      echo '<alert> Anda diharapkan dapat mengisi form kembali dengan benar </alert>';
  }else{
      $query = 'insert into `users` (`username`, `email`, `notelp`, `password`, `img_user`, `role`) values ("'.$username.'", "'.$email.'", "'.$notelp.'", "'.$pass.'", "'.$foto.'", "'.$roles.'")';
  
      mysqli_query($mysqli, $query);
      redirect('login.php');
  }
//  	$query = "INSERT INTO `user`(`username`, `email`, `password`, `kebangsaan`, 'img_user') VALUES ('.$username.', '.$email.', '.$pass.', '.$kebangsaan.', '.$foto.')";
//  	$sql = mysqli_query($mysqli, $query);
//  	if ($sql) {
//              header("location: ./berhasil.php");
//  	}else{
//              echo 'Pengisisian anda masih salah!';
//        }
//  }
  }
?>
