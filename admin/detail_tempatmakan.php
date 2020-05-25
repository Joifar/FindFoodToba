<?php
    include 'headeradmin.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>

<html>
    <head>
        <title>Form Ubah Menu</title>
    </head>
    <body>
        <?php
            $id_tempatmakan= $_GET['id_tempatmakan'];
            $query = "select * from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
            $sql = mysqli_query($mysqli, $query);
            $data = mysqli_fetch_array($sql);
        ?>
    <hr>
    <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="form_ubah_saran.php">Detail Tempat Makan</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-eye"></i>  Detail Tempat Makan</div>
            <div class="card-body">
            <div class="table-responsive">
                <div class="form-group">
                    <h5>Nama : </h5><h3><?php echo $data['nama']; ?></h3>
                </div>
                <div class="form-group">
                    <img src="../img_tempatMakan/<?php echo $data['gambar'];?>" border='1'>
                </div><div class="form-group">
                    <h5>Pemilik : </h5><h3><?php echo $data['contact']; ?></h3>
                </div>
                <div class="form-group">
                    <h5>Alamat : </h5><h3><?php echo $data['alamat']; ?></h3>
                </div>
                <div class="form-group">
                    <h5>No telepon : </h5><h3><?php echo $data['notelprumahmakan']; ?></h3>
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