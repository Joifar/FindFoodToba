<?php 
include '../function.php';
if($id=$_GET['id_tempatmakan']){;
mysqli_query($mysqli, "delete from tempatmakans where id_tempatmakan='$id'");
header("location:index.php");
}else if($id = $_GET['id_artikel']){
    mysqli_query($mysqli, "delete from artikel where id_artikel='$id'");
    header("location:index.php");
}
?>