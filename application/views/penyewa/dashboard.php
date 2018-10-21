<?php
  $this->load->view('penyewa/header_penyewa.php');
?>

<br>
<br>
<!--<div id="map" style="width:100%; height:500px"></div>-->
<div class="container">
	
	<!-- /search -->
	<div class="row">
		<div class="col-md-12">
		<?php foreach ($kost as $key) :
      ?>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4" style="width: 20rem;">
            <img class="card-img-top" src="<?php echo base_url().'assets/images/kost/'.$key->foto;?>" height="200px" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><b><?php echo $key->nama_kost; ?></b></h5> <hr>
                <p class="card-text">
                  Rp. <?php echo $key->harga; ?> / bulan.
                </p>
                <div class="btn-group">
                  <a href="<?php echo base_url().'DashboardPenyewa/view/'.$key->id_kost;?>" class="btn btn-outline-warning">Detail</a>
                <a href="#" class="btn btn-outline-danger">Booking</a>
                </div>
              </div>
            </div>
          </div> 
          <?php endforeach;?>
		</div>
	</div>
</div>
<br>
<br>
<?php
  $this->load->view('footer_u');
?>
