<?php
  $this->load->view('header_u');
?>

<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">Tentang Kami</h3>
        <span class="w3-sub"></span>
        <div class="wthree-services-bottom-grids">
            <div class="col-md-6 wthree-services-left">
                <img height="250" width="60" src="<?php echo base_url()?>assets/images/kost.png" alt="">
            </div>
            <div class="col-md-6 wthree-services-left first-w3l">
                <div class="wthree-services-right-top">
                    <h4>EKost Malang</h4>
                    <p>EKost Malang menyajikan informasi Kamar kosan, lengkap dengan fasilitas kost, harga kost, dan dekorasi kamar beserta foto desain kamar yang disesuaikan dengan kondisi sebenarnya. Setiap Rumah Kost yang ada di EKost Malang benar-benar kami datangi, kami verifikasi, kami seleksi dan kami ambil data langsung, termasuk kost yang didaftarkan oleh pemilik atau umum. EKost Malang kini juga telah ditambahkan berbagai info kosan dengan harga murah ataupun beberapa tipe kosan lain sesuai masukan dari pengguna EKost. </p>
                </div>
                <!--
                <div class="wthree-services-right-bottom">
                    <div class="services-right-bottom-bottom">
                        <div class="col-xs-1 services-bottom-icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-11 services-bottom-info">
                            <h5>Ruangan</h5>
                            <p>Terdapat 16 kamar tidur, 4 kamar mandi (atas & bawah), ruang tamu, ruang jemur dan dapur</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                -->
                <!--
                    <div class="services-right-bottom-bottom">
                        <div class="col-xs-1 services-bottom-icon">
                            <i class="fa fa-key" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-11 services-bottom-info">
                            <h5>Kunci</h5>
                            <p>Tiap member mendapatkan kunci dan akun untuk akses wifi masing-masing</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            -->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- services -->
<div id="services" class="services">
    <div class="container">
        <h3 class="w3l-title w3l">Pelayanan</h3>
        <span class="w3-sub"></span>
        <div class="services-w3ls-row">
            <div class="col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts" id="facilities">
                <span class="glyphicon glyphicon-home effect-1" aria-hidden="true" id="icon_fasilitas"></span>
                <h5>Terjamin</h5>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts" id="access">
                <span class="glyphicon glyphicon-map-marker effect-1" aria-hidden="true"></span>
                <h5>Mudah Diakses</h5>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts" id="regulation">
                <span class="glyphicon glyphicon-cog effect-1" aria-hidden="true"></span>
                <h5>Harga Sesuai</h5>
            </div>

            <div id="facilities_panel">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <br><br>
                    <b><h3>Kondisi</h3></b>
                    <br>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/kasur.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Kondisi Kamar Sesuai dengan Gambar</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/kipas.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Ukuran Kamar Tertera</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/lemari.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Perlengkapan Kamar Sesuai dengan Deskripsi</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                    <br><br>
                    <h3>Fasilitas Umum</h3>
                    <br><br>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/wifi.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Wifi (Kecepatan 10 Mbps)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/dapur.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Dapur (Gas disediakan pengelola)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/tv.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>TV</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/motor.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Parkiran Motor</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/cctv.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>2 CCTV</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/ruangtamu.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Ruang Tamu</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/pembersih.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Petugas Kebersihan</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/dispenser.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Disphenser (Disediakan Pengelola)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/kloset.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Kloset Duduk</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/shower.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Shower</p>
                        </div>
                    </div> --><!-- 
                    <p>-------------------------------------------------------------------</p> -->
                </div>
                <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                    <br><br>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <p>Keterangan : </p>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        <p>afubsdvuaifaskhdfkjahasjkfhqasdjkfhaweuifhkje</p>
                    </div>
                </div> -->
            </div>
            <div id="access_panel">
                <h3>EKost Malang</h3>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <br><br>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="access" src="<?php echo base_url()?>assets/images/icon/mall.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Tertera Pada Google Maps</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <br><br>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="access" src="<?php echo base_url()?>assets/images/icon/supermarket.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Kendaraan dapat Masuk</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="access" src="<?php echo base_url()?>assets/images/icon/mushola.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Terdapat Papan Nama Kost</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="access" src="<?php echo base_url()?>assets/images/icon/transportasi.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Transportasi (Dekat Halte, Terminal)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="access" src="<?php echo base_url()?>assets/images/icon/kampus.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Kampus (UNJ, BSI, STEI, Borobudur)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="access" src="<?php echo base_url()?>assets/images/icon/rumah_makan.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Rumah Makan, Cafe, dll</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div> -->
                <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                    <br><br>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <p>Keterangan : </p>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        <p>afubsdvuaifaskhdfkjahasjkfhqasdjkfhaweuifhkje</p>
                    </div>
                </div> -->
            </div>
            <div id="regulation_panel">
                <br><br><p></p>
                <b><h3>eKost Malang</h3></b>
                <br>
                <p>1. Harga bergantung pada lokasi kost</p>
                <p>2. Fasilitas Mempengaruhi Harga Kamar</p>
                <p>3. Setiap Kost Memiliki Peraturan yang Berbeda</p><!-- 
                <p>4. Untuk Beberapa Kost </p>
                <p>5. Dilarang membawa tamu laki-laki ke dalam kamar</p>
                <p>6. Jika ada keluarga/teman ingin menginap aan dikenakan biaya Rp 300.000/malam</p>
                <p>7. jika menggunakan alar dapur, mohon dicuci dan dikembalikan di tempat semula</p>
                <p>8. Jagalah ketertiban dan kebersihan kost untuk kepentingan bersama</p><br><br>
                <h3>Informasi tambahan:</h3><br>
                <p>1. Pompa air booster akan dinyalakan pukul 06.00 - 10.00 WIB dan 17.00 - 20.00 WIB</p>
                <p>2. Untuk penggunaan wifi masing-masing member mendapatkan 1 akun dan dapat digunakan pada 2 devices</p>
                <p>3. Kami menyediakan air minum galon dan gas</p>
                <p>4. Jaringan TV dan Internet menggunakan First Media</p>
                <p>5. Pembayaran kost harap dilakukan per tanggal masuk. Misal : masuk 10 juni, maka pembayaran selanjutnya 10 juli</p>
                <p>6. Parkir motor terbatas. Mohon dimaklumi dan saling pengertian antara sesama penghuni</p>
            </div> -->
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- team -->
<!--
<div class="team" id="team">
    <div class="team-dot">
        <div class="container">
            <div class="w3-agile-heading team-heading">
                <h3 class="w3l-title">Testimonial</h3>
                <span class="w3-sub"></span>
            </div>
            <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="assets/images/person_1.jpg" width="150" height="100" class="img-circle" alt="Cinque Terre">
              </div>
              <blockquote>

                <p>&ldquo;Software mudah digunakan(user firendly), dan terpercaya&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
              
            </div>
          </div>
      -->
          <!-- END col -->
          <!--
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="assets/images/person_2.jpg" width="150" height="100" class="img-circle" alt="Cinque Terre">
              </div>
              <blockquote>
                <p>&ldquo;Sangat cocok untuk management usaha rumah kost&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>
          </div>
      -->
          <!-- END col -->
