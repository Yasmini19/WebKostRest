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
    <?php echo form_open_multipart('Kost_p/updateData/'.$this->uri->segment(3)); ?>
    <legend>Edit Data Kost</legend>
    <?php echo validation_errors(); ?>
    <div class="form-group">
      <label for="">Id User</label>
      <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $kost[0]->id_user?>">
    </div>
    <div class="form-group">
      <label for="">Nama Kost</label>
      <input type="text" class="form-control" name="nama_kost" id="nama_kost" value="<?php echo $kost[0]->nama_kost ?>">
    </div>
    <div class="form-group">
      <label for="">Jenis Kost</label>
      <input type="text" class="form-control" name="jenis_kost" id="jenis_kost" value="<?php echo $kost[0]->jenis_kost ?>">
    </div>
     <div class="form-group">
      <label for="">Fasilitas</label>
      <input type="text" class="form-control" name="fasilitas" id="fasilitas" value="<?php echo $kost[0]->fasilitas ?>">
    </div>
    <div class="form-group">
      <label for="">Harga</label>
      <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $kost[0]->harga ?>">
    </div>
    <div class="form-group">
      <label for="">Alamat</label>
      <input type="text" class="form-control" name="alamat_kost" id="alamat_kost" value="<?php echo $kost[0]->alamat_kost ?>">
    </div>
     <div class="form-group">
      <label for="">No Telp</label>
      <input type="text" class="form-control" name="no_tlp" id="no_tlp" value="<?php echo $kost[0]->no_tlp ?>">
    </div>

     <div class="form-group">
      <label for="">Stok</label>
      <input type="text" class="form-control" name="stok" id="stok" value="<?php echo $kost[0]->stok ?>">
    </div>
    
    <div class="form-group">
      <label for="">Latitude</label>
      <input type="text" class="form-control" name="latitude" id="latitude" value="<?php echo $kost[0]->latitude ?>">
    </div>
     <div class="form-group">
      <label for="">Longitude</label>
      <input type="text" class="form-control" name="longitude" id="longitude" value="<?php echo $kost[0]->longitude ?>">
    </div>
  
     

    <div class="form-group">
      <label for="">Foto</label>
      <br>
      <input type="file" name="foto" id="foto" size="20" value="<?php echo $kost[0]->foto ?>">
    </div>
    
      <br>
    <button type="submit" class="fa fa-paper-plane btn btn-success" aria-hidden="true" >Submit</button>
    <?php echo form_close(); ?>
  </div>
  </div>
     </div>
   </div>