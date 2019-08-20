  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
         <a href="<?php echo base_url();?>" class="scrollto"><img src="<?php echo base_url();?>assets/frontend/img/logo.png" alt="" title="" height="100px" /></a>
      </div>
      <div class="topbar">
        <div class="fake-input">
        <input type="text" class="search" placeholder="SEARCH" name="">
        <img src="<?php echo base_url();?>assets/frontend/img/icons/magnifier.png" width=15 />
        </div>
        <div class="language">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/nauru.png">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/usa.png">
        </div>
        <div class="social">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/facebook.png">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/twitter.png">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/youtube.png">
        </div>
        <div class="country" style="display:none;">
            <select class="country-select" onchange="changecountry(this.value)">
                <option value="1">Nauru</option>
                <option value="2">Kiribari</option>
            </select>
        </div>
        <script type="text/javascript">
            function changecountry(value){
                if (value==1) {
                    window.location ="<?php echo base_url();?>";
                }else if (value == 2) {
                    window.location ="<?php echo base_url();?>KI";
                }
            }
        </script>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?php echo base_url();?>home/about">About AcclinksNR</a></li>
          <li><a href="<?php echo base_url();?>home/product">Products</a></li>
          <li class="menu-has-children"><a>Recharge</a>
            <ul>
              <li><a href="<?php echo base_url();?>home/recharge">Recharge</a></li>
              <li><a href="<?php echo base_url();?>home/rates">Rates & Plan</a></li>
            </ul>
          </li>
          <!-- <li><a href="<?php echo base_url();?>home/recharge">Recharge</a></li> -->
          <li><a href="<?php echo base_url();?>home/support">Support</a></li>
          <li class="menu-has-children"><a>Services & Policies</a>
            <ul>
              <li><a href="<?php echo base_url();?>home/service">PacCell Mobile Service</a></li>
              <li><a href="<?php echo base_url();?>home/service">PacFi Internet Data Service</a></li>
              <li><a href="<?php echo base_url();?>home/service">PacNet Data Service</a></li>
              <li><a href="<?php echo base_url();?>home/service">Handset repairing</a></li>
              <li><a href="<?php echo base_url();?>home/setup">Setup phone</a></li>
              <li><a href="<?php echo base_url();?>home/map">Coverage Map</a></li>
            </ul>
          </li>
          <?php
            if (isset($_SESSION['isUserLoggedin']) && isset($_SESSION['name']) && $_SESSION['isUserLoggedin'])  {
              $name = explode(" ", $_SESSION['name']);
              ?>
          <li class="menu-has-children"><a style="text-decoration:underline;"><?php echo $name[0]; ?></a>
            <ul>
              <li style="min-width: unset;">
                <a href="<?php echo base_url();?>home/profile"><i class="fa fa-user" style="margin-right: 5px"></i>My Profile</a></li>
              <li style="min-width: unset;">
                <a href="<?php echo base_url();?>home/account"><i class="fa fa-bookmark-o" style="margin-right: 5px"></i>Account</a></li>  
              <li style="min-width: unset;">
                <a href="<?php echo base_url();?>login/user_logout"><i class="fa fa-power-off" style="margin-right: 5px"></i>Logout</a></li>
            </ul>
          </li>
              <?php
            }else{
              ?>
          <li class="login-btn"><a href="<?php echo base_url();?>login">Login</a></li>
              <?php
            }
          ?>


        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <div class="mobilebar">
        <div class="fake-input">
        <input type="text" class="search" placeholder="Search" name="">
        <img src="<?php echo base_url();?>assets/frontend/img/icons/magnifier.png" width=15 />
        </div>

          <img src="<?php echo base_url();?>assets/frontend/img/icons/nauru.png">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/usa.png">
          <div class="socials">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/facebook.png">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/twitter.png">
          <img src="<?php echo base_url();?>assets/frontend/img/icons/youtube.png">
        </div>

  </div>