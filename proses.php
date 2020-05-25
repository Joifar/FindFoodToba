<?php
    include_once 'ajaxpro.php';
    if(isset($_POST['submit'])){
        if (!isset($_SESSION['username'])) {
            redirect ('index.php');
        }
        $tags = explode(",",$_POST['tag']);
            for ($x = 0; $x < count($tags); $x++){
        $sql = "INSERT INTO `tags` (`id_tag`, `name_tag`)  "
                . "VALUES('', '$tags[$x]')";
        }
        $mysqli->multi_query($sql);
             redirect('index.php');
    }