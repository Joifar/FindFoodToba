<?php
    include 'header2.php';
   if(!isset($_SESSION['username']))      //memastikan pengguna sudah login atau tidak
    {
        header("Location:login.php");
    }
     if (isset($_GET['id'])) {
         $username = $_SESSION['username'];

        // Get the user id
        $id = getUserId($username);
    } 
?>

 <header class="text-center" >
    <div class="intro-text1">
    </div>
</header>
<div class="container-fluid" style="background-color: #fff;">
   <div class="col-lg-12">
       <div class="text-left" style="margin-bottom: 50px;margin-top: 50px;">
          <h2>Sarankan Tempat Makan </h2>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #fff">
    <div class="col-lg-12"> 
    <form action="sarankan_proses.php" enctype="multipart/form-data" method="post">
       <div class="col-lg-4">
        <img src="img_web/photo-icon.png" style="width: 230px; height: 230px;">
        <div class="form-group" >
            <input class="form-control" type="file" >        
        </div>
        </div>
        <div class="col-lg-5">
        <div class="form-group">       
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Tempat Makan">
        </div>
        <div class="form-group">       
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Pemilik">
        </div>
       <div class="form-group">       
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
        </div>
       <div class="form-group">
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="No telp">
        </div>
       <div class="col-sm-4" style="margin-left: -15px;">
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jam Buka">
      </div>
        </div>
      <div class="col-sm-4">
       <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jam tutup">
       </div>          
      </div>
      <div class="form-group">
            <textarea type="password" class="form-control" placeholder="Deskripsi Rumah Makan">
            </textarea>
      </div>     
      <div class="checkbox">
            <input type="checkbox"> Check me out
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>
    
<?php
include 'footer.php';
?>

