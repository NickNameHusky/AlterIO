<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ALTER IO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/swiper.css">

    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/aos.css">

    <link rel="stylesheet" href="<?= base_url();?>assetfrontend/css/style.css">
       <!-- Google fonts-->
       <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">ALTER IO</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              
            <li   ><a href="<?=base_url();?>">Home</a></li>
                <li>
                  <a  href="<?=base_url();?>gallery">Gallery</a>
                </li>
                <li class="active"><a href="<?=base_url();?>pricelist">Price List</a></li>
                <li><a href="<?=base_url();?>about">About</a></li>
                </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <a href="https://wa.widget.web.id/4ade76">
<img src="https://hantamo.com/free/whatsapp.svg" class="wabutton" alt="WhatsApp-Button">
</a>
<style>
.wabutton{
width:70px;
height:70px;
position:fixed;
bottom:20px;
right:20px;
z-index:100;
}
</style>
<div class ="flash-data" data-flashdata="<?= $this->session->flashdata('flash')?>"></div>
	<?php if ($this->session->flashdata('flash')):?>
	<?php endif ;?>

    

  <div class="site-section" data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Price List</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 mb-5">
              <form  role="form" method ="post" action="<?= base_url('pricelist/tambah');?>" >
               


                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="fname">Nama</label>
                    <input type="text" name="nama" id="fname" class="form-control" required>
                  </div>
                 
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="hp">No WhatsApp</label> 
                    <input type="number" name ="wa" id="fname" class="form-control" required>
                  </div>
                </div>

              

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="hp">Tanggal</label> 
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Send" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>

    
              </form>
            </div>
            <div class="col-lg-3 ml-auto">
              <div class="mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Need Our Pricelist ?</p>
                <p class="mb-4">You could get our newest by filling the form !! </p>

                <p class="mb-4">Hopping so much we could be your partner at yopur special day !!</p>


              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>


  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>

    

    
    
  </div>

<script src="<?= base_url();?>assetfrontend/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/jquery-ui.js"></script>
<script src="<?= base_url();?>assetfrontend/js/popper.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/owl.carousel.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/jquery.stellar.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/jquery.countdown.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/swiper.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/aos.js"></script>

<script src="<?= base_url();?>assetfrontend/js/picturefill.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/lightgallery-all.min.js"></script>
<script src="<?= base_url();?>assetfrontend/js/jquery.mousewheel.min.js"></script>

<script src="<?= base_url();?>assetfrontend/js/main.js"></script>

<script src="<?= base_url();?>adm/js/sweetalert2.all.min.js"></script>
     <script src="<?= base_url();?>adm/js/myscript.js"></script>
<script>
  $(document).ready(function(){
    $('#lightgallery').lightGallery();
  });
</script>
  
</body>
</html>