
  <!--==========================
    Intro Section
  ============================-->
  <style>
fieldset { 
  padding: 15px; 
  max-width: 339px;
  background-color: #fff;
  border-radius: 5px;
}

section { padding: 0 15px; }

.CaptchaWrap { position: relative; }
.CaptchaTxtField { 
  border-radius: 5px; 
  border: 1px solid #ccc; 
  display: block;  
  box-sizing: border-box;
  margin-top: 10px;
}

#UserCaptchaCode { 
  padding: 3px 10px; 
  outline: none; 
  font-size: 17px; 
  font-weight: normal; 
  font-family: 'Open Sans', sans-serif;
  width:276px;
}
#CaptchaImageCode { 
  text-align:center;
  padding: 0px 0;
  width: 280px;
  overflow: hidden;
}

.capcode { 
  font-size: 46px; 
  display: block; 
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none; 
  cursor: default;
  letter-spacing: 1px;
  color: #ccc;
  font-family: 'Roboto Slab', serif;
  font-weight: 100;
  font-style: italic;
}

.ReloadBtn { 
  background:url('https://cdn3.iconfinder.com/data/icons/basic-interface/100/update-64.png') left top no-repeat;   
  background-size : 100%;
  width: 23px; 
  height: 26px;
  border: 0px; outline none;
  position: absolute; 
  bottom: 55px;
  left : 290px;
  outline: none;
  cursor: pointer; /**/
}
.btnSubmit {
  margin-top: 5px;
  border: 0px;
  padding: 4px 4px; 
  border-radius: 5px;
  font-size: 15px;
  background-color: #1285c4;
  color: #fff;
  cursor: pointer;
}

