<?php
    include 'header2.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
    
    $id_tempatmakan= $_GET['id_tempatmakan'];
    $query = "select * from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
    $sql = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_array($sql);
?>

<html>
    <head>
        <title>Lihat Tempat Makan</title>
    </head>
    <body>
	<div id="TempatMakan-section" style="margin-top : 180px; margin-left: 100px; margin-right: 120px; border-radius: 15px;">
    <div class="container"> <!-- Container -->
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-12">
		<h1><b><?php echo $data['nama']; ?> </b></h1><h4 style="color : red;">Status <?php echo $data['status_saran_tempatmakan']; ?></h4>
                    <img src="img_tempatMakan/<?php echo $data['gambar'];?>" border='1' style="height:500px;width:500px;">
            </div> 
            <div class="col-sm-9">
                <h3>Deskripsi <br><?php echo $data['deskripsi']; ?></h3>
            </div>
            <div class="col-sm-9">
                <h3>Hari Buka <br><?php echo $data['haribuka']; ?> </h3>
            </div>
            <div class="col-sm-9">
                <h3>Jam Operasi <br><?php echo $data['jambuka']; ?> hingga <?php echo $data['jamtutup']; ?></h3>
            </div>
            <div class="col-sm-9">
                <h3>Telepon <br><?php echo $data['notelprumahmakan']; ?> </h3>
            </div>
            <br>
            <div class="col-sm-4" style="margin-left : -17px;">
                <div class="col-sm-2">
                    <?php echo "<a href='form_ubah_saran.php?id_tempatmakan=".$data['id_tempatmakan']."'><input type='button' class='btn btn-warning' value='Edit' style='margin-top: 10px;'></a>"?>
                </div>
                <div class="col-sm-2">
                    <?php echo "<a href='logsaran.php'><input type='button' class='btn btn-primary' value='Batal' style='margin-top: 10px;'></a>"?>
                </div>
            </div>
        </div>
	</div>
	</div>
    </body>
</html>
<?php
	include 'footer.php';
?>
