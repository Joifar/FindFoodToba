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
        <title>Form Ubah Artikel</title>
    </head>
    <body>
        <?php
            $id_artikel= $_GET['id'];
            $query = "select * from artikel where id_artikel='".$id_artikel."'";
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
                    <a href="tableArtikel.php">Artikel</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="form_ubahArtikel.php">Form Ubah Artikel</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-pencil-square-o"></i>  Edit Artikel</div>
            <div class="card-body">
            <div class="table-responsive">
                <form action="proses_ubahArtikel.php?id=<?php echo $id_artikel; ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <input class="form-control" aria-describedby="nameHelp" type="text" name="judul" value="<?php echo $data['judul']; ?>">
                </div>
                <div class="form-group">
                    <input class="form-control"  aria-describedby="nameHelp" type="text" id="contact" name="post_on" value="<?php echo $data['post_on']; ?>">
                </div>  
                <div class="form-group">
                    <textarea class="form-control" aria-describedby="nameHelp" name="artikel"><?php echo $data['artikel']; ?></textarea>
                </div>    
                <div class="form-row">
                    <div class="col-sm-12">
                        <a href="tableArtikel.php"><input type="button" class="btn btn-danger" value="Batal" style="margin-left: 870px;"></a>
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