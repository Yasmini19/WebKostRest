<?php
  $this->load->view('header_p');
  require('conn/config.php');
?>

<br>
<br>

<div class="container">
   <div class="jumbotron shadow p-3 mb-5 bg-blue rounded">
     <div class="container">
  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <h3>Profil Pemilik</h3>
     <br>
     <h5>Username : <?php echo $data->username; ?> </h5>
     <br>
     <h5>Email : <?php echo $data->email; ?></h5>
     <br>
     <h5>Nama  : <?php echo $data->nama; ?></h5>
     <br>
     <h5>Alamat : <?php echo $data->alamat; ?></h5>
     <br>
     <h5>No Telp : <?php echo $data->no_tlp; ?></h5>
 </div>
</div>
    </div>
</div>