   <html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FIFO TOBA</title>
<meta name="description" content="">
<meta name="author" content="">
     <body>
     
    <div class="container">
        <div class="col-sm-12">
	<?php 
	include_once('function.php');
	 ?>
			 <?php
                $page= $_GET["page"];
                if($page=="" || $page=="1"){
                    $page1=0;
                }else{
                    $page1=($page*6)-6;
                }

                $query = "Select * from tempatmakans limit $page1,6"; 
                $sql = mysqli_query($mysqli, $query);
                $tot=mysqli_num_rows($sql);
                $tot/=6;
                $tot=ceil($tot); 
                for($i =1 ;$i <=$tot ;$i++){
                  echo '<a href="testpagination.php?page='.$i.'">'.$i.'</a>';
                }	
                echo 'tot '.$tot;      
                echo $tot.'<br>';
                $cek=0;
                while($data = mysqli_fetch_array($sql)){?>
                   <?php $cek++;?>
                <div class="col-md-12">
                    <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="img_tempatMakan/<?php echo $data['gambar']?>" style="width:190; height:160; margin-right: 0px;" alt="Card image cap">

                 <div class="card-body">
                   <p class="card-text"><?php echo $data['nama']?></p>
                 </div>
               </div>
              
                    
                </div>

                <?php }?>   
		</div>
	</div>
     </body>
     </html>