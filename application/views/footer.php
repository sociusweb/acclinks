  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
      <div class="col-md-4 mobileview">
        <img src="<?php echo base_url();?>assets/frontend/img/icons/facebook.png">
        <img src="<?php echo base_url();?>assets/frontend/img/icons/twitter.png">
        <img src="<?php echo base_url();?>assets/frontend/img/icons/youtube.png">
      </div>
      <div class="col-md-4 text-center">
        &copy; Copyright@acclinksnauru
      </div>
    </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="<?php echo base_url();?>assets/frontend/lib/jquery/jquery.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>assets/frontend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- product detail page Libraries -->
  <script src="<?php echo base_url();?>assets/frontend/productdetail/elevatezoom/jquery.elevatezoom.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/productdetail/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/productdetail/slick/slick.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/productdetail/main.js"></script>
  <!-- product detail page Libraries end -->

  <script src="<?php echo base_url();?>assets/frontend/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/easing/easing.min.js"></script>

  <script src="<?php echo base_url();?>assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url();?>assets/frontend/js/main.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript">
    //profile
      $("#username_profile").blur(function (){
          $username=$("#username_profile").val();
          $.ajax({
               url: '<?php echo base_url();?>home/chk_username',
               type: 'POST',
               data: {username: $username},
               error: function() {
                alert('Some error occured. Please try again');
               },
               success: function(data) {
                if (data==1) {
                  $("#username_profile").css("border", "1px solid red");
                  $("#err_pro").remove();
                  $("#username_profile").after("<span id='err_pro'>Username already taken</span>");
                }else{
                  $("#username_profile").css("border", "1px solid #ced4da");
                  $("#err_pro").remove();
                }
               }
            });
        });

  </script>
</body>
</html>
