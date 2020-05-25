<?php
    include 'function.php';
    if (!isset($_SESSION['username'])) {
        redirect_to('index.php');
    }
    $username = $_SESSION['username'];
    $id = getUserId($username);
?>

<html>
    <head>
        <title>Form Ubah Saran</title>
    </head>
    <body>
        <h2>Ubah Saran Tempat Makan</h2>
        <?php
            $id_tempatmakan= $_GET['id_tempatmakan'];
            $query = "select * from tempatmakans where id_tempatmakan='".$id_tempatmakan."'";
            $sql = mysqli_query($mysqli, $query);
            $data = mysqli_fetch_array($sql);
        ?>
        <h2>Apakah data anda sudah sesuai? Silahkan Cek Dibawah ini.</h2>
<hr>
<div class="row">
            <div class="col-sm-9">
                <table>
                    <form method="post" action="proses_ubah_saran.php?id_tempatmakan=<?php echo $id_tempatmakan; ?>" enctype="multipart/form-data">
                    <tr>
                        <td>Nama Tempat Makan</td>
                        <td>:</td>    
                        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td>
                            <img src="img_tempatMakan/<?php echo $data['gambar'];?>" border='1'>
                            <br>
                            <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                            <input type="file" name="gambar" value="Upload foto baru">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>:</td>    
                        <td><input type="text" name="contact" value="<?php echo $data['contact']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <?php echo $data['status']; ?>
                            <br>
                            <input type="radio" name="status" value="aktif" > Aktif
                            <input type="radio" name="status" value="tidak aktif" > Tidak Aktif
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><textarea name="deskripsi"><?php echo $data['deskripsi']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Status Saran</td>
                        <td>:</td>
                        <td><?php echo $data['status_saran_tempatmakan']; ?></td>
                    </tr>
                </table>
                <hr>
                <input type="submit" value="Ubah">
                <a href="tampil_all_saran.php"><input type="button" value="Batal">
            </div>
        </div>
    </body>
</html>