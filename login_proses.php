<?php   
    include("function.php");
    if(isset($_POST['login']))
    {
	// session_start();
	$username = trim($_POST['username']);
	$password =  trim($_POST['password']);

	$q = "SELECT * FROM users WHERE username= '$username'";
	$rs = mysqli_query($mysqli,$q);
	$numRows = mysqli_num_rows($rs);
	if($numRows == 1)
	{
        $row = mysqli_fetch_assoc($rs);
            if($password == $row['password']){
                $_SESSION['username'] = $username;
		$_SESSION['role'] = $row['role'];
		if (isset($_SESSION['role'])) {
                    $roles = $_SESSION['role'];
                    if ($roles == 1) {
			redirect('admin/index.php');
			exit;
                    }
                    elseif ($roles == 2) {
                        redirect('index.php');
			exit;
                    }
                    elseif ($roles == 3) {
                        redirect('indexPemilikTempatMakan.php');
			exit;
                    }
		}
            }
            else
            {
                redirect('./login.php');
            }
        }
} 

?>
