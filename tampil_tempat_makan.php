<?php
    include 'header2.php';
    $id_tempatmakan= $_GET['id_tempatmakan'];
    $query = "select * from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
    $sql = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_array($sql);
    //$id_tempatmakan= $_GET['id_tempatmakan'];
    $querykomen = "select komentars.id_komentar,komentars.id_tempatmakan,komentars.komentar,komentars.tanggal,users.username  from komentars
    join users  on users.id =komentars.id_user where id_tempatmakan ='".$id_tempatmakan."' order by id_komentar DESC" ;
    $sql1 = mysqli_query($mysqli, $querykomen);
?>

<html>
    <head>
        <title>Lihat Tempat Makan</title>
    </head>
    <body>
    <div id="TempatMakan-section" style="margin-top : 180px; margin-left: 100px; margin-right: 120px; border-radius: 15px;">
    <div class="container"> <!-- Container -->
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-10">
                <h1 style=" margin-bottom: 30px;"><b><?php echo $data['nama']; ?> </b></h1>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <img src="img_tempatMakan/<?php echo $data['gambar'];?>" border='1' style="height:350px;width:350px;">
                </div> 
                <div class="col-sm-6">
                    <h3 style="margin-top: -2px;">Deskripsi <br><?php echo $data['deskripsi']; ?></h3>
                </div>
                <div class="col-sm-6">
                    <h3>Hari Buka <br><?php echo $data['haribuka']; ?> </h3>
                </div>
                <div class="col-sm-6">
                    <h3>Jam Operasi <br><?php echo $data['jambuka']; ?> hingga <?php echo $data['jamtutup']; ?></h3>
                </div>
                <div class="col-sm-6">
                    <h3>Telepon <br><?php echo $data['notelprumahmakan']; ?> </h3>
                </div>
                <div class="col-sm-6">
                    <h3>Alamat <br><?php echo $data['alamat']; ?> </h3>
                </div>
            </div>
            <div class="col-md-12" style="padding-top: 30px; margin-left: 15px;">
                <h1>Menu <?php echo $data['nama']; ?></h1>
        <div class="col-lg-12">
<?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 3;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($mysqli,"SELECT COUNT(*) As total_records FROM `makanans`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

    $result = mysqli_query($mysqli,"SELECT * FROM `makanans` where id_tempatmakan = '".$id_tempatmakan."' LIMIT $offset, $total_records_per_page");

   	while($data = mysqli_fetch_array($result)){     
        ?> 
        <div class="col-sm-4" style="margin-left: -29px;">
        <div class="col-sg-12">
            <img src="img_menuMakan/<?php echo $data['gambar'];?>" style="border:1px solid #000;  width:250px; height:230px;">
        </div>
        <div class="col-sg-12">
            <h3><?php echo $data['nama'];?></h3>
        </div>
        <div class="col-sg-12">
            <h3><?php echo $data['harga'];?></h3>
        </div>
        </div>
    <?php
        }
    ?>
 </div>
           </div>
            <div class="col-md-12" style="padding-top: 30px; margin-left: 20px;">
                <table style="height:200px;width:600px">
                       <form action="komentar_proses.php?id_tempatmakan=<?= $_GET['id_tempatmakan']; ?>" method="POST" >
                  <tr>
                      <td><h3>Berikan komentar anda</h3></td>
                  </tr>
                  <tr>
                    <td rowpsan="3">
                        <textarea name="komentar" class="form-control" placeholder="Komen bray" style="height:100px; width:100%;">    </textarea>
                    </td>
                  </tr>
                  <tr >
                       <td >
                           <input style="margin-top: 10px;" type="submit" name="komentari" id="submit" class="btn btn-danger " value="Tambah" style="margin-bottom :20px;">
                      </td>
                  </tr>
              </form>
                </table>
            </div>
            <div class="col-md-12" style="margin-top:10px;">
<!--                 <div class="container-fluid" style="background-color: #fff">-->
              <?php while($data = mysqli_fetch_array($sql1)) {?>
                  <div class="col-lg-12">
                      <div class="col-lg-6 bg-secondary" style="margin-left: 1px; margin-top: 10px;">
<!--                        <div class="card card text-white mb-6" style="background-color: #fff; width: 40rem; margin-top: 10px; ">-->
                        <div class="card-body"  >
                          <p class="card-title txt2" style="color:blue" ><?php echo $data['username']  ?></p>
                          <p class ="card-text">
                          <?php  $tanggal = $data['tanggal'];
                          echo date("d/F/Y",strtotime($tanggal)); ?>
                        </p>
                        <p class="card-text">
                        <p><?php echo $data['komentar'] ?></p>
                        <hr style="height:2px; width:500px; background-color: gray;margin-left: -10px;margin-bottom: 10px;"></hr>
                        </p>
                        </div>
<!--                        </div>-->
                      </div>
                      
                </div>

             <?php } ?>
        </div>
	</div>
	</div>
    </div>
    </body>
</html>
<?php
	include 'footer.php';
?>
