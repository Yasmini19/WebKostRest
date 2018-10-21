<?php
  $this->load->view('header_p');
  require('conn/config.php');
?>

<br>
<br>

<div class="container">
   <div class="jumbotron shadow p-3 mb-5 bg-blue rounded">
     
     <h3>Selamat Datang</h3>
     <br>
     <h5>hai, <?php echo $this->session->userdata('logged_in')['username']?> selamat datang dihalaman administrator</h5>
     <br>
     <h5>Silahkan klik menu pilihan yang berada di atas sebelah kiri untuk mengelola konten website anda.</h5>

    </div>
</div>

