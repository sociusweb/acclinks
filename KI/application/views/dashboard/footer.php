<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
 -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/raphael/raphael.min.js"></script>
<!-- <script src="<?php echo base_url();?>/assets/dashboard/bower_components/morris.js/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>/assets/dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>/assets/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>/assets/dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/assets/dashboard/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dashboard/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>/assets/dashboard/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/assets/dashboard/dist/js/demo.js"></script>


<!-- custom -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/dist/js/pwdstrength.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/dist/js/jquery-confirm.min.js"></script>

 <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/custom.css">
  <script src="<?php echo base_url();?>assets/dashboard/dist/js/modernizr.min.js"></script>
  <script src="<?php echo base_url();?>assets/dashboard/dist/js/uploadHBR.min.js"></script>
  <script>
        $(document).ready(function () {
            uploadHBR.init({
                "target": "#uploads",
                "max": 8,
                "textNew": "ADD",
                "textTitle": "Click here or drag to upload an image",
                "textTitleRemove": "Click here remove the image"
            });
            $('#reset').click(function () {
                uploadHBR.reset('#uploads');
            });
        });
        <?php if(isset($_GET['id'])) {?>
          function init() {
            for (var i = 0; i < 8; i++) {
              $("#base64_0").val("dsfdsfdsf");
              
            }
          };
          init();
        <?php } ?>
  </script>

<script>
$(document).ready(function(){
  $("#chg").click(function(){
       var oldpassword = $("#oldpassword").val();
       var newpassword = $("#pwd").val();
        $.ajax({
           url: '<?php echo base_url();?>dashboard/chgpwd',
           type: 'POST',
           data: {oldpassword: oldpassword, newpassword : newpassword },
           error: function() {
              alert('Something is wrong, please check internet connection');
           },
           success: function(data) {
                // $("tbody").append("<tr><td>"+title+"</td><td>"+description+"</td></tr>");
                // alert("Record added successfully");
                $('#passchg').trigger("reset");
                if (data==1) {
                  $("#result").append('<div class="alert alert-success"><strong>Success!</strong> Password Changed successfully</div>');
                  setTimeout(function() {
                      $("#result").hide('blind', {}, 500)
                  }, 5000);
                }
                else{
                   $("#result").append('<div class="alert alert-danger"><strong>Error!</strong> please check Password</div>');
                   setTimeout(function() {
                      $("#result").hide('blind', {}, 500)
                  }, 5000);
                }
           }
        });
  });
});

  $('#sliderdescription').wysihtml5();
  $('#addinfo').wysihtml5();
  $('a.logout').confirm({
    content: "Are You Sure want to Logout ?",
  });
  function changestatus($id,$val){
    $.ajax({
       url: '<?php echo base_url();?>dashboard/updatestatus',
       type: 'POST',
       data: {id: $id, value : $val },
       error: function() {
          alert('Something is wrong, please check internet connection');
       },
       success: function(data) {
         //success
       }
    });
  }
  function prodelete($id){
  $.confirm({
    title: 'Confirm!',
    content: 'Are you sure want to delete?',
    buttons: {
        confirm: function () {
            $.ajax({
               url: '<?php echo base_url();?>dashboard/productdelete',
               type: 'POST',
               data: {id: $id},
               error: function() {
                  $.dialog('Something is wrong, please check internet connection');
               },
               success: function(data) {
                 //success
                 if (data) {
                   $("#pro"+$id).remove();
                 }
                 else {
                   $.dialog('Delete Failed');
                 }
               }
            });
        },
        cancel: function () {
        }
    }
});
}


  $(document).ready(function(){
  <?php if(isset($_GET['id'])) {?>
          var img = <?php echo json_encode($images); ?>;
          var len=img.length;
          function init() {
            for (var i = 0; i < len; i++) {
              $("#base64_"+i).val('data:image/jpeg;base64,'+img[i]);
              $("#new_"+i).addClass( "hidden" );
              $("#prev_"+i).removeClass("hidden");
              $("#img_"+i).attr('src','data:image/jpeg;base64,'+img[i]);
            }
          };
          init();
  <?php } ?>
  setTimeout(function() {
    $(".alert").hide('fade', {}, 100)
  }, 3000);
  });


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#prev1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgadd").change(function(){
    readURL(this);
});
function readURLS(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#prev2').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgadds").change(function(){
    readURLS(this);
});

$("#sliderclear").click(function(event){
  event.preventDefault();
  $('#addslider').trigger("reset");
});
  
  function deleteslide($id){
  $.confirm({
    title: 'Confirm!',
    content: 'Are you sure want to delete?',
    buttons: {
        confirm: function () {
            $.ajax({
               url: '<?php echo base_url();?>dashboard/sliderdelete',
               type: 'POST',
               data: {id: $id},
               error: function() {
                  $.dialog('Something is wrong, please check internet connection');
               },
               success: function(data) {
                 //success
                 if (data) {
                   $("#sdr"+$id).remove();
                 }
                 else {
                   $.dialog('Delete Failed');
                 }
               }
            });
        },
        cancel: function () {
        }
    }
});
  return false;
}

function rowdelete($id){
  $.confirm({
    title: 'Confirm!',
    content: 'Are you sure want to delete?',
    buttons: {
        confirm: function () {
            $.ajax({
               url: '<?php echo base_url();?>dashboard/rowdelete',
               type: 'POST',
               data: {id: $id},
               error: function() {
                  $.dialog('Something is wrong, please check internet connection');
               },
               success: function(data) {
                // alert(data);
                 //success
                 if (data) {
                   $("#row"+$id).remove();
                 }
                 else {
                   $.dialog('Delete Failed');
                 }
               }
            });
        },
        cancel: function () {
        }
    }
});
  return false;
}

function slidestatus($id,$val){
    $.ajax({
       url: '<?php echo base_url();?>dashboard/sliderstatus',
       type: 'POST',
       data: {id: $id, value : $val },
       error: function() {
          alert('Something is wrong, please check internet connection');
       },
       success: function(data) {
         //success
       }
    });
  }

</script>
</body>
</html>
