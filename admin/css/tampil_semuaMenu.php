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
        <title>Tampil Menu</title>
    </head>
    <body>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="tampil_semuaMenu.php.php">Daftar Makanan/Minuman</a>
                </li>
            </ol>
                <!-- Example DataTables Card-->
            <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i>  Daftar Makanan/Minuman</div>
            <div class="card-body">
            <div class="table-responsive">
                <a href="formMenuAdmin.php">Tambah Data</a><br><br>  
        <table width="100%">  
            <tr>    
                <th>Gambar</th>    
                <th>Nama Menu Makanan</th>  
                <th>Harga Menu Makanan</th> 
                <th>Deskripsi</th>
                <th colspan="3">Aksi</th> 
            </tr>
            <?php
                $query2 = "SELECT * FROM makanans"; 
                $sql = mysqli_query($mysqli, $query2);
                
                while($data = mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td><img src='../img_menuMakan/".$data['gambar']."' width='100' height='100'>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td> Rp ".$data['harga']."</td>";
                    echo "<td>".$data['deskripsi']."</td>";
                    echo "<td><a href='tampil_menuMakan.php?id_makanan=".$data['id_makanan']."'><strong>
                  <i class='fa fa-eye fa-fw'></i></strong></a></td>";
                    echo "<td><a href='form_ubahMenu.php?id_makanan=".$data['id_makanan']."'><strong>
                  <i class='fa fa-pencil-square-o fa-fw'></i></strong></a></td>";
                    echo "<td><a href='proses_hapus_menu.php?id_makanan=".$data['id_makanan']."'><strong>
                  <i class='fa fa-trash-o fa-fw'></i></strong></a></td>";
                    echo "</tr>";  
                }
            ?>
        </table>
        </div>
        </div>
       </div>
      </div>
    </div>
    </body>
</html>

<?php
    include 'footeradmin.php';
?>
