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
        <script type="text/javascript">  
	   function PreviewImage() {  
	   var oFReader = new FileReader();  
	   oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);  
	   oFReader.onload = function (oFREvent) {  
	   document.getElementById("uploadPreview").src = oFREvent.target.result;  
	      };  
	    };  
	   </script>
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
                    <a href="formMenuAdmin.php">Tambah Menu</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-plus-square"></i>  Tambahkan Makanan/Minuman</div>
            <div class="card-body">
            <div class="table-responsive">
                <?php
                        include 'tampil_tempatMakan.php';
                    ?>
                <form action="menuMakan_Proses.php" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-4">
                            <img id="uploadPreview" src="../img_web/photo-icon.png" style="width: 200px; height: 200px; margin-bottom: 20px;" />
                        </div>   
                        <div class="col-md-8">
                            <label>  Pilih Gambar Makanan/Minuman</label>
                            <input id="uploadImage" class="form-control" type="file" name="gambar" onchange="PreviewImage();" style="width: 100%;"/>
                            <br>
                            <input class="form-control" id="nama" name="nama" type="text" aria-describedby="nameHelp" placeholder="Nama Makanan/Minuman.." required/>
                            <br>
                            <input class="form-control" id="harga" type="text" name="harga" aria-describedby="nameHelp" placeholder="Harga..">
                        </div>
                    </div>
                </div>
                <label>Ambil ID tempat makan dari tabel..</label>
                <div class="form-group">
                            <input class="form-control" id="id_tempatMakan" type="text" name="id_tempatmakan" aria-describedby="nameHelp" placeholder="ID tempat makan..">
                        </div> 
                <div class="form-group">
                    <textarea class="form-control" id="deskripsi" type="text" name="deskripsi" aria-describedby="nameHelp" placeholder="Deskripsi Makanan/Minuman.."></textarea>
                </div>    
                    <input type="submit" name="tambah" id="tambah" class="btn btn-danger" value="Tambah" style="margin-left: 942px;">
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