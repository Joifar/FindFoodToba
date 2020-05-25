<?php
    include 'headeradmin.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
    
    $id_makanan= $_GET['id_makanan'];
    $query = "select * from makanans where id_makanan='".$id_makanan."'";
    $sql = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_array($sql);
?>
<html>
    <head>
        <title>Lihat Tempat Makan</title>
    </head>
    <body>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="tampil_semuaMenu.php">Daftar Menu</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="tampil_menuMakan.php">Detail Menu</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-eye"></i>  Detail Menu</div>
            <div class="card-body">
            <div class="table-responsive">
                <div class="form-group">
                    <h5>Nama : </h5><h3><?php echo $data['nama']; ?></h3>
                </div>
                <div class="form-group">
                    <img src="../img_menuMakan/<?php echo $data['gambar'];?>" border='1'>
                </div><div class="form-group">
                    <h5>Pemilik : </h5><h3>Rp <?php echo $data['harga']; ?></h3>
                </div>
                <div class="form-group">
                    <h5>Deskripsi : </h5><h3><?php echo $data['deskripsi']; ?></h3>
                </div>    
          </div>
        </div>
       </div>
    </div>
   </div>
    </body>
</html>
<?php
    include 'footeradmin.php';
?>