<?php 
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 6;
        $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($mysqli,"SELECT COUNT(*) As total_records FROM `tempatmakans`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
?>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-home"></i> Tempat Makan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <br>
                <form action="cariTempatMakan.php" method="get">
            <div class="input-group col-md-6 col-md-offset-6" style="margin-left: 500px;">
                <input type="text" class="form-control" placeholder="Cari berdasarkan nama tempat makan atau pemilik..." name="cari">
                <span class="input-group-btn btn btn-primary" type="submit" name="cari">
                    <button class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form><br>
	<?php 
	if(isset($_GET['cari'])){
		echo '<div> <b>Hasil pencarian dengan kata kunci "'. $_GET['cari'] .'"</b></div><br/>';
		$cari=mysqli_real_escape_string($mysqli, $_GET['cari']);
		$brg=mysqli_query($mysqli, "select * from tempatmakans inner join users on tempatmakans.id_user = users.id where nama like '%$cari%' or username like '%$cari%' or contact like '%$cari%'");
	}
        else{
		$brg=mysqli_query($mysqli, "select * from tempatmakans inner join users on tempatmakans.id_user = users.id order by nama DESC limit $offset, $total_records_per_page");
		
	}
	$no=1;
	$count = mysqli_num_rows($brg);
	if($count == null){
		if(isset($_GET['cari'])){
			echo '<center><h5>Hasil pencarian <b>"'. $_GET['cari'] .'"</b> tidak ditemukan. </h5></center><br><br>';
		}
	}else{
	?>
    <thead>
	<tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Tempat Makan</th>  
            <th>Alamat</th>  
            <th>Pemilik</th>    
            <th colspan="3">Aksi</th> 
	</tr>
    </thead>
    <?php
	while($b=mysqli_fetch_array($brg)){
		?>
                <tbody>
                <tr>
			<td><?php echo $no++ ?></td>
                        <td>
                            <?php
                                echo "<img src='../img_tempatMakan/".$b['gambar']."' width='180' height='180'>";
                            ?>
                        </td>
			<td><?php echo $b['nama'] ?></td>
                        <td><?php echo $b['alamat'] ?></td>
			<td><?php echo $b['contact'] ?></td>
			<td>
                            <?php
                                echo "<a href ='detail_tempatmakan.php?id_tempatmakan=".$b['id_tempatmakan']."'><input type='button' class = 'btn btn-primary' value='Lihat'>
                                <a href ='form_ubah_saran.php?id_tempatmakan=".$b['id_tempatmakan']."'><input type='button' class = 'btn btn-warning' value='Edit'>
                                <a onclick='warn()'><input type='button' class='btn btn-danger' value='Hapus' style='margin-top: 10px;'></a>";
                            ?>
			</td>
		</tr>
                </tbody>
		<?php 
	}
	?>
                <script type="text/javascript">  
                    function warn() {
                        if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id_tempatmakan=<?php echo $b['id_tempatmakan']; ?>' }
                    }
                </script>
	
</table>
<div class="col-lg-12" style=";margin-top: 50px;">
<div class="row text-center">
	<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
</div>
<div class="col-lg-12">
<div class="row text-center">
<ul class="pagination">
	<?php 
			for($x=1;$x<=$total_no_of_pages;$x++){
				?>
				<li>Halaman >> <a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>	
</ul>
	
</div>
</div>
<?php
	}
	?>
    </div>
    </div>
    </div>