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
            $id_makanan= $_GET['id_makanan'];
            $query = "select * from makanans where id_makanan='".$id_makanan."'";
            $sql = mysqli_query($mysqli, $query);
            $data = mysqli_fetch_array($sql);
        ?>
    <hr>
    <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="formMenuAdmin.php">Saran</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="form_ubahMenu.php">Form Ubah Menu</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-pencil-square-o"></i>  Edit Menu</div>
            <div class="card-body">
            <div class="table-responsive">
                <form action="proses_ubahMenu.php?id_makanan=<?php echo $id_makanan; ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label>  Gambar Makanan/Minuman</label>
                    <br>
                    <img src="../img_menuMakan/<?php echo $data['gambar'];?>" style="width: 270px; border: 1px solid #000; height: 270;">
                            <br>
                    <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                    <input type="file" name="gambar" value="Upload foto baru">
                </div>
                <div class="form-group">
                    <input class="form-control" aria-describedby="nameHelp" type="text" name="nama" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control"  aria-describedby="nameHelp" type="text" name="harga" value="<?php echo $data['harga']; ?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" aria-describedby="nameHelp" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>
                </div>    
                <div class="form-row">
                    <div class="col-sm-12">
                    <input type="submit" name="tambah" id="tambah" class="btn btn-warning" value="Edit" style="margin-left: 897px;">
                    <a href="tampil_semuaMenu.php"><input type="button" class="btn btn-danger" value="Batal" style="margin-left: 10px;"></a>
                    </div>
                </div>
                </form>
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