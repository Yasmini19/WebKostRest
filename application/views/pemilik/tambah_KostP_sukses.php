
<?php
  $this->load->view('header_p');
  require('conn/config.php');
?>
<br>
<br>
<br>
 <div class="container">
   <div class="jumbotron shadow p-3 mb-5 bg-white rounded">
     
      <?php 
        echo "Sukses Simpan Data";
        echo "";
        echo '<br>'.anchor('Kost_p', 'Masukkan Data Lagi'); 
      ?>
     </div>
   </div>