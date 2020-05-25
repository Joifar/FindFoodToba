<?php
    include 'header2.php';
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>

<!--
	<header  class="text-center" style="height: 20%">
        <div class="intro-text1">
        </div>
    </header>-->

<div class="container-fluid" style="background-color: #F6F6F6; margin-top: 180px;">
    <div class="col-lg-8">
        <div class="text-left" style="margin-bottom: 35px; margin-top: 80px; margin-left: 2px;">
          <h2>Artikel </h2>
        </div>
        <?php
            if(isset($_SESSION['username'])){
        ?>
        <div class="col-sm-8" style="margin-bottom: 20px; margin-left: -13px;">
            <a href="tambahUlasan.php"><input class="btn btn-danger" type="button" value="Tambah Artikel"></a>
        </div>
        <?php
            }
        ?>
    </div>
</div>

<div class="container-fluid" style="background-color: #F6F6F6;">
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
//	$query = "Select * from tempatmakans where id_user = '".$id."'"; 
	$result_count = mysqli_query($mysqli,"SELECT COUNT(*) As total_records FROM `artikel`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

    $result = mysqli_query($mysqli,"SELECT * FROM `artikel` where status_saran_artikel='accepted' LIMIT $offset, $total_records_per_page");
                       // $status = $row['status_dokumen'];
   		while($data = mysqli_fetch_array($result)){
                    
      
       echo "<a href='artikel.php?id_artikel=".$data['id_artikel']."'>"
	   ?>
	   	<div class="col-sm-8" style="margin-bottom: 50px;">
                    <div class="cardatas2" >
                            <div class="col-sm-3">
                                <img class="card-img-top" src="img_artikel/<?php echo $data['gambar']?>" style="height: 170px; width: 170px; margin-top: 15px;">       	
                            </div>
                            <div class="col-sm-6">
                                <h1 style="" class="card-text fsize"><?php echo $data['judul']?></h1>
                                <h4 style=""><?php echo $data['post_on']; ?></h4>
                            </div>
                    </div> 
        	</div>  
	   </a>   
        <?php  }?> 

<div class="col-lg-12" style=";margin-top: -20px;">
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
</div>
<?php include_once('footer.php')?>