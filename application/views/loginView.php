

  <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>EKost Malang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/login/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/login/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="<?php echo base_url();?>assets/login//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="<?php echo base_url();?>assets/login//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>EKost Malang</h1>
<div class="main-agileits">
<?php echo form_open('Login/cekLogin'); ?>
<!--form-stars-here-->
    <div class="form-w3-agile">
      <h2> login</h2>
      <?php echo validation_errors()?>
      <form action="#" method="post">
        <div class="form-sub-w3">
          <input type="text" id="username" name="username" placeholder="Username " required="" />
        <div class="icon-w3">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        </div>
        <div class="form-sub-w3">
          <input type="password" id="password" name="password" placeholder="Password" required="" />
        <div class="icon-w3">
          <i class="fa fa-unlock-alt" aria-hidden="true"></i>
        </div>
        </div>
        
        <div class="submit-w3l">
          <input type="submit" value="Login">
        </div>
        <?php echo form_close(); ?>
        <p class="p-bottom-w3ls">Are you new to EKost Malang ?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
      </form>
    </div>
<!--//form-ends-here-->
</div>


<div id="small-dialog1" class="mfp-hide">
          <div class="contact-form1">
                    <div class="contact-w3-agileits">
                    <?php echo form_open('Login/register'); ?>
                    <?php echo validation_errors()?>
                    <h3>Register Form</h3>
                      <div class="form-sub-w3ls">
                          <input placeholder="Nama" id="nama" name="nama" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                          <input placeholder="Alamat" id="alamat" name="alamat" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                          <input placeholder="Email" id="email" name="email" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                          <input placeholder="No Telepon" id="no_tlp" name="no_tlp" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                           <select class="form-control" id="level" name="level" required="">
                             <option selected="">Pilih Jenis Pendaftaran</option>
                             <option value="admin">Admin</option>
                             <option value="pemilik">Pemilik Kost</option>
                             <option value="penyewa">Penyewa</option>
                             <option value="rt">Ketua RT</option>
                           </select>
                          <div class="icon-agile">  
                          </div>
                        </div>
                        <br>
                        <div class="form-sub-w3ls">
                          <input placeholder="User Name" id="username" name="username" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </div>
                        </div>
                        
                        <div class="form-sub-w3ls">
                          <input placeholder="Password" id="password" name="password" type="password" required="">
                          <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                      <div class="login-check">
                       <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
                      </div>
                    <div class="submit-w3l">
                      <input type="submit" value="Register">
                    </div>
                    
                    <?php echo form_close(); ?>
          </div>  
        </div>

<!-- copyright -->
  
  <!-- //copyright --> 
  <script type="text/javascript" src="<?php echo base_url();?>assets/login/js/jquery-2.1.4.min.js"></script>
  <!-- pop-up-box -->  
    <script src="<?php echo base_url();?>assets/login/js/jquery.magnific-popup.js" type="text/javascript"></script>
  <!--//pop-up-box -->
  <script>
    $(document).ready(function() {
    $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });
                                    
    });
  </script>
</body>
</html>