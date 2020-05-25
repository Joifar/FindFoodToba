<?php
  include '../function.php';
  $id=$_GET['id_artikel'];

  if (isset($_POST['AC'])) {
    $query = "UPDATE `artikel` SET `status_saran_artikel`='Accepted' WHERE `id_artikel`=$id";
    $sql = mysqli_query($mysqli, $query);
    if ($sql) {
      header("location: tableArtikel.php");
    }
  }elseif (isset($_POST['DC'])) {
    $query = "UPDATE `artikel` SET `status_saran_artikel`='Declined' WHERE `id_artikel`=$id";
    $sql = mysqli_query($mysqli, $query);
    if ($sql) {
      header("location: tableArtikel.php");
    }
  }
?>