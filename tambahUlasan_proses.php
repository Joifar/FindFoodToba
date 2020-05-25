<link href="assets/css/bootstrap-tagsinput.css" rel="stylesheet">
<?php
    include_once 'ajaxpro.php';
    if(isset($_POST['submit'])){
        if (!isset($_SESSION['username'])) {
            redirect ('index.php');
        }
        $username = $_SESSION['username'];
        $id_user = getUserId($username);
        $id = uniqid();
        $isi  = mysqli_real_escape_string($mysqli, trim($_POST['artikel']));
        $judul = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
//        $tags = explode(",", $_POST['tags']);
        $tanggal = date("Y-m-d H:i:s");
        $status_saran_artikel = "request";
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "img_artikel/".$gambar);
//        $tags = explode(",", mysqli_escape_string($mysqli, trim($_POST['tags'])));
        $subm = "INSERT INTO artikel (judul, id_user, gambar, artikel, post_on, status_saran_artikel) VALUES( '".$judul."', '".$id_user."', '".$gambar."', '".$isi."', '".$tanggal."', '".$status_saran_artikel."')";
        mysqli_query($mysqli, $subm);
        
        $tags = explode(",",$_POST['tags']);
            foreach($tags as $tag){
                $statement.="INSERT INTO tags SET name_tag = ".mysqli_real_escape_string($tag);
            }
            $mysqli->multi_query($statement);
//                    $subit = $mysqli->prepare("INSERT INTO tag_artikel VALUES(?,?)");
//                    if (mysqli_query($mysqli, $subit)) {
//                        $last_id = mysqli_insert_id($mysqli);
//                    }
//                    $subit->bindParam(1, $id);
//                    $subit->bindParam(2, $last_id);
//                    $subit->execute();
//            
            redirect('index.php');
            }

//        for ($x = 0; $x < count($tags); $x++){
//        $sql = "INSERT INTO `artikel` (`judul`, `id_user`, `artikel`, `tags`, `post_on`, `status_saran_artikel`)  "
//                . "VALUES('".$judul."', '".$id."', '".$isi."', '{$tags[x]}', '".$tanggal."', '".$status_saran_artikel."' )";
//        }
//        
//        mysqli_query($mysqli, $sql);
//        redirect('index.php');
//    }
?>