<!--
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="assets/images/person_3.jpg" width="150" height="100" class="img-circle" alt="Cinque Terre">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>
          </div>
      -->
                <!-- <div class="col-md-3 col-sm-3 col-xs-6 agileits-team-grid">
                    <div class="team-info">
                        <img src="<?php echo base_url()?>assets/images/t4.jpg" alt="">
                        <div class="team-caption">
                            <h4>Agus</h4>
                            <p>Broker</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery -->
<div id="gallery" class="gallery">
    <div class="container">
        <h3 class="w3l-title">Galeri</h3>
        <span class="w3-sub"></span>
    </div>

    <div class="agileinfo-gallery-row">
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/4.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/4.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Kost Sonnya Klojen Malang </h4>
                  <p></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/5.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/5.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Kost Daniel's House Lowokwaru Malang</h4>
                  <p></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/6.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/6.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Kost Putri Hamid Rusdi Malang </h4>
                  <p></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/7.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/7.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Kost Putri Bj999 Type D Lowokwaru Malang </h4>
                  <p></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/kostPriaUB.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/kostPriaUB.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Kost</h4>
                  <p></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/10.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/10.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Dapur </h4>
                  <p>Tersedia peralatan dapur dan gas </p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/8.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/8.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>kost</h4>
                  <p></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/kost/9.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/kost/9.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4></h4>
                  <p></p>
                </div>
            </a>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- <div class="seemore">
    	<a href="<?php echo base_url('c_user/display'); ?>/<?php echo 'gallery'; ?>" class="btn btn-info btn-md">Lihat detail <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div> -->
</div>
<!-- //gallery -->
<!-- contact -->
<div class="agileits_w3layouts_contact" id="contact">
    <div class="container">
        <h3 class="w3l-title">Kontak Kami</h3>
        <span class="w3-sub">Tulis Pesan</span>
        <div class="w3_mail_grids">
            <form action="#" method="post">
                <span class="input">
                    <input type="text" placeholder="Your Name" name="Email" required="">
                </span>
                <span class="input">
                    <input type="email" placeholder="Your Email" name="Email" required="">
                </span>
                <span class="input">
                    <input type="text" placeholder="Phone Number" name="Email" required="">
                </span>
                <textarea name="Message" placeholder="Message..." required=""></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
<!-- contact address-->
<div class="contact-row agileits-w3layouts">
    <div class="col-md-7 contact-w3lsright">
        <div class="col-xs-6 address-row">
            <div class="col-xs-2 address-left">
                <span class="glyphicon glyphicon-home" aria-hidden="true" style="color: black;"></span>
            </div>
            <div class="col-xs-10 address-right">
                <h5>Alamat</h5>
                <p>Malang</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-xs-6 address-row w3-agileits">
            <div class="col-xs-2 address-left">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 address-right">
                <h5>Email</h5>
                <p><a href="mailto:info@example.com"> EKostMalang@gmail.com </a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-xs-6 address-row">
            <div class="col-xs-2 address-left">
                <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 address-right">
                <h5>Telp</h5>
                <p>+62 123 456 7890</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-xs-6 address-row">
            <div class="col-xs-2 address-left">
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 address-right">
                <h5>Jam Kerja</h5>
                <p>Sen - Ming : 8:00 - 21:00</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-5 contact-w3lsleft map">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1DalBY8MuWTWkfVtY434Iord2hivG7TRM"></iframe>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //contact address-->
<!-- //contact -->

<?php
  $this->load->view('footer_u');
?>
