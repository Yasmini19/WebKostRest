<?php
  $this->load->view('header_p');
  require('conn/config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
      <br>
<br>
<div class="container ">
     <a href="<?php echo site_url('/Kost_p/create') ?>" class="btn btn-info my-3 shadow p-3 mb-5 bg-white rounded" ><span class="glyphicon glyphicon-plus"><font color="black">Add Kost</font></span></a>
     

   </div>
<br>

<main role="main" class="container">
<table class="table" back>
  <thead class="thead-dark">
    <tr>
      <th>ID Kost</th>
      <th>ID Pemilik</th>
      <th>Nama</th>
      <th>Jenis Kost</th>
      <th>Fasilitas</th>
      <th>Harga</th>
      <th>Alamat</th>
      <th>No Telp</th>
      <th>Stok</th>
      <th>Longitude</th>
      <th>Latitude</th>
      <th>Foto</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
    <?php foreach ($k_list as $key => $value): ?>
    <tr>
          <td><?php echo $value->id_kost ?></td>
          <td><?php echo $value->id_user ?></td>
          <td><?php echo $value->nama_kost ?></td>
          <td><?php echo $value->jenis_kost ?></td>
          <td><?php echo $value->fasilitas ?></td>
          <td><?php echo $value->harga ?></td>
          <td><?php echo $value->alamat_kost ?></td>
          <td><?php echo $value->no_tlp?></td>
          <td><?php echo $value->stok ?></td>
          <td><?php echo $value->latitude ?></td>
          <td><?php echo $value->longitude ?></td>
          <td><img src="<?php echo base_url()?>./assets/upload/<?php echo $value->foto?>" alt="" width=100 height=100></td>
         
          <td>
                <a href="<?php echo site_url("/Kost_p/updateData/".$value->id_kost) ?>" class="fa fa-pencil-square-o fa-2x" aria-hidden="true" ></a>

                <a href="<?php echo site_url("/Kost_p/deleteData/".$value->id_kost) ?>" class="fa fa-trash fa-2x" aria-hidden="true"></a>
                
          </td>
          
    </tr>
    <?php endforeach ?>
  </tbody>

</table>
</main>
   
</body>
</html>



