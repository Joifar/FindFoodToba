<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registrasi</title>
  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Daftar ke Find Food Toba <a href="index.php" target="_self" style="padding-left: 355px;">kembali</a></div>
      <div class="card-body">
        <form action="registrasi_proses.php" enctype="multipart/form-data" method="post">
        <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" id="username" name="username" type="text" aria-describedby="nameHelp" placeholder="Username..">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" aria-describedby="emailHelp" placeholder="Email..">
        </div>
        <div class="form-group">
            <label for="email">No Telepon</label>
            <input class="form-control" id="email" type="text" name="notelp" aria-describedby="emailHelp" placeholder="No Telp..">
        </div>
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                  <label for="email">Anda Sebagai : </label>
                  <select name="role" class="form-control">
                      <option value="2">Pengunjung</option>
                      <option value="3">Pemilik Tempat Makan</option>
                  </select>
              </div>
          </div>
        </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password..">
              </div>
              <div class="col-md-6">
                <label for="konfirmasi_pass">Confirm password</label>
                <input class="form-control" id="konfirmasi_pass" name="konfirmasi_pass" type="password" placeholder="Konfirmasi Password..">
              </div>
            </div>
          </div>
        <div class="form-group">
            <label for="img_user">Foto</label>
            <input type="file" class="form-control" id="img_user" name="img_user" placeholder="Email..">
        </div>    
          <input type="submit" name="registrasi" id="registrasi" class="btn btn-primary btn-block" value="Register">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Sudah Punya Akun?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
