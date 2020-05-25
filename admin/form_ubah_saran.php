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
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="table.php">Daftar Tempat Makan</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="form_ubah_saran.php">Form Ubah Tempat Makan</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-pencil-square-o"></i>  Edit Menu</div>
            <div class="card-body">
            <div class="table-responsive">
                <form action="proses_ubahMenu.php?id_tempatmakan=<?php echo $id_tempatmakan; ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label>  Gambar Makanan/Minuman</label>
                    <br>
                    <img src="../img_tempatMakan/<?php echo $data['gambar'];?>" border='1'>
                            <br>
                    <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                    <input type="file" name="gambar" value="Upload foto baru">
                </div>
                <div class="form-group">
                    <input class="form-control" aria-describedby="nameHelp" type="text" name="nama" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control"  aria-describedby="nameHelp" type="text" id="contact" name="contact" value="<?php echo $data['contact']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control"  aria-describedby="nameHelp" id="alamat" type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control"  aria-describedby="nameHelp" id="notelp" type="text" value="<?php echo $data['notelprumahmakan']; ?>" name="notelprumahmakan">
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-sm-12">
                                Jam Buka : <input type="text" name="jambuka" ><?php echo $data['jambuka']; ?>
                                Jam Tutup : <input type="text" name="jamtutup" ><?php echo $data['jamtutup']; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" aria-describedby="nameHelp" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>
                </div>    
                <div class="form-row">
                    <div class="col-sm-12">
                    <a href="tampil_semuaMenu.php"><input type="button" class="btn btn-danger" value="Batal" style="margin-left: 870px;"></a>
                    <input type="submit" name="tambah" id="tambah" class="btn btn-primary" value="Simpan" style="margin-left: 10px;">
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