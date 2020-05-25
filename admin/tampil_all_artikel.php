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

	$result_count = mysqli_query($mysqli,"SELECT COUNT(*) As total_records FROM `artikel`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
?>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-list-alt"></i>  Artikel</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <br>
	<?php 
		$brg=mysqli_query($mysqli, "select * from artikel inner join users on artikel.id_user = users.id");
	
	$no=1;
	$count = mysqli_num_rows($brg);
	
	?>
    <thead>
	<tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Topik Artikel</th>  
            <th>Tanggal Postingan</th>  
            <th>Author</th>    
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
                                echo "<img src='../img_artikel/".$b['gambar']."' width='180' height='170s'>";
                            ?>
                        </td>
			<td><?php echo $b['judul'] ?></td>
                        <td><?php echo $b['post_on'] ?></td>
			<td><?php echo $b['username'] ?></td>
			<td>
                            <?php
                                echo "<a href = 'Artikel.php?id_artikel=".$b['id_artikel']."'><input type='button' class = 'btn btn-primary' value='Lihat'>
                                <a onclick='warn()'><input type='button' class='btn btn-danger' value='Hapus'></a>";
                            ?>
			</td>
		</tr>
                </tbody>
		<?php 
	}
	?>
                <script type="text/javascript">  
                    function warn() {
                        if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id_artikel=<?php echo $b['id_artikel']; ?>' }
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
    </div>
    </div>
    </div>