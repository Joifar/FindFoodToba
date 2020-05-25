<?php
    include 'headeradmin.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>

<html>
    <body>
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="table.php">Daftar Tempat Makan yang disarankan</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tempat Makan yang disarankan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Penyaran</th>
                    <th>Nama Tempat Makan</th>  
                    <th>Alamat</th>  
                    <th>Nama Pemilik</th>      
                    <th>No Telepon</th> 
                    <th>Jam Operasi</th>
                    <th>Deskripsi</th>
                    <th colspan="3">Aksi</th> 
                </tr>
                </thead>
            <?php
           	$no = 0;
        	$query = "SELECT * FROM tempatmakans ";
                $query .= "LEFT JOIN users ON tempatmakans.id_user = users.id WHERE status_saran_tempatmakan='request'";
		$result = mysqli_query($mysqli,$query);
           	if(mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_array($result)) {
                    $no++;
                    $user= $row['id_user'];
                    $gambar = $row['gambar'];
                    $namaTempatMakan = $row['nama'];
                    $alamat = $row['alamat'];
    		    $namaPemilik = $row['contact'];
                    $notelprumahmakan = $row['notelprumahmakan'];
                    $jambuka = $row['jambuka'];
                    $jamtutup = $row['jamtutup'];
        	    $deskripsi = $row['deskripsi'];
                       // $status = $row['status_dokumen'];
           			
                    $query2 = "SELECT * FROM users WHERE id='".$user."'";
                    $sql2 = mysqli_query($mysqli, $query2);
                    $row2 = mysqli_fetch_array($sql2);
                    echo "<tbody>"
                    . "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td><img src='../img_tempatMakan/".$row['gambar']."' width='100' height='100'></td>";
                        echo "<td><a href='profil.php?id_user=".$user."'>".$row2['username']."</a></td>";
                        echo "<td>$namaTempatMakan</td>";
                        echo "<td>$alamat</td>";
                        echo "<td>$namaPemilik</td>";
                        echo "<td>$notelprumahmakan</td>";
                        echo "<td>$jambuka - $jamtutup</td>";
                        echo "<td>$deskripsi</td>";
                        echo "<td>
                            <form action='aksi_saran_admin.php?id_tempatmakan=".$row['id_tempatmakan']."' method='post'>
                                <input type='submit' class = 'btn btn-primary' name='AC' value='Terima' style='margin-top: 10px;'>
                                <input type='submit' class = 'btn btn-danger' name='DC' value='Tolak' style='margin-top: 10px;'>
                                <a href='form_ubah_saran.php?id_tempatmakan=".$row['id_tempatmakan']."'><input type='button' class='btn btn-warning' value='Edit' style='margin-top: 10px;'></a>
                            </form>
                            </td>";
                    echo "</tr>"
                        . "</tbody>";
                    }
        	}else{
            ?>
            <tr>
        	<th colspan="7" style="text-align: center;">Belum ada Saran tempat makan</th>
            </tr>
            <?php 
                } 
            ?>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
    </body>
</html>

<?php
    include 'footeradmin.php';
?>