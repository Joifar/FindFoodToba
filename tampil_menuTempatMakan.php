<body>
<div class="col-lg-12">
<?php
$id_tempatmakan=$_GET['id_tempatmakan'];
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

    $result = mysqli_query($mysqli,"SELECT * FROM `makanans` where id_tempatmakan = '".id_tempatmakan."' LIMIT $offset, $total_records_per_page");

   	while($data = mysqli_fetch_array($result)){
     
        ?> 
        <div class="col-sm-4" style="margin-left: -29px;">
        <div class="col-sg-12">
            <img src="img_menuMakan/<?php echo $data['gambar'];?>" style="border:1px solid #000;  width:230px; height:230px;">
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
