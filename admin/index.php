<?php
    include 'headeradmin.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
        </li>
        </ol>
        <?php
            include 'tampil_all_tempatmakan.php';
        ?>
        <?php
            include 'tampil_all_artikel.php';
        ?>
    </div>
    </div>
<?php
    include 'footeradmin.php';
?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
