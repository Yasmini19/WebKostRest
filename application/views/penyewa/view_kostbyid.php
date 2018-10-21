<?php
  $this->load->view('penyewa/header_penyewa.php');
?>

<br>
<br>
<!--<div id="map" style="width:100%; height:500px"></div>-->
<div class="container">
<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="well well-sm">
            <center><h2><?php echo $data['nama_kost']?></h2></center>
            <p align="right"><b>Harga : <?php echo $data['harga']?></b></p>
            <p align="left"><b>Alamat : <?php echo $data['alamat_kost']?></b></p>
            <hr>
            <center>
              <img src="<?php echo base_url().'assets/images/kost'.$data['foto'];?>" width="200px" height="200px">
            </center>
            <br>
            <p>
              <?php echo $data['fasilitas']; ?>
            </p>
        </div>
      </div>
    </div>

    <br>
<br>
<?php
  $this->load->view('footer_u');
?>
</body>
</html>