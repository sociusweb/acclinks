<style>
    .parallax3 {

background-image: url("<?php echo base_url();?>assets/frontend/img/contact.jpeg");
height: 350px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

}
    #service_sect{
     background-color: white;
      margin-top:15px;
      padding-bottom: 40px;
    }
    .title_service{
        width: 50%;
   margin-left: auto;
   margin-right: auto;
    margin-bottom: 75px;
   text-align: center;
   padding-top: 50px;
  
    }
    .icon_service {
    width: 84px;
    height: 90px;
    font-size: 36px;
    text-align: center;
    line-height: 96px;
    background: #5A8FC5;
    color: #fff;
    float: left;
}
#service_sect .title_service h3{
font-weight: 600;
color:black;
}
.content_service{
    margin-left: 120px;

}
#service_sect .content_service h5{
  font-weight: 600;
    color:black;
}

#service_sect .content_service p{
text-align: justify;
    font-size:15px;
}

/*=========end service section========*/  
#second_section{
    background-color: white;
    padding-top:60px;
}

#second_section .img-responsive{
    display: block;
    max-width: 100%;
    height: auto;
}
#second_section h3{
    font-weight:600;
    color:black;
}

.list_service li{
list-style: none;
}

.list_service .icon_second_service{
    width: 60px;
    height: 60px;
    background: #6C8DC2;
    font-size: 24px;
    color: #fff;
    text-align: center;
    line-height: 60px;
    border-radius: 50%;
    float: left;
}
.list_service .content_second_service{
    margin-left:85px;
}
.list_service .content_second_service h6{
    color:black;
    font-weight: 600;
}
#form_service{
   padding-top :50px;
   padding-bottom: 30px;
}

@media only screen and (max-width: 800px)  {
    #form_service{
    margin-left:1%;
   padding-top :0px;
} 
        
}

</style>

    <!--service section-->
    <section>
        <div class="container-fluid" id="service_sect">
            <div class="title_service">
                <h3><?php echo $service[0]['service_head1']?></h3>
                <p><?php echo $service[0]['service_des1']?></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon_service">
                            <i class="fa fa-user-circle"></i>
                        </div>
                        <div class="content_service">
                            <h5><?php echo $service[0]['service_head2']?></h5>
                            <p><?php echo $service[0]['service_des2']?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_service">
                            <i class="fa fa-caret-square-o-up"></i>
                        </div>
                        <div class="content_service">
                            <h5><?php echo $service[0]['service_head3']?></h5>
                            <p><?php echo $service[0]['service_des3']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon_service">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="content_service">
                            <h5>
                                <?php echo $service[0]['service_head4']?></h5>
                            <p><?php echo $service[0]['service_des4']?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_service">
                            <i class="fa fa-share"></i>
                        </div>
                        <div class="content_service">
                            <h5>
                               <?php echo $service[0]['service_head5']?></h5>
                            <p><?php echo $service[0]['service_des5']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End service section-->
    <div class="parallax3">
        <div class="container" id="form_service">
            <div class="row" style="display: none;">
                <div class="col-sm-8 col-sm-offset-4">
                    <h2 style="color:white; font-weight:bold;">Contact Us</h2>
                    <form class="">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="name">First Name:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Firstname">
                                </div>
                               
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Last Name:</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Lastname">
                                </div> 
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Your Email:</label>
                                    <input type="text" class="form-control" id="email" placeholder="Your email">
                                </div> 
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Your Phone:</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Your phone">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-main">Submit</button>
                            </div> 
                        </div> 
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <!--second service section-->
    <section id="second_section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>WE HELP YOU TO GROW FAST</h3>
                    <p>Lirure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sintnim id est laborum.</p>
                    <ul class="row list_service">
                        <li class="col-md-6">
                            <div class="icon_second_service">
                                <i class="fa fa-id-badge"></i>
                            </div>
                            <div class="content_second_service">
                                <h6>WE ARE AMAZING</h6>
                                <p>Lorem ipsum dolor sit amet tetur adipisicing elit</p>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="icon_second_service">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="content_second_service">
                                <h6>WE ARE AMAZING</h6>
                                <p>Lorem ipsum dolor sit amet tetur adipisicing elit</p>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="icon_second_service">
                                <i class="fa fa-external-link"></i>
                            </div>
                            <div class="content_second_service">
                                <h6>WE ARE AMAZING</h6>
                                <p>Lorem ipsum dolor sit amet tetur adipisicing elit</p>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="icon_second_service">
                                <i class="fa fa-leaf"></i>
                            </div>
                            <div class="content_second_service">
                                <h6>WE ARE AMAZING</h6>
                                <p>Lorem ipsum dolor sit amet tetur adipisicing elit</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-md-5">
                    <img class="img-responsive" src="<?php echo base_url() ?>assets/frontend/img/phn.png" />
                </div>
            </div>
        </div>
    </section>
 

