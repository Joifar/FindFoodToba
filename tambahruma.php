
        <div id="TempatMakan-section" style="margin-top : 180px; margin-left: 60px; margin-right: 60px; border-radius: 15px;">
            <div class="container"> <!-- Container -->
                <div class="section-title text-left">
                    <h2>Sarankan Tempat Makan</h2>
                </div>
                <div class="row">
                    <div class="portfolio-items">
                        <div class="col-lg-12">
                        <form action="sarankan_proses.php" enctype="multipart/form-data" method="post">
                        <div class = "">
                            <input type="file" name="gambar" required/>
                        </div>
                            <input type="text" placeholder="Nama Tempat Makan.." name="namatempatmakan"/>
  
                        <br>
                            <input type="text" placeholder="Nama Pemilik.." name="namapemilik" />
                    
                        <br>
                            <input type="text" placeholder="alamat.." name="alamat">
                       
                        <br>
                             <input type="text" placeholder="Jam buka" name="jamoperasi" s/>
                        
                        
                            <textarea placeholder="Deskripsikan tempat makan anda.." name="deskripsi" ></textarea>
                        <div class="col-sm-12">
                                    <input class="btn btn-success" type="submit" name="submit" id="submit" value="Daftar">
                                </div> 
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
