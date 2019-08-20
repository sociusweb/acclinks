  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <?php 
          $t=1;
          foreach ($slider as $slide ) { ?>
          <div class="carousel-item <?php if($t==1) { echo 'active';} ?>">
            <div class="carousel-background"><img src="<?php echo base_url().$slide['sdr_img']?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo $slide['sdr_title']?></h2>
                <p><?php echo $slide['sdr_des']?></p>
                <a href="<?php echo $slide['sdr_url']?>" class="btn-get-started scrollto">Visit</a>
              </div>
            </div>
          </div>
          <?php
          $t++;
           }  ?>
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

  <!-- content -->
  <section id="services" style="background-color: #EEEE;">
      <div class="container-fluid">
        <?php foreach ($row as $rowdata ) { ?> 
        <div class="row">
          <div class="col-lg-6">
            <div class="box wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
              <h4 class="title"><a ><?php echo $rowdata['blk_heading1'] ?></a></h4>
              <p class="description" ><?php echo $rowdata['blk_description1'] ?></p>
              <div class="tmargin"><a href="<?php echo $rowdata['blk_link1'] ?>"> <button type="button" class="btn btn-clr">Learn More</button></a>

              </div>
              <img src="<?php echo $rowdata['blk_img1'] ?>" alt="" style="padding-top:5px;">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
              <h4 class="title"><a ><?php echo $rowdata['blk_heading2'] ?></a></a></h4>
              <p class="description" ><?php echo $rowdata['blk_description2'] ?></p>
              <div class="tmargin"><a href="<?php echo $rowdata['blk_link2'] ?>"> <button type="button" class="btn btn-clr">Learn More</button></a>
              </div>
              <img src="<?php echo $rowdata['blk_img2'] ?>" alt="" style="padding-top:5px;">
            </div>
          </div>
        </div>
        <?php } ?> 
      </div>

      
    </section>

   <!-- content END-->
  <div class="parallax1"></div>

<!-- <div class="container accord">
    <div class="center-block">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                I Want to....
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Questions and Answers:
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
 -->

<div class="container" id="home_accrod" style="padding: 30px 0 30px 0;">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel-group" id="accordion1">
        <div class="panel panel-primary" style="margin-bottom: 12px;">
          <div class="panel-heading">
            <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
            <!--   <div class="accordion-icon"></div> -->
            </a>
            <h4 class="panel-title">I want to:</h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse">
            <ul class="list-group">

              <li class="list-group-item" id="accordion11">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion11" href="#collapseOneOne">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">Setup my handsets to use Oceanlink service:</a>
                <div id="collapseOneOne" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li>Our APN:“Oceanlink” SMSC: “+68663000188”</li>
                    <li>To setup our APN on a Android phone(Samsung, Huawei, ZTE, LG, HTC …)
                      Setting -> Mobile Networks -> Access Point Names -> New then add APN name: Oceanlink APN: Oceanlink</li>
                    <li>To setup our APN on a iPhone (iPhone 5,5s,6,7,8,X)
                      Settings > Cellular > Cellular Data Options > Cellular Network OR Settings > Mobile Data > Mobile Data Options > Mobile Data Network</li>

                  </ul>
                </div>
              </li>
              <li class="list-group-item" id="accordion11">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion11" href="#collapseOneTwo">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">Understand current coverage of Oceanlink service</a>
                <div id="collapseOneTwo" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li> Please check our coverage map -> link to coverage map zoom in version</li>

                  </ul>
                </div>
              </li>
              <li class="list-group-item" id="accordion11">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion11" href="#collapseOneThree">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">Topup, order plan for my SIM card</a>
                <div id="collapseOneThree" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li> Please dial *88# and send to access our customer service menu.You may purchase Oceanlink topup card at any stores with board labled "Oceanlink Topup Here" in store front.</li>
                  </ul>
                </div>
              </li>
              <li class="list-group-item" id="accordion11">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion11" href="#collapseOneFour">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">Approach customer service to query, change number, report lost SIM...</a>
                <div id="collapseOneFour" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li> Please dial our customer service number 100, Or you may visit our sales office located in Oceanlink store to talk with our staff.</li>
                  
                  </ul>
                </div>
              </li>
              <li class="list-group-item" id="accordion11">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion11" href="#collapseOneFive">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">Report an issue on services</a>
                <div id="collapseOneFive" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li>We thank you for your help report an issue.Your opinion is essential for us to provide better service.Please Click "Report an Issue" and fill the form. We will get back to you soon.Pleaes mind that you are also encourage to call our customer service # 100 to report any issue or request service.</li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </div>

        <div class="panel panel-primary" style="margin-bottom: 12px;">
          <div class="panel-heading">
            <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
              <!-- <div class="accordion-icon"></div> -->
            </a>
            <h4 class="panel-title">Questions and Answers:</h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <ul class="list-group">

              <li class="list-group-item" id="accordion21">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion21" href="#collapseTwoOne">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">What kind of handset is supported?</a>
                <div id="collapseTwoOne" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li>Handset support WCDMA, HSDPA, HSPA+ on 900MHz GSM frequency band is supported.</li>
                  </ul>
                </div>
              </li>
              <li class="list-group-item" id="accordion21">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion21" href="#collapseTwoTwo">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">What I can do if my SIM card is either damaged or lost?</a>
                <div id="collapseTwoTwo" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li>You may call customer service and/or visit our sales office and require a new SIM card with old number.</li>
                  </ul>
                </div>
              </li>
              <li class="list-group-item" id="accordion21">
                <a class="collapsed pull-right" data-toggle="collapse" data-parent="#accordion21" href="#collapseTwoThree">
                  <div class="accordion-icon"></div>
                </a>
                <a href="#">Can I give my credit to others?</a>
                <div id="collapseTwoThree" class="panel-collapse collapse">
                  <br>
                  <ul class="list-unstyled">
                    <li>Yes you can do this by using our USSD menu. (dial *88# and send to obtain service menu on your handset).</li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

  <div class="container-fluid linkblock">
    <div class="container">
    <div class="row">
      <div class="col-md-4 boxs">
        <h3>Setup My Phone</h3>
        <p style="text-align: justify;">To setup our APN on a Android phone
          (Samsung, Huawei, ZTE, LG, HTC etc).
          Setting -> Mobile Networks -> Access Point Names...
          </p>
        <button class="btn btn-clr"><a href="<?php echo base_url();?>home/setup" style="color:white;">How to do it</a></button>
      </div>
      <div class="col-md-4 boxs">
        <h3>Contact Us</h3>
        <p>Customer service: 1000<br>
          Email:customer@oceanlinknet.com
        Address: P.O. Box 535 BPA Building Bairiki, Tarawa, Kiribati</p>
        <button class="btn btn-clr"><a href="<?php echo base_url();?>home/support" style="color:white;">Feedback</a></button>
      </div>
      <div class="col-md-4 boxs">
        <h3>About Us</h3>
        <p>Ocean Link Ltd was registered in Kiribati in March 2016. Ocean Link offers cellular data and voice services, and internet services in Tarawa and Buritariary.</p>
        <button class="btn btn-clr"><a href="<?php echo base_url();?>home/about" style="color:white;">View</a></button>
      </div>
    </div>
  </div>
  </div>
  <div class="parallax2"></div>
