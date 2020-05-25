<?php include_once('autoload.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 980px;height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" >
         <!----------------------------------------------------------------------------->
            <div class="container-login100" ">
    <div class="wrap-login100">
      <div class="col-sm-9">
      </div>
      <div class="col-sm-3">
        <span class="title">
          Masuk
        </span>
      </div>
      <div class="card" >
        <div class="card-body cardb">
          <div class="login100-pic " data-tilt>
            <img src="img/logo.png" alt="IMG" style="margin-top: 120px">
        </div>
        </div>
      </div>
      <div class="card" style="border:3px;width:20rem">
        <div class="card-body ">
          <br>
          <form action="login_proses.php" method="post">
            <div class="wrap-input100 validate-input txt" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100" id="name" name="username" placeholder="Username">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input txt" data-validate = "Password is required">
                <input class="input100" id="password" type="password" name="password" placeholder="Password">
                <span class="focus-input100"></span>
            </div>
            <div class="col-sm-9 txt2">
                <br>Belum memiliki akun?<br>
                Mari
                <a href="register.php" >Daftar</a>
            </div>
            <button class="login100-form-btn txt" type="submit" name="login" id="login">
                Login
            </button>
          </form>
      </div>
    </div>
  </div>
  </div>
         <!----------------------------------------------------------------------------->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
