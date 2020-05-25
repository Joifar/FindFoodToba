<?php
include("function.php");
ob_start();

if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        // $password = $_SESSION['password'];

        // Get the user id
        $id = getUserId($username);
      }

      ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FIFO TOBA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="css/card.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" charset="utf-8"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/tokenfield-typeahead.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" charset="utf-8"></script>
<!--------------------------------------->


</head>
<body>
<nav id="menu" class="navbar navbar-default navbar-fixed-top nav1" style="
     background:-webkit-linear-gradient(top,#FFDB4B 0%,#E2AF6D 75%);
     background:-moz-linear-gradient(top,#FFDB4B 0%,#E2AF6D 75%);
     background:-o-linear-gradient(top,#FFDB4B 0%,#E2AF6D 75%);
     background:-ms-linear-gradient(top,#FFDB4B 0%,#E2AF6D 75%); 
     filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F5E021',endColorstr='#E2AF6D',GradientType=0);">
  <div class="container">    
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> </button>
      <a href="index.php"><img src="img_web/logo.png" style="width: 84px; height: 52px; margin-top: 5px;"></a> 
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse txt2" id="">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php" class="page-scroll">Home</a></li>
          <li><a href="tampil_all_ulasan.php" class="Ulasan-scroll">Artikel</a></li>
        
        <?php
            if(isset($_SESSION['username'])){
        ?>
            <li><a href="sarankanTempatMakan.php">Sarankan Tempat Makan</a></li>
        <?php
            }
        ?>
        <?php
              if(isset($_SESSION['username'])){ 
                echo    '<li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Horas, '.$_SESSION['username'].' <b class="caret"></b>
                        </a>
                        <ul  class="dropdown-menu dropdown-style">
                        <li>
                            <a href="ProfilUser.php?id='.$id.'" target="_self">Profil Saya</a>
                        </li>
                        <li>
                            <a href="logsaran.php?id='.$id.'" target="_self">Log Saran Tempat Makan    </a>
                        </li>';
                echo    '<li>
                            <a href="logout.php" target="_self">Log out</a>
                        </li>
                        </ul>
                        </li>';
              }
              else{
                echo '<li class="nav-item">
                      <a class="nav-link" href="registrasi.php" target="_self">Registrasi </a>
                      </li>';
                echo '<li class="nav-item">
                      <a class="nav-link" href="login.php" target="_self">Login</a>
                      </li>';
              }
            ?>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
   <!-- ==========================================-->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1> Find Food Toba</h1>
    <br>
    <div class="container-fluid">   
    <!-- Brand and toggle get grouped for better mobile display -->
  <!-- /.container-fluid --> 
</div>
</div>
</header>
</body>
</html>