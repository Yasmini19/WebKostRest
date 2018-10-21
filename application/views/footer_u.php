    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-4 amet-sed fir-w3l">
                    <div class="footer-nav">
                        <ul>
                            <li><a class="menu__link" href="<?php echo base_url('c_user'); ?>">Home</a></li>
                            <li><a class="menu__link" href="#about">Tentang</a></li>
                            <li><a class="menu__link" href="#services">Pelayanan</a></li>
                            <li><a class="menu__link" href="#gallery">Galeri</a></li>
                            <li><a class="menu__link" href="#contact">Kontak</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 amet-sed amet-medium">
                    <h2><a class="logo" href="<?php echo base_url('c_member'); ?>">EKost Malang</a></h2>
                    <div class="ag-w3-3">
                        <a href="#home" class="scroll"><i class="fa fa-angle-up" aria-hidden="true"></i> Back to Top</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 amet-sed thi-w3l">
                    <div class="w3ls-social-icons-2">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                    </div>
                    <!-- <div class="support">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Enter email...." required="">
                            <input type="submit" name="submit" value="SUBMIT" class="botton">
                        </form>
                    </div> -->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- copy right -->
    <p class="footer-class">© 2017 Kost Malang.
        <!-- Design by  <a href="https://www.instagram.com/hugo.iman/" target="_blank">Hugo Iman</a> -->
    </p>
    <!-- //copy right -->
    <!-- //footer -->

    <!-- js-scripts -->
    <!-- js -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->
    <!-- Flexslider-js for-testimonials -->
    <script type="text/javascript">
    $(window).load(function() {
    $("#flexiselDemo1").flexisel({
        visibleItems:1,
        animationSpeed: 1000,
        autoPlay:false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint:480,
                visibleItems: 1
            },
            landscape: {
                changePoint:640,
                visibleItems:1
            },
            tablet: {
                changePoint:768,
                visibleItems: 1
            }
        }
    });

    });

    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.flexisel.js"></script>
    <!-- //Flexslider-js for-testimonials -->
    <!-- Gallery -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/simple-lightbox.min.js"></script>
        <script>
            $(function(){
                var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:        ['&lsaquo;','&rsaquo;']});
            });
        </script>
    <!-- //Gallery -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- smooth scrolling -->
    <script src="<?php echo base_url()?>assets/js/SmoothScroll.min.js"></script>
    <!-- //smooth scrolling -->
    <!-- search-jQuery -->
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <!-- //search-jQuery -->

<!-- //js-scripts -->
</body>
</html>
