<!DOCTYPE html>
<html lang="en">
<head>
    <title>EKost Malang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
	<link rel="stylesheet" href="<?php echo site_url()?>assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/reset.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/style2.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/font-awesome.css">
    <link href="<?php echo site_url()?>assets/css/simplelightbox.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
    <link rel="icon" type="png" href="<?php echo site_url()?>assets/images/kost.png">

     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo site_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo site_url()?>assets/js/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $("#facilities").click(function(){
                $("#regulation_panel").slideUp("fast");
                $(".glyphicon-cog").css("color","white");
                $("#access_panel").slideUp("fast");
                $(".glyphicon-map-marker").css("color","white");
                $("#facilities_panel").slideToggle("slow");
                $("#icon_fasilitas").css("color","black");
            });
            $("#regulation").click(function(){
                $("#access_panel").slideUp("fast");
                $(".glyphicon-map-marker").css("color","white");
                $("#facilities_panel").slideUp("fast");
                $("#icon_fasilitas").css("color","white");
                $("#regulation_panel").slideToggle("slow");
                $(".glyphicon-cog").css("color","black");
            });
            $("#access").click(function(){
                $("#facilities_panel").slideUp("fast");
                $("#icon_fasilitas").css("color","white");
                $("#regulation_panel").slideUp("fast");
                $(".glyphicon-cog").css("color","white");
                $("#access_panel").slideToggle("slow");
                $(".glyphicon-map-marker").css("color","black");
            });
        // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1500, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
                });
            });

    </script>
</head>
<body>
    <div class="Main-agile">
    <!-- banner -->
        <div id="home" class="w3ls-banner">
            <!-- banner-text -->
            <div class="w3layouts-banner-top">
                <div class="container">
                    <div class="agileits-banner-info">
                        <span>Anda Mencari Kost Yang</span>
                        <div class="rw-words rw-words-1">
                            <span>Nyaman?</span>
                            <span>Akses Mudah?</span>
                            <span>Terjangkau?</span>
                            <span>Layanan Oke?</span>
                        </div>
                        <!--
                        <p></p>
                        <div class="agileits_w3layouts_more menu__item">
                            <a href="<?php echo base_url('c_user/display'); ?>/<?php echo 'booking'; ?>" class="menu__link">Pesan Kamar <span class="glyphicon glyphicon-menu-right" style="font-size: 12px;"></span></a>
                        </div>
                -->
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
    <!-- header -->
    <div class="header-w3layouts">
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Ekost </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="logo" href="<?php echo base_url('c_user'); ?>"><span>E</span>Kost Malang</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="menu"><a href="<?php echo base_url('c_user'); ?>">Home</a></li>

                   

                    <li><a href="<?php echo base_url('Login/logout'); ?>" class="btn btn-info btn-xs">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!--
        <div class="w3ls_search">
            <div class="cd-main-header">
                <ul class="cd-header-buttons">
                    <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                </ul>
                --> <!-- cd-header-buttons -->
                
            </div>

            <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="Click enter after typing..." required="">
                </form>
            </div>
        </div>
    </div>

    <!-- //header -->
    
