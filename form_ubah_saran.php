<?php
    include 'header2.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>

<html>
    <head>
        <title>Form Ubah Saran</title>
		<script type="text/javascript" language="JavaScript">
            function update(){
                tanya = confirm("Ända Yakin Ingin Mengupdate Tempat Makan ini?");
                if(tanya == true)return true;
                else return false;
            }
        </script>
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
            var maxChar = 500;
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
            <script type="text/javascript">  
	   function PreviewImage() {  
	   var oFReader = new FileReader();  
	   oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);  
	   oFReader.onload = function (oFREvent) {  
	   document.getElementById("uploadPreview").src = oFREvent.target.result;  
	      };  
	    };  
	   </script>
            <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <link href="bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet">
<script src="bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    </head>
    <body>
        <?php
            $id_tempatmakan= $_GET['id_tempatmakan'];
            $query = "select * from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
            $sql = mysqli_query($mysqli, $query);
            $data = mysqli_fetch_array($sql);
        ?>
    <div id="TempatMakan-section" style="margin-top : 180px; margin-left: 100px; margin-right: 120px; border-radius: 15px;">
    <div class="container"> <!-- Container -->
        <div class="section-title text-left">
            <h2>Edit Tempat Makan</h2>
        </div>
        <div class="row" style="margin-top: 60px;">
            <div class="col-sm-12">
                <form method="post" action="proses_ubah_saran.php?id_tempatmakan=<?php echo $id_tempatmakan; ?>" enctype="multipart/form-data">
                    <div class="col-sm-9">
                        <h3>Nama : </h3><input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>">
                    </div>
                    <div class="col-sm-9">
                        <h3>Gambar : </h3>
                        <img style="height: 500px; width:500px;" id="uploadPreview" src="img_tempatMakan/<?php echo $data['gambar'];?>" border='1'>

                    </div>
                    <div class="col-sm-9">
                        <h3><input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto</h3>
                        <input type="file" id="uploadImage" name="gambar_baru" onchange="PreviewImage();" value="Upload foto baru">
                    </div>
                    <div class="col-sm-9">
                        <h3>Nama Pemilik : </h3>
                        <input class="form-control" id="nama" type="text" name="contact" value="<?php echo $data['contact']; ?>">
                    </div>
                    <div class="col-sm-9">
                        <h3>Alamat : </h3>
                        <input class="form-control" id="alamat" type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
                    </div>
                    <div class="col-sm-9">
                        <h3>Telepon : </h3>
                        <input class="form-control" id="notelp" type="text" value="<?php echo $data['notelprumahmakan']; ?>" name="notelprumahmakan" >
                    </div>
                    <div class="col-sm-9">
                        <h3>Hari Buka : </h3>
                        <select class="form-control" name="haribuka">
                            <option value="Setiap Hari">Setiap Hari(Senin-Minggu)</option>
                            <option value="Senin-Jumat">Hari Kerja(Senin-Jumat)</option>
                            <option valur="Sabtu-Minggu">Akhir Pekan(Sabtu-Minggu)</option>
                        </select>
                    </div>
                    <div class="col-sm-9">
                        <h3>Jam Operasi</h3>
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
                            <h4 style="font-size: 11.5px; margin-top: 22px;">AM : 12 malam - 12 siang || PM : 12 siang - 12 malam</h4>
                        </div>
                        <script type="text/javascript">
                            $('#jambuka').timepicker();
                        </script>
                        <script type="text/javascript">
                            $('#jamtutup').timepicker();
                        </script>
                    </div>
                    <div class="col-sm-9">
                        <h3>Deskripsi : </h3>
                        <textarea class="deskripsi" name="deskripsi" cols="30" rows="4" id="deskripsi" onkeyup="itung()" placeholder="Pesan Anda .." class="pesan"> <?php echo $data['deskripsi']; ?> </textarea>
                        Karakter Tersisa
                        <b><strong><input type="text" readonly name="hitung" id="hitung" class="trans1" size="3" disabled="disabled" style="border:none; background:none; color:#000000;" value="500"/></strong></b>
                    </div>
                    <div class="col-sm-9">
                        <h3>Status Saran : </h3><h2 style="color: red;"><?php echo $data['status_saran_tempatmakan']; ?></h2>
                    </div>
                    <div class="col-sm-9">
                        <input style="margin-top: 10px;"class="btn btn-danger" type="submit" value="Simpan" onclick='return update()'>
                        <a href="tampil_all_saran.php"><input style="margin-top: 10px;" class="btn btn-primary" type="button" value="Batal"></a>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
<?php
    include 'footer.php';
?>