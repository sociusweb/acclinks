
  <!--==========================
    Intro Section
  ============================-->
  <div class="container-fluid ">
    <div class="probgcolor">
    <div class="row">
      <div class="col-md-5">
        <div id="tt-pageContent">
  <div class="container-indent">
    <!-- mobile product slider  -->
    <div class="tt-mobile-product-layout visible-xs">
      <div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
              <?php
                for ($i=1; $i <= 8; $i++) {
                  if (!empty($product[0]['pro_img'.$i])) {
                    echo "<div><img src='".base_url().$product[0]['pro_img'.$i]."' alt=''></div>";
                  }
                }
              ?>
      </div>
    </div>
    <!-- /mobile product slider  -->
    <div class="container container-fluid-mobile">
      <div class="row">
        <div class="col-12 hidden-xs">
          <div class="tt-product-vertical-layout">
            <div class="tt-product-single-img">
              <div style="max-height: 600px;text-align: center;">
                <button class="tt-btn-zomm tt-top-right"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
                <?php 
                if (!empty($product[0]['pro_img1'])) {

                    echo "<img class='zoom-product' src='".base_url().$product[0]['pro_img1']."' data-zoom-image='".base_url().$product[0]['pro_img1']."' alt=''>";
                  }
                ?>
              </div>
            </div>
            <div class="tt-product-single-carousel-vertical">
              <ul id="smallGallery" class="tt-slick-button-vertical  slick-animated-show-js" >
                <?php
                for ($i=1; $i <= 8; $i++) { 
                  if (!empty($product[0]['pro_img'.$i])) {
                      if ($i==1) {
                        $class="class='zoomGalleryActive'";
                      }
                      else{
                        $class="";
                      }
                    echo "<li><a ".$class." href='#' data-image='".base_url().$product[0]['pro_img'.$i]."' data-zoom-image='".base_url().$product[0]['pro_img'.$i]."'><img src='".base_url().$product[0]['pro_img'.$i]."' alt=''></a></li>";
                      }
                  }
                
                 ?>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
      </div>
      <div class="col-md-7 blkclr">
        <div class="tophead">
          <h3><?php echo $product[0]['pro_name'] ?></h3>
          <p>by <a></a><?php echo $product[0]['pro_brand'] ?></p>
          <hr>
        </div>
        <div class="price">
          <table class="borderless">
            <?php if (!empty($product[0]['pro_price'])) { ?>
            <tr>
              <td style="text-align: right;">M.R.P. : </td>
              <td><span style="color: red">&nbsp; $<?php echo $product[0]['pro_price'] ?></span></td>
            </tr>
            <tr>
              <td style="text-align: right;">Price. :</td>
              <td> <span style="color: red">&nbsp; $<?php echo $product[0]['pro_price'] ?></span></td>
            </tr>
            <tr>
              <td></td>
              <td>&nbsp;&nbsp;Inclusive of all taxes</td>
            </tr>
            <?php } ?>
            <tr>
              <td>Colour :</td>
              <td><b>&nbsp;&nbsp;<?php echo $product[0]['pro_color'] ?></b></td>
            </tr>
          </table>
        </div>
        <div class="pro-feature">
          <ul>
            <li><?php echo $product[0]['pro_fe1'] ?></li>
            <li><?php echo $product[0]['pro_fe2'] ?></li>
            <li><?php echo $product[0]['pro_fe3'] ?></li>
            <li><?php echo $product[0]['pro_fe4'] ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
  <!--==========================
    tab
  ============================--> 
  <div class="container-fluid">
    <div class="bgtab">
    <div class="print-tab" data-tab-id="1">
    <ul class="print-tab-menu">
      <li data-tab-menu="tab1"><a>key Features</a></li>
      <li data-tab-menu="tab2"><a>Technical Specs</a></li>
      <li data-tab-menu="tab3"><a>Additinonal Information</a></li>
    </ul>
    <div class="print-tab-content">
      <div data-tab-content="tab1">
          <div class="pro-feature">
          <ul>
            <li><?php echo $product[0]['pro_fe1'] ?></li>
            <li><?php echo $product[0]['pro_fe2'] ?></li>
            <li><?php echo $product[0]['pro_fe3'] ?></li>
            <li><?php echo $product[0]['pro_fe4'] ?></li>
          </ul>
        </div>
      </div>
      <div data-tab-content="tab2">
        <div class="tech">
        <table cellspacing="2" cellpadding="5" border="0">
        <tbody>
         <tr><td> OS </td><td><?php echo $product[0]['pro_os'] ?></td></tr>
         <tr><td> RAM </td><td><?php echo $product[0]['pro_ram'] ?></td></tr>
        <tr><td>Product Dimensions</td><td><?php echo $product[0]['pro_dimensions'] ?></td></tr>
        <tr><td>Batteries:</td><td><?php echo $product[0]['pro_battery'] ?></td></tr>
        <tr><td>Item model number</td><td><?php echo $product[0]['pro_model'] ?></td></tr>

         <tr><td> Wireless communication technologies </td><td><?php echo $product[0]['pro_comm'] ?></td></tr>
         <tr><td> Connectivity technologies </td><td><?php echo $product[0]['pro_connectivity'] ?></td></tr>
         <tr><td> Special features </td><td><?php echo $product[0]['pro_special'] ?></td></tr>
         <tr><td > Colour </td><td><?php echo $product[0]['pro_color'] ?></td></tr>
     </tbody>
     </table>
      </div>
    </div>
      <div data-tab-content="tab3">
        <div class="info">
         <?php echo $product[0]['pro_addinfo'] ?>
       </div>
      </div>
    </div>
  </div>
  </div>
</div>
