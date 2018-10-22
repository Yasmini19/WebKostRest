<?php
  $this->load->view('header_p');
  
?>

<br>
<br>
<br>

<div class="container">
   <div class="jumbotron shadow p-3 mb-5 bg-blue rounded">

<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php echo form_open_multipart('Kost_p/create'); ?>
    <legend>Tambah Data Kost</legend>
    <?php echo validation_errors(); ?>
    <div class="form-group">
        <label for="">Id User</label>
        <input type="text" class="form-control" name="id_user" placeholder="Input field">
        <br>
        <label for="">Nama Kost</label>
        <input type="text" class="form-control" name="nama_kost" placeholder="Input field">
        <br>
        <!--
        <label for="">Jenis Kost</label> <br>
          <input type="radio" name="status" value="Laki-laki" required> Laki-laki 
          <input type="radio" name="status" value="Perempuan" required> Perempuan
        <br>
    	-->
    	<label for="">Jenis Kost</label>
    	<input type="text" class="form-control" name="jenis_kost" placeholder="Input field">
        <br>
         <label for="">Fasilitas</label>
        <textarea class="form-control" name="fasilitas"></textarea>
        <br>
         <label for="">Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="input field">
        <br>
        <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat_kost" placeholder="input field">
        <br>
        <label for="">Stok</label>
        <input type="text" class="form-control" name="stok" placeholder="input field">
        <br>

        <label for="">No Telp</label>
        <input type="text" class="form-control" name="no_tlp" placeholder="input field">

        <label for="">Longitude</label>
        <input type="text" class="form-control" name="longitude" placeholder="input field">
        <br>
        <label for="">Latitude</label>
        <input type="text" class="form-control" name="latitude" placeholder="input field">
        <br>
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
      <br>
    <button type="submit" class=" fa fa-paper-plane btn btn-primary" aria-hidden="true" >Submit</button>
    <?php echo form_close(); ?>
  </div>
  </div>
     </div>
   </div>