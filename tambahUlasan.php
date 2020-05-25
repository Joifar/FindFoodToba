    <?php
    include 'header2.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Ulasan</title>
        <script type="text/javascript" src="ckeditor/ckeditor.js" language="JavaScript"></script> 
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  



</head>
<body>
    <div id="contact-section" style="margin-top : 180px; margin-left: 80px; padding-left: 47px; margin-right: 90px; border-radius: 15px;">
        <div class="container"> <!-- Container -->
            <div class="intro-textArtikel text-left">
                Ekspresikan perasaan Anda untuk kuliner Batak
            </div>
            <div class="row">
                <form action="tambahUlasan_proses.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <div class="col-sm-12"><input type="text" class="form-control" name="judul" style="margin-top: 30px; margin-bottom: 30px; border: 1px solid #000;" id="judul" placeholder="Judul.." required/></textarea></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sg-12" style="margin-left: 55px;">
                        Tambahkan Gambar yang Mewakilkan Artikel Anda :
                        <input type="file" name="gambar" id="gambar" required/>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-10">
			<label style="margin-right: 10px;">Tambahkan Tag</label>
			<input type="text" style="border: 1px solid #000;" name="tag" id="tag" placeholder="Tags.." class="typeahead tm-input form-control tm-input-info" />
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10" style="margin-left: 40px; margin-top: 30px; margin-bottom: 30px;"><textarea class="ckeditor" name="artikel" id="ckeditor" required/> </textarea></div>
                    </div>
                    <input type="submit" class="submitArtikel" id="submit" name="submit" value="Kirim">
		</form>
            </div>
	</div>
    </div>
    <script type="text/javascript">

  $(document).ready(function() {

    var tagApi = $(".tm-input").tagsManager();


    jQuery(".typeahead").typeahead({

      name: 'tags',

      displayKey: 'name',

      source: function (query, process) {

        return $.get('ajaxpro.php', { query: query }, function (data) {

          data = $.parseJSON(data);

          return process(data);

        });

      },

      afterSelect :function (item){

        tagApi.tagsManager("pushTag", item);

      }

    });

  });

</script>
<div id="footer" style="background:-webkit-linear-gradient(top, #E2AF6D  0%,#FFDB4B 75%);
     background:-moz-linear-gradient(top,#E2AF6D 0%,#FFDB4B 75%);
     background:-o-linear-gradient(top,#E2AF6D 0%,#FFDB4B 75%);
     background:-ms-linear-gradient(top,#E2AF6D 0%,#FFDB4B 75%); 
     filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#E2AF6D',endColorstr='#F5E021',GradientType=0);">
  <div class="container">
    <div class="fnav">
       <p>Find Food Toba@2018. Designed by <a href="http://www.templatewire.com" rel="nofollow">Kelompok 8 KREN-PAP</a></p>
     </div>
  </div>
</div>
</body>

</html>
