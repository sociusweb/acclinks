     <style type="text/css">
    #intro .carousel-item::before{
      background-color: unset;
    }
  </style>
   <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="https://cdn6.f-cdn.com/contestentries/950453/21854765/58a0d14b46bf7_thumb900.jpg" alt=""></div>
           <!--  <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div> -->
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="https://www.lg.com/uk/images/MC/features/G6_Hero_banner_local2.jpg" alt=""></div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="https://imageswscdn.webstore.net.br/files/8032/bannerb.jpg" alt=""></div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
  <!--==========================
    Intro Section
  ============================-->

    <div class="container-fluid bgcolor">
      <div class="row text-center" style="display: inline;"><h3>Latest Products</h3></div>
      <div class="row">
        <?php foreach ($products as $product) { ?>
        <div class="col-md-3 prmargin">
          <a href="<?php echo base_url();?>home/productdetail?mid=<?php echo $product['id'] ?>">
          <div class="product-grid">
            <div class="imge">
            <img src="<?php echo base_url(). $product['pro_img1']?>" style="width:auto;height:350px;" >
            </div>
            <h5><?php echo $product['pro_name']?></h5>
            <p><?php echo $product['pro_price']?></p>
          </div>
          </a>
        </div>
        <?php }?>
      </div>
    </div>

