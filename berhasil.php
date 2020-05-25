<?php
    include("function.php");
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $id = getUserId($username);
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.circle { 
   width: 30px;
   height: 30px;
   background: #2EE713; 
   -moz-border-radius: 50%; 
   -webkit-border-radius: 50%; 
   border-radius: 50%;
}
</style>
    </head>
    <body style ="text-align: center;">
        <?php
              if(isset($_SESSION['username'])){
                  echo '<ul>'
                        . '<li class = "dropdown"> '
                        . '<a href="#" class= "dropbtn">'
                          . '<iframe class="circle" img src="img_tempatMakan/'.$data['gambar'].'" frameborder="0" allowfullscreen></iframe>'
                          . 'Horas <i><b>'.$_SESSION['username'].'</i></b></a>'
                          . '<div class = "dropdown-content">'
                          . '<a href="profil.php?id='.$id.'" target="_self"> Profil saya </a>'
                          . '<a href="href="logout.php" target="_self"> Log Out</a>'
                          . '</div>'
                          . '</li>'
                        . '</ul>';
//                echo '<li class="nav-item">
//                      <a class="nav-link" href="profil.php?id='.$id.'" target="_self">Profil Saya</a>
//                      </li>';
//                echo ' <a class="nav-link" href="logout.php" target="_self">'.$_SESSION['username'].' (Logout)</a>';
              }else{
                echo '<li class="nav-item">
                      <a class="nav-link" href="registrasi.php" target="_self">Registrasi </a>
                      </li>';
                echo '<li class="nav-item">
                      <a class="nav-link" href="login.php" target="_self">Login</a>
                      </li>';
              }
            echo ' || kembali ke index? <a href = "index.php"> Index </a>';
            echo '<hr>';
            echo '<a href="berhasil.php"> Home</a> || <a href="ulasan.php">Ulasan</a> || <a href="tempatMakan.php">Tempat Makan</a> || <a href="sarankanTempatMakan.php">sarankan tempat makan<a/> || <a href="tampil_all_saran.php">Log menyarankan tempat makan</a>'
        ?>
    </body>
</html>