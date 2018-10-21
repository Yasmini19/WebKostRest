<?php
  $this->load->view('header_m');
?>

<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">Tentang Kami</h3>
        <span class="w3-sub"></span>
        <div class="wthree-services-bottom-grids">
            <div class="col-md-6 wthree-services-left">
                <img src="<?php echo base_url()?>assets/images/img.jpg" alt="">
            </div>
            <div class="col-md-6 wthree-services-right first-w3l">
                <div class="wthree-services-right-top">
                    <h4>EKost Malang</h4>
                    <p>EKost Malang menyajikan informasi Kamar kosan, lengkap dengan fasilitas kost, harga kost, dan dekorasi kamar beserta foto desain kamar yang disesuaikan dengan kondisi sebenarnya. Setiap Rumah Kost yang ada di EKost Malang benar-benar kami datangi, kami verifikasi, kami seleksi dan kami ambil data langsung, termasuk kost yang didaftarkan oleh pemilik atau umum. </p>
                </div>
                <div class="wthree-services-right-bottom">
                    <div class="services-right-bottom-bottom">
                        <div class="col-xs-1 services-bottom-icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <!--<div class="col-xs-11 services-bottom-info">
                            <h5>Ruangan</h5>
                            <p>Terdapat 16 kamar tidur, 4 kamar mandi (atas & bawah), ruang tamu, ruang jemur dan dapur</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                -->
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
                <h5>Fasilitas</h5>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts" id="access">
                <span class="glyphicon glyphicon-map-marker effect-1" aria-hidden="true"></span>
                <h5>Akses</h5>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 services-grid agileits-w3layouts" id="regulation">
                <span class="glyphicon glyphicon-cog effect-1" aria-hidden="true"></span>
                <h5>Peraturan</h5>
            </div>
            <div id="facilities_panel">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <br><br>
                    <b><h3>Fasilitas Kamar</h3></b>
                    <br>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/kasur.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Kasur (Termasuk bantal + guling)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/kipas.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Kipas</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="facilities" src="<?php echo base_url()?>assets/images/icon/lemari.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Lemari (Jadi satu dengan dipan)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
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
                    </div>
                    <p>-------------------------------------------------------------------</p>
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
                <h3>Akses Kost Array</h3>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <br><br>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img class="access" src="<?php echo base_url()?>assets/images/icon/mall.png">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <br>
                            <p>Mall (Arion,Grand Pramuka)</p>
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
                            <p>Super Market (Indomart, Alfamart, Tiptop, Pasar Tradisional)</p>
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
                            <p>Mushola (Depan Rumah)</p>
                        </div>
                    </div>
                    <p>-------------------------------------------------------------------</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
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
            <div id="regulation_panel">
                <br><br><p></p>
                <b><h3>Peraturan Kost Array</h3></b>
                <br>
                <p>1. Tidak ada jam malam, setiap member mendapatkan kunci gembok masing-masing</p>
                <p>2. Keluar/masuk kost, pintu kost utama harap dikunci</p>
                <p>3. Mohon jaga dan simpan barang pribadi  di kamar masing-masing</p>
                <p>4. Apabila ada kehilangan barang, bukan tanggung jawab kami</p>
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
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- team -->
<section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
              
            </div>
          </div>
          <!-- END col -->
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="img/person_2.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>
          </div>
          <!-- END col -->

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="img/person_3.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>
          </div>
          <!-- END col -->
        </div>
      </div>
    </section>
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
            <a href="<?php echo base_url()?>assets/images/a.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/a.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Ruang Tamu Bawah </h4>
                  <p>Tersedia meja, kursi, tv</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/b.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/b.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Posisi Kamar </h4>
                  <p>4 di sisi kanan dan 4 di sisi kiri (berhadapan)</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/c.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/c.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Foto Kamar </h4>
                  <p>Dipan dan meja</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/d.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/d.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Ruang Jemur </h4>
                  <p>Terdapat dilantai 3</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/e.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/e.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Kamar Mandi </h4>
                  <p>Terdapat 4 : 2 di lt 1, 2 di lt 2</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/f.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/f.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Dapur </h4>
                  <p>Tersedia peralatan dapur dan gas </p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/g.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/g.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Foto Kamar </h4>
                  <p>Tersedia Kipas, Meja, Kasur</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
            <a href="<?php echo base_url()?>assets/images/h.jpg" class="imghvr-hinge-right figure">
                <img src="<?php echo base_url()?>assets/images/h.jpg" alt="" title="Assets  Image"/>
                <div class="agile-figcaption">
                  <h4>Ruang Tamu Atas</h4>
                  <p>Tersedia meja, kursi, tv</p>
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
                <p>Jl. Kayujati IV no 18a</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-xs-6 address-row w3-agileits">
            <div class="col-xs-2 address-left">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 address-right">
                <h5>Email</h5>
                <p><a href="mailto:info@example.com"> arraykost@gmail.com </a></p>
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
  $this->load->view('footer_m');
?>
