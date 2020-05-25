<?php
    include 'headeradmin.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>

<html>
    <head>
        <title>Form Ubah Menu</title>
    </head>
    <body>
        <?php
            $id_artikel= $_GET['id_artikel'];
            $query = "SELECT * FROM artikel ";
                $query .= "LEFT JOIN users ON artikel.id_user = users.id WHERE id_artikel='".$id_artikel."'";
		$result = mysqli_query($mysqli,$query);
           	if(mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_array($result)) {
                        extract($row);
                    $id_artikel=$row['id_artikel'];
                    $user= $row['id_user'];
                    $topik = $row['judul']; 
        	    $deskripsi = $row['artikel'];
                    $tgl = $row['post_on'];
                    
        ?>
    <hr>
    <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="tableArtikel.php">Daftar Artikel</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-body">
            <?php
                $query2 = "SELECT * FROM users WHERE id='".$user."'";
                    $sql2 = mysqli_query($mysqli, $query2);
                    $row2 = mysqli_fetch_array($sql2);
                        echo "<h3>Author : <a href='profil.php?id_user=".$user."'>".$row2['username']."</a></h3>";
                        echo "<h3>Tanggal di Post : $tgl</h3>"
                                . "<br>";
                        echo "<a href='tableArtikel.php'>Kembali</a>$deskripsi";
            ?>
        </div>
       </div>
    </div>
   </div>
    </body>
</html>
<?php
                    }
                }
    include 'footeradmin.php';
?>