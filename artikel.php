<?php
    include 'header2.php';
?>

<html>
    <head>
        <title>Lihat Tempat Makan</title>
    </head>
    <body>
    <div id="TempatMakan-section" style="margin-top : 180px; border-radius: 15px;">
    <div class="container"> <!-- Container -->
        <div class="row" style="margin-top: 20px;">
             <?php
            $id_artikel= $_GET['id_artikel'];
            $query = "SELECT * FROM artikel ";
                $query .= "LEFT JOIN users ON artikel.id_user = users.id WHERE id_artikel='".$id_artikel."'";
		$result = mysqli_query($mysqli,$query);
           	if(mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_array($result)) {
                        extract($row);
                    $user= $row['id_user'];
                    $topik = $row['judul']; 
        	    $deskripsi = $row['artikel'];
                    $tgl = $row['post_on'];
                    
                $query2 = "SELECT * FROM users WHERE id='".$user."'";
                    $sql2 = mysqli_query($mysqli, $query2);
                    $row2 = mysqli_fetch_array($sql2);
                        echo "<h3>Author : <a href='profil.php?id_user=".$user."'>".$row2['username']."</a></h3>";
                        echo "<h3>Tanggal di Post : $tgl</h3>"
                                . "<br>";
                        echo "$deskripsi";
                    }
                }
            ?>
        </div>
	</div>
	</div>
    </div>
    </body>
</html>
<?php
	include 'footer.php';
?>
