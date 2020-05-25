<?php
    include 'header2.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>

<html>
    <head>
        <title>Tampil Saran</title>
    </head>
    <body>
        <div id="TempatMakan-section" style="margin-top : 180px; margin-left: 100px; margin-right: 120px; border-radius: 15px;">
            <div class="container"> <!-- Container -->
            <div class="section-title text-left">
               <h2>Profil Anda</h2> 
            </div>
            <div class="row" style="margin-top: 60px;">
            <div class="col-sm-12">
                <?php
                    $query = "select * from users where id='".$id."'";
                    $sql = mysqli_query($mysqli, $query);
                    $data = mysqli_fetch_array($sql);
                ?>
                <div class="form-row">
                <div class="col-sm-3">
                <img src="img_user/<?php echo $data['img_user'];?>"style="width: 150px; height: 150px; border: 2px solid #000;">
                </div>
                <div class="col-sm-8">
                    <h4 style="margin-top: 18px;">Nama : <?php echo $data['username']; ?></h4>
                <br >
                    <h4>Email : <?php echo $data['email']; ?></h4>
                <br >
                    <h4>No Telp : <?php echo $data['notelp']; ?></h4>
                </div>
                </div>
                </div>
            </div>
        </div>
            
            </div>
        </div>
    </body>
</html>

<?php
    include 'footer.php';
?>