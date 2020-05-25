<?php
    include 'header2.php';
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

            function itung(message, maxChar){
            var maxChar = 14;
                if (document.formku.deskripsi.value.length > maxChar)
            {
                document.formku.deskripsi.value = document.formku.deskripsi.value.truncate(0, maxChar);
            }
                else document.formku.hitung.value = maxChar - document.formku.deskripsi.value.length;
            }

            function initial(){
                document.formku.hitung.value=maxChar;
            }
            </script>
            <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <link href="bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet">
<script src="bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    </head>
    <body>
    <div id="TempatMakan-section" style="margin-top : 180px; margin-left: 60px; margin-right: 60px; border-radius: 15px;">
    <div class="container"> <!-- Container -->
        <div class="section-title text-left">
            <h1><b>Sarankan Tempat Makan</b></h1>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-12">
                <table class="panjang-table">
                <form name="formku" id="form1" action="sarankan_proses.php" enctype="multipart/form-data" method="post">
                    <tr>
                        <td rowspan="7"><img id="uploadPreview" src="img_web/photo-icon.png" style="width: 230px; height: 230px; margin-bottom: 20px;" /></td>
                    </tr>
                    <tr>
                        <td><center><input class="panjang" id="nama" type="text" placeholder="   Nama Tempat Makan.." name="nama" required/></center></td>
                    </tr>
                    <tr>
                        <td><center><input class="panjang" id="contact" type="text" placeholder="   Nama Pemilik.." name="contact" required/></center></td>
                    </tr>
                    <tr>
                        <td><center><input class="panjang" id="alamat" type="text" placeholder="   Alamat.." name="alamat" required/></center></td>
                    </tr>
                    <tr>
                        <td><center><input class="panjang" id="notelp" type="text" placeholder="    No Telp.." name="notelprumahmakan" required/></center></td>
                    </tr>
                    <tr>
                        <td>
                            <center><select class="panjang" placeholder="   Hari Buka..." name="haribuka">
                                <option value="Setiap Hari">Setiap Hari(Senin-Minggu)</option>
                                <option value="Senin-Jumat">Hari Kerja(Senin-Jumat)</option>
                                <option valur="Sabtu-Minggu">Akhir Pekan(Sabtu-Minggu)</option>
                            </select></center>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-group bootstrap-timepicker panjang2">
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
                            <h4 style="font-size: 11.5px; margin-top: 22px;">AM : 12 malam - 12 siang || PM : 12 siang - 12 malam</h4>
                        </td>
                        <script type="text/javascript">
                            $('#jambuka').timepicker();
                        </script>
                        <script type="text/javascript">
                            $('#jamtutup').timepicker();
                        </script>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="uploadImage" type="file" name="gambar" onchange="PreviewImage();" style="width: 100%;"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                                <textarea class="deskripsi" name="deskripsi" cols="30" rows="5" id="deskripsi" onkeyup="itung()" placeholder="Pesan Anda .." class="pesan" required/></textarea>
                                Karakter Tersisa
                                <b><strong><input type="text" readonly name="hitung" id="hitung" class="trans1" size="3" disabled="disabled" style="border:none; background:none; color:#000000;" value="14"/></strong></b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><br><input class="btn btn-danger" id="submit" type="submit" name="submit" value="Tambah"></td>
                    </tr>
                </form>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
<?php
    include 'footer.php';
?>
