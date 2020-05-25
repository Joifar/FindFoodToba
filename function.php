<?php
	session_start();
        $db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'fifotoba';
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

        
	function secure($str,$sqlHandle)
	{
		$secured = strip_tags($str);
		$secured = htmlspecialchars($secured);
		$secured = mysqli_real_escape_string($sqlHandle,$secured);

		return $secured;
	}
	function getUserId($username)
    {
        global $mysqli;

        $query = "SELECT id FROM users WHERE username='$username'";
        $query_run = mysqli_query($mysqli, $query);
        $fetched_id = mysqli_fetch_array($query_run);

        // Get the id
        $id = $fetched_id['id'];

        return $id;
    }

	function redirect($_location) {
			header('Location: ' . $_location);
	}

	function lihatmail($url, $link) {
    	echo('<a href ="' . $url . '">' . $link . '</a>');
	}



?>