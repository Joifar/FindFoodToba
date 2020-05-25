<?php
  include("function.php");
  if(isset($_POST['registrasi'])){
    $username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $pass = mysqli_real_escape_string($mysqli, trim($_POST['password']));
    $pass2 = mysqli_real_escape_string($mysqli, trim($_POST['konfirmasi_pass']));


  if ($pass != $pass2) {
      echo "Password belum sama";
      redirect('login.php');
  }else{
      $query = 'insert into `users` (`username`, `email`, `password`, `role`)
                          values ("'.$username.'", "'.$email.'", "'.$pass.'",  "2")';

      mysqli_query($mysqli, $query);
      redirect('index.html');
    }
  }
?>
