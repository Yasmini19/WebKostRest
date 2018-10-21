<?php
  $this->load->view('header_p');
?>

<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">Pesan Kamar</h3>
        <span class="w3-sub"></span>
        <div class="wthree-services-bottom-grids">
            <!-- multistep form -->
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                  <h3><li class="active">Biodata Diri</li>
                  <li>Latar</li>
                  <li>Kerabat</li>
                  <li>Data</li></h3>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h1 class="logo"><a class="logo" href=""><span>E</span>Kost Malang</a></h1>
                    <h2 class="fs-title"></h2>
                    <h3 class="fs-subtitle">Biodata Diri</h3>
                    <input type="text" name="firstname" placeholder="Nama Depan" required />
                    <input type="text" name="lastname" placeholder="Nama Belakang" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="text" name="no_identitas" placeholder="No. KTP/NIK" />
                    <input type="text" name="no_hp" placeholder="No HP" />
                    <textarea name="alamat" placeholder="Alamat asal"></textarea>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="latar_belakang">
                    <h1 class="logo"><a class="logo" href=""><span>E</span>Kost Malang</a></h1>
                    <h2 class="fs-title"></h2>
                    <h3 class="fs-subtitle">Latar</h3>
                    <select class="pekerjaan" id="pekerjaan" name="pekerjaan" onChange="pilihan();" >    
                        <option value="null" hidden>Pekerjaan</option>
                        <option value="mahasiswi">Mahasiswi</option>
                        <option value="karyawati">Karyawati</option>
                        <option value="lainnya">Lainnya</option>         
                    </select>
                    <div id="mahasiswi"></div>
                    <div id="karyawati"></div>
                    <div id="lainnya"></div>
                    <script type="text/javascript">
                        function pilihan(){
                            var pekerjaan = document.getElementById("pekerjaan");
                            if(pekerjaan.value == "mahasiswi"){
                                var induk = document.createElement('div');
                                induk.setAttribute('id','form_mahasiswi');
                                var element = document.getElementById("mahasiswi");
                                element.appendChild(induk);
                                var anak = document.getElementById('form_mahasiswi').innerHTML = 
                                "<input type='text' name='universitas' placeholder='Universitas'>"+
                                "<input type='text' name='jurusan' placeholder='Jurusan'>"+
                                "<input type='text' name='angkatan' placeholder='Angkatan'>";
                                if(document.getElementById('form_karyawati')){
                                    karyawati.removeChild(form_karyawati);
                                }
                                if(document.getElementById('form_lainnya')){
                                    lainnya.removeChild(form_lainnya);
                                }
                            }
                            else if(pekerjaan.value == "karyawati"){
                                var induk = document.createElement('div');
                                induk.setAttribute('id','form_karyawati');
                                var element = document.getElementById("karyawati");
                                element.appendChild(induk);
                                var anak = document.getElementById('form_karyawati').innerHTML = 
                                "<input type='text' name='perusahaan' placeholder='Nama Perusahaan'>"+
                                "<input type='text' name='jabatan' placeholder='Jabatan'>";
                                if(document.getElementById('form_mahasiswi')){
                                    mahasiswi.removeChild(form_mahasiswi);
                                }
                                if(document.getElementById('form_lainnya')){
                                    lainnya.removeChild(form_lainnya);
                                }
                            }
                            else if(pekerjaan.value == "lainnya"){
                                var induk = document.createElement('div');
                                induk.setAttribute('id','form_lainnya');
                                var element = document.getElementById("lainnya");
                                element.appendChild(induk);
                                var anak = document.getElementById('form_lainnya').innerHTML = 
                                "<input type='text' name='pekerjaan2' placeholder='Pekerjaan'>";
                                if(document.getElementById('form_mahasiswi')){
                                    mahasiswi.removeChild(form_mahasiswi);
                                }
                                if(document.getElementById('form_karyawati')){
                                    karyawati.removeChild(form_karyawati);
                                }
                            }
                        }
                    </script>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h1 class="logo"><a class="logo" href=""><span>E</span>Kost Malang</a></h1>
                    <h2 class="fs-title"></h2>
                    <h3 class="fs-subtitle">Kerabat yang dapat dihubungi</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nama_kerabat1" placeholder="Nama Kerabat 1"/>
                            <select class="hubungan1" name="hubungan1">    
                                <option value="null" hidden>Pekerjaan</option>
                                <option value="orang Tua">Orang Tua</option>
                                <option value="saudara">Saudara</option>
                                <option value="teman">Teman</option>
                                <option value="pacar">Pacar</option> 
                                <option value="pacar">Lainnya</option>        
                            </select>
                            <input type="text" name="no_kerabat1" placeholder="No HP" />
                            <textarea name="alamat_kerabat1" placeholder="Address"></textarea>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nama_kerabat2" placeholder="Nama Kerabat 2" />
                            <select class="hubungan2" name="hubungan2">    
                                <option value="null" hidden>Pekerjaan</option>
                                <option value="orang Tua">Orang Tua</option>
                                <option value="saudara">Saudara</option>
                                <option value="teman">Teman</option>
                                <option value="pacar">Pacar</option> 
                                <option value="pacar">Lainnya</option>        
                            </select>
                            <input type="text" name="no_kerabat2" placeholder="No HP" />
                            <textarea name="alamat_kerabat2" placeholder="Address"></textarea>
                        </div>
                    </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h1 class="logo"><a class="logo" href=""><span>E</span>Kost Malang</a></h1>
                    <h2 class="fs-title"></h2>
                    <h3 class="fs-subtitle">Data</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="textlabel">Tanggal Masuk </label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="tgl_masuk" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="textlabel">Membawa Motor?</label>
                        </div>
                        <div class="col-md-1">
                            <input type="radio" name="jawaban" value="ya" aria-label="..." onclick="jawab('ya')">Ya
                        </div>
                        <div class="col-md-1">
                            <input type="radio" name="jawaban" value="tidak" aria-label="..." onclick="jawab('tidak')">Tidak
                        </div>
                    </div>
                    <div id="data"></div>
                    <script type="text/javascript">
                        function jawab(jawaban){
                        if(jawaban == "ya"){
                            var induk = document.createElement('div');
                            induk.setAttribute('id','info_motor');
                            var element = document.getElementById("data");
                            element.appendChild(induk);
                            var anak = document.getElementById('info_motor').innerHTML = 
                            "<input type='text' name='merek' placeholder='Merek Motor'>"+
                            "<input type='text' name='no_plat' placeholder='No Plat Motor'>";
                        }
                        else if(jawaban == "tidak"){
                            if(document.getElementById('data')){
                                data.removeChild(info_motor);
                            }
                        }
                    }
                    </script>
                    
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" href="" value="Submit" />
                </fieldset>
            </form>
              <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
              <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
              <script src="js/main.js"></script> -->
        </div>
    </div>
</div>

<?php
  $this->load->view('footer_u');
?>

<script type="text/javascript">
    $(document).ready(function() {     
        event.preventDefault();
        $('html,body').animate({scrollTop:$('#about').offset().top},1500);
    });
</script>