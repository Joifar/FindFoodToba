<?php
    include 'headeradmin.php';
   if(!isset($_SESSION['username']))      //memastikan pengguna sudah login atau tidak
    {
        header("Location:login.php");
    }
     if (isset($_GET['id'])) {
         $username = $_SESSION['username'];

        // Get the user id
        $id = getUserId($username);
    } 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">  
	   function PreviewImage() {  
	   var oFReader = new FileReader();  
	   oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);  
	   oFReader.onload = function (oFREvent) {  
	   document.getElementById("uploadPreview").src = oFREvent.target.result;  
	      };  
	    };  
	   </script>
           <script type="text/javascript">
            var maxChar = 200;
            function itung(){
                if (document.formku.deskripsi.value.length > maxChar)
            {
                document.formku.deskripsi.value = document.formku.deskripsi.value.substring(0, maxChar);
            }
                else document.formku.hitung.value = maxChar - document.formku.deskripsi.value.length;
            }
            function initial(){
                document.formku.hitung.value=maxChar;
            }
            </script>
            <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

            <link href="../bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet">
            <script src="../bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
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
                    <a href="sarankanTempatMakan.php">  Tambah Tempat Makan</a>
                </li>
            </ol>
    <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-plus-square"></i>  Tambah Tempat Makan</div>
            <div class="card-body">
            <div class="table-responsive">  
                <form name="formku" id="form1" action="sarankan_proses.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-4">
                            <img id="uploadPreview" src="../img_web/photo-icon.png" style="width: 200px; height: 200px; margin-bottom: 20px;" />
                        </div>
                        <div class="col-md-8">
                            <label>  Pilih Gambar Makanan/Minuman</label>
                            <input id="uploadImage" class="form-control" type="file" name="gambar" onchange="PreviewImage();" style="width: 100%;"/>
                            <br>
                            <input class="form-control" id="nama" type="text" placeholder="Nama Tempat Makan.." name="nama" required/>
                            <br>
                            <input class="form-control" id="contact" type="text" placeholder="Nama Pemilik.." name="contact" required/>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <input class="form-control" id="alamat" type="text" placeholder="Alamat.." name="alamat" required/></center></td>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="notelp" type="text" placeholder="No Telp.." name="notelprumahmakan" required/></center></td>
                    </div>
                    <div class="form-group">
                    <div class="input-group bootstrap-timepicker panjang2">
                            <div class="col-sm-4">
                                jam buka: 
                                    <div class="panjangjambuka">
                                        <div class="input-group bootstrap-timepicker">
                                            <input id="jambuka" class="input-small panjangjambuka2" type="text" name="jambuka" required/>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                jam tutup : 
                                    <div class="panjangjamtutup">
                                        <div class="input-group bootstrap-timepicker">
                                            <input id="jamtutup" class="input-small panjangjamtutup2" type="text" name="jamtutup" required/>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                    </div>
                            </div>
                    </div>
                    </div>
                        <script type="text/javascript">
                            $('#jambuka').timepicker();
                        </script>
                        <script type="text/javascript">
                            $('#jamtutup').timepicker();
                        </script>
                    <div class="form-group">    
                        <input id="uploadImage" class="form-control" type="file" name="gambar" onchange="PreviewImage();" style="width: 100%;"/>
                    </div>
                        <textarea class="form-control" name="deskripsi" cols="30" rows="5" id="deskripsi" onkeyup="itung()" placeholder="Pesan Anda .." class="pesan" required/></textarea>
                        Karakter Tersisa
                        <b><strong><input type="text" readonly name="hitung" id="hitung" class="trans1" size="3" disabled="disabled" style="border:none; background:none; color:#000000;" value="200"/></strong></b>
                    <div class="form-group">
                        <input class="btn btn-danger" id="submit" type="submit" name="submit" value="Tambah" style="margin-left: 945px;">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
  </div>
</body>
<?php
    include 'footeradmin.php';
?>

