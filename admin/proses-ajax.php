<?php
include("../function.php");
$query = mysqli_query($conn, "SELECT * FROM tempatmakans WHERE nama='".mysqli_escape_string($mysqli, $_POST['nama'])."'");
$data = mysqli_fetch_array($query);
 
echo json_encode($data);
?>