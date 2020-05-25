<body>
    
<div class="col-lg-12">
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

        if(isset($_GET['cari'])){
				echo '<div> <font size="3">Hasil pencarian dengan kata kunci "'. $_GET['cari'] .'". </font></div>';
					$cari=mysqli_real_escape_string($mysqli, $_GET['cari']);
					
                                        $result=mysqli_query($mysqli, "select * from `tempatmakans` where nama like '%$cari%' or contact like '%$cari%'");
	}
        else{
		$result=mysqli_query($mysqli, "select * from tempatmakans inner join users on tempatmakans.id_user = users.id order by nama DESC limit $offset, $total_records_per_page");
		
	}
	$no=1;
	$data = mysqli_num_rows($result);
	if($data == null){
		if(isset($_GET['cari'])){
			echo '<center><h5>Hasil pencarian <b>"'. $_GET['cari'] .'"</b> tidak ditemukan. </h5></center><br><br>';
		}
	}else{
            while($data = mysqli_fetch_array($result)){
        echo "<a href='tampil_tempat_makan.php?id_tempatmakan=".$data['id_tempatmakan']."'>"
            ?>
    <div class="col-lg-4">
        <div class="card" style="background-color:#fff">
	        <div class="card-body cardatas" >
                    <img class="card-img-top" src="img_tempatMakan/<?php echo $data['gambar']?>" style="" alt="Card image cap">	        	
			
	      	</div>  
            <div class="card-body cardbawah" style="box-shadow: 5px 5px;">
                        <h4 class="card-text nama"><?php echo $data['nama']?></h4>
	          	</div>
        </div>     
    </div>
    </a>
        <?php  
        }
        }
        ?> 
 </div>


<div class="col-lg-12" style=";margin-top: 50px;">
<div class="row text-center">
	<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
</div>
<div class="col-lg-12">
<div class="row text-center">
<ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>
	
</div>
</div>
