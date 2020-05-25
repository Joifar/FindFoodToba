<?php
    include 'function.php';

	$sql = "SELECT name_tag FROM tags

			WHERE name_tag LIKE '%".$_GET['query']."%'

			LIMIT 5"; 


	$result = $mysqli->query($sql);


	$json = [];

	while($row = $result->fetch_assoc()){

	     $json[] = $row['name_tag'];

	}


	echo json_encode($json);

?>