<?php
  include '../function.php';
  $id_tempatmakan=$_GET['id_tempatmakan'];

  if (isset($_POST['AC'])) {
    $query = "UPDATE `tempatmakans` SET `status_saran_tempatmakan`='Accepted' WHERE `id_tempatmakan`=$id_tempatmakan";
    $sql = mysqli_query($mysqli, $query);
    if ($sql) {
      header("location: table.php");
    }
  }elseif (isset($_POST['DC'])) {
    $query = "UPDATE `tempatmakans` SET `status_saran_tempatmakan`='Declined' WHERE `id_tempatmakan`=$id_tempatmakan";
    $sql = mysqli_query($mysqli, $query);
    if ($sql) {
      header("location: table.php");
    }
  }
?>