.error { 
  color: red; 
  font-size: 12px; 
  display: none; 
}
.success {
  color: green;
  font-size: 12px;
  display: none;
}
.table td, .table th {
  vertical-align: middle!important;
}

  /*captcha count*/
  <?php
    session_start();
    $_SESSION["count_ki"] = $_SESSION["count_ki"] + 1;
  ?>
  </style>
    <div class="container-fluid">
      <div class="row" style="border-top: 1px solid;">
        <div class="col-md-6 leftbg">
          <p>What is my ID? </p><br>
          <p>Your Login Id is your cell phone number without country code</p>
          <p>Sample : 6300010001</p><br>
          <p>What is my service password?</p><br>
          <p>A service password is password you use to login to Acclink Website and Obtain other services. It can be setup when you login to your Acclink account using SMS code</p><br>
          <p>I don't have, or I forgot Service Pssword</p><br>
          <p>You may login using SMS code by clicking "send me login code" button. After you login using 6 digit code in replied text, you may change the service password.</p><br>
          <h5>TERMS OF USe</h5><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
        <div class="col-md-6 lgright">
          <div class="head">
          <img src="<?php echo base_url();?>assets/frontend/img/logo.png" height="100px">
          <p>Login & enjoy the full experience</p>
          </div>
          <div id="tabs">
          <div class="container">
            <h6 class="section-title h1">Login</h6>
            <div class="row" >
              <div class="col-xs-12" style="margin: 0 auto;">
                <nav>
                  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-home" aria-selected="true">Login ID</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-otp" role="tab" aria-controls="nav-profile" aria-selected="false">Login via SMS</a>
                  </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form action="<?php echo base_url().'login/user_login'?>" method="post">
                    <table class="table table-responsive borderless">
                      <tr>
                        <td>Login ID &nbsp;&nbsp;&nbsp;:</td>
                        <td><input type="text" name="username" class="form-control" placeholder="Your phone number" required></td>
                      </tr>
                      <tr>
                        <td>Password :</td>
                        <td><input type="password" name="password" class="form-control" placeholder="Your service password" required></td>
                      </tr>
                      <tr><td></td><td style="padding:0 0 0 .75rem;"><a href="">Forgot password ?</a></td></tr>
                    </table>
                    <!--<input type="submit" value="LOGIN" class="btn btn-sm lgbtn"><-->
                    <section id="captcha">
                      <fieldset>
                        <div class='CaptchaWrap'>
                          <div id="CaptchaImageCode" class="CaptchaTxtField">
                            <canvas id="CapCode" class="capcode" width="300" height="80"></canvas>
                          </div> 
                          <input type="button" class="ReloadBtn" onclick='CreateCaptcha();'>
                          <span id="WrongCaptchaError" class="error"></span>
                          <input type="text" id="UserCaptchaCode" class="CaptchaTxtField" placeholder='Enter Captcha - Case Sensitive'>
                        </div><br>
                      </fieldset>
                    </section>
                    <div class="text-center">
                         <input type="submit" value="LOGIN" class="btn btn-sm lgbtn" onclick="CheckCaptcha(event);">
                       </div>
                     </form>  
                    <?php if(isset($_GET['suc'])&&$_GET['suc']==2) { ?>
                    <p style="color:red;margin-top:15px;text-align:center">Username / password is incorrect!!</p>
                    <?php } ?>
                  </div>
                  <div class="tab-pane fade" id="nav-otp" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-responsive borderless"  style="margin-bottom:0;">
                      <tr>
                        <td>Phone number :</td>
                        <td><input type="text" class="form-control" name="" id="mobile" placeholder="eg: 63000220 " required ></td>
                      </tr>
                    </table>
                    <div class="text-center ">
                    <!-- <input type="text" name="otp" class="otp" placeholder="Enter OTP received"> -->
                    <button id="otpgen" class="btn btn-sm lgbtn margintp otpbtn">Send me Code</button><br>
                    <span id="invalid" class="error"></span><br>
                    <span id="success" class="success"></span>
                    <div style="margin:8px 0;height:15px;" id='resend'></div>
                    <div class="text-center" id='otpsubmit' style="margin-top:14px;">
                    <input type="text" name="otp" class="otp" id="otp" placeholder="Enter Received Code">
                    <button class="btn btn-sm lgbtn margintp" id="submit">SUBMIT</button>
                    </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <script>
      $('#otpgen').click(function () {
        var number = $("#mobile").val();
        if (number.length == 8 && number != null ) {
            $('#invalid').hide();
          var input = {
            "number" : number
          };
          $.ajax({
            url : "<?php echo base_url().'login/otp_gen' ?>",
            type : 'POST',
            data : input,
            success : function(response) {
              if (!response) {
                alert("Something went wrong. Please try again.");
                $('#success').hide();
              }
              else{
                $('#success').text('OTP sent successfully').show();
              }
            }
          });
        } else {
            $('#invalid').text('Please enter a valid mobile number').show();
        }
      });

      $('#captcha').hide();
      $('#submit').click(function(event){
          var number = $("#mobile").val();
          var otp = $("#otp").val();
          var input = {
            "number" : number,
            "otp" : otp
          };
          if (otp == null) {
            $('#invalid').text('Please enter a valid OTP').show();
          }else{
            $('#invalid').hide();
          $.ajax({
            url : "<?php echo base_url().'login/verify_otp' ?>",
            type : 'POST',
            data : input,
            success : function(response) {
              if (response == 'true' ) {
                $('#invalid').fadeOut(100);
                 window.location ="<?php echo base_url().'login/otplogin';?>";
              }else{
                event.preventDefault();
                $('#invalid').text('OTP not valid! Please try again.').show();
              }
            }
          });
        }
      })

        var cd;
        var count = 0;
        $(function(){
          CreateCaptcha();
        });
        // Create Captcha
        function CreateCaptcha() {
          //$('#InvalidCapthcaError').hide();
          var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
          var i;
          for (i = 0; i < 6; i++) {
            var a = alpha[Math.floor(Math.random() * alpha.length)];
            var b = alpha[Math.floor(Math.random() * alpha.length)];
            var c = alpha[Math.floor(Math.random() * alpha.length)];
            var d = alpha[Math.floor(Math.random() * alpha.length)];
            var e = alpha[Math.floor(Math.random() * alpha.length)];
            var f = alpha[Math.floor(Math.random() * alpha.length)];
          }
          cd = a + ' ' + b + ' ' + c + ' ' + d + ' ' + e + ' ' + f;
          $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>')
          
          var c = document.getElementById("CapCode"),
              ctx=c.getContext("2d"),
              x = c.width / 2,
              img = new Image();

          img.src = "https://pixelsharing.files.wordpress.com/2010/11/salvage-tileable-and-seamless-pattern.jpg";
          img.onload = function () {
              var pattern = ctx.createPattern(img, "repeat");
              ctx.fillStyle = pattern;
              ctx.fillRect(0, 0, c.width, c.height);
              ctx.font="46px Roboto Slab";
              ctx.fillStyle = '#ccc';
              ctx.textAlign = 'center';
              ctx.setTransform (1, -0.12, 0, 1, 0, 15);
              ctx.fillText(cd,x,55);
          };
        }

        // Validate Captcha
        function ValidateCaptcha() {
          var string1 = removeSpaces(cd);
          var string2 = removeSpaces($('#UserCaptchaCode').val());
          if (string1 == string2) {
            return true;
          }
          else {
            return false;
          }
        }
        // Remove Spaces
        function removeSpaces(string) {
          return string.split(' ').join('');
        }

        // Check Captcha
        function CheckCaptcha(event) {
          if (<?php echo $_SESSION["count_ki"]; ?> >= 4 || count >= 4 ) {
            $('#captcha').show().fadeIn(100);
            var result = ValidateCaptcha();
            if( $("#UserCaptchaCode").val() == "" || $("#UserCaptchaCode").val() == null || $("#UserCaptchaCode").val() == "undefined") {
              $('#WrongCaptchaError').text('Please enter code given below in a picture.').show();
              $('#UserCaptchaCode').focus();
              event.preventDefault();
            } else {
              if(result == false) { 
                $('#WrongCaptchaError').text('Invalid Captcha! Please try again.').show();
                CreateCaptcha();
                $('#UserCaptchaCode').focus().select();
                event.preventDefault();
              }
              else { 
                $('#UserCaptchaCode').val('').attr('place-holder','Enter Captcha - Case Sensitive');
                CreateCaptcha();
                $('#WrongCaptchaError').fadeOut(100);
              }
            }
          }
          count++;
        }
      </script>

   