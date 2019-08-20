  <!--==========================
    Support
  ============================-->
      <div class="container-fluid">

        <div class="support_contact">

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <h2 align="center">Support</h2>
                <div class="container">
                    <div class="row component-wrapper">
                        <div class="col-xs-3" style="padding:0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left">

                                <li ><a href="#signal" data-toggle="tab" class="active show">No signal area</a></li>
                                <li><a href="#network" data-toggle="tab">PacCell Network Problem</a></li>
                                <li><a href="#pacfi" data-toggle="tab">PacFi Network Problem</a></li>
                                <li><a href="#pacnet" data-toggle="tab">PacNet Connection Problem</a></li>
                                <li><a href="#recharge" data-toggle="tab"> Recharge problem</a></li>
                                <li><a href="#service" data-toggle="tab">Service Abuse</a></li>
                                <li><a href="#complain" data-toggle="tab">Complain on Service</a></li>
                                <li><a href="#others" data-toggle="tab">Other Issue</a></li>
                            </ul>
                        </div>

                        <div class="col-xs-9">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="signal">
                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px; text-align:center;">Report Signal Issue</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control"
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control"
                                                                        name="lname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control"
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control" id="phone"
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control" name="subject"
                                                             value="Report No Signal Area" tabindex="3"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                                id="message" placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="tab-pane" id="network">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px; text-align:center;">PacCell Network Problem</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control"
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control"
                                                                        name="lname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control" 
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control" 
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control" name="subject"
                                                                placeholder="Report PacCell Network Problem" value="Report PacCell Network Problem" tabindex="3"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                                placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" name="sub" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane" id="pacfi">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px;text-align:center;">PacFi Network Problem</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control"
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="lname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control" 
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control" 
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control"  name="subject"
                                                                placeholder="Report PacFi Network Problem" value="Report PacFi Network Problem" tabindex="3"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                                 placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" name="sub" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="pacnet">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px;text-align:center;">PacNet Connection
                                                    Problem</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="lname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control"
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control"
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control" name="subject"
                                                                placeholder="Report PacNet Connection Problem" value="Report PacNet Connection Problem" tabindex="3"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                            placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" name="sub" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="recharge">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px;text-align:center;">Recharge Problem</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control"
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="lname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control" 
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control" 
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control" name="subject"
                                                                placeholder="Report Recharge Problem" value="Report Recharge Problem" tabindex="3"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                                 placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" name="sub" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="service">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px; text-align:center;">Service Abuse</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="lname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control" 
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control" 
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control"  name="subject"
                                                                placeholder="Report Service Abuse" value="Report Service Abuse" tabindex="3"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                                placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" name="sub" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="complain">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px; text-align:center;">Complain On Service</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control"
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="fname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control" 
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control" 
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control" name="subject"
                                                                placeholder="Complain On Service" value="Complain On Service" tabindex="3" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                                 placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" name="sub" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="others">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:35px; text-align:center;">Other Issue</h3>
                                                <hr>
                                                <div class="contact_form">


                                                    <form id="contact-form" class="form" action="<?php echo base_url('home/supportMail') ?>" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="fname" placeholder="First name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name"></label>

                                                                    <input type="text" class="form-control" 
                                                                        name="lname" placeholder="Last name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="email" class="form-control"
                                                                        name="email" placeholder="Your Email" tabindex="2"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email"></label>
                                                                    <input type="phone" class="form-control"
                                                                        name="phone" placeholder="Phone number"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="subject"></label>
                                                            <input type="text" class="form-control" name="subject"
                                                                placeholder="subject.." value="" tabindex="3">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="message"></label>
                                                            <textarea rows="5" cols="50" name="message" class="form-control"
                                                                 placeholder="Message..." tabindex="4"
                                                                required></textarea>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" name="sub" class="btn btn-start-order">Send
                                                                Message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php 
                        if (isset($_GET['suc'])&&$_GET['suc']==1) {
                            echo '<p>Problem Reported Successfully. Will get back to you soon.</p>';
                        }
                        elseif (isset($_GET['suc'])&&$_GET['suc']==2) {
                            echo '<p>Something Went wrong, Please try again!!</p>';
                        }
                        ?></div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <!--page content end-->
        </div>

    </div>


    <div style="padding: 0;margin: 0">
        <img src="<?php echo base_url() ?>assets/frontend/img/support.png" width="100%" height="330px">
    </div>