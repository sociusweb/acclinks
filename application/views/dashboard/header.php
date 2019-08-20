<?php
function get_time_ago( $time )
{
    $time_difference = time() - $time;
    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );
    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ACCLINK DASHBOARD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link href="<?php echo base_url();?>assets/frontend/img/favicon.png" rel="icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


 <!-- Custom -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/dist/css/slider.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/dist/css/responsive.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/dist/css/style.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/dist/css/jquery-confirm.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Acclink</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li style="margin: 10px 10px 0 0;color: white;">Last Login : <?php echo get_time_ago( $time )?></li>
        </ul>
      </div>
    </nav>
  </header>



  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if(isset($page)&&$page=='home'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Homepage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page_tree)&&$page_tree=='block'){echo 'active';} ?> "><a href="<?php echo base_url();?>dashboard/block"><i class="fa fa-square-o"></i>View Block</a></li>
            <li class="<?php if(isset($page_tree)&&$page_tree=='addblock'){echo 'active';} ?> "><a href="<?php echo base_url();?>dashboard/addblock"><i class="fa fa-plus"></i>Add Block</a></li>
          </ul>
        </li>
        <li class="<?php if(isset($page)&&$page=='slider'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Homepage Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page_tree)&&$page_tree=='slider'){echo 'active';} ?>"><a href="<?php echo base_url();?>dashboard/slider"><i class="fa fa-picture-o"></i>Slides</a></li>
            <li class="<?php if(isset($page_tree)&&$page_tree=='addslider'){echo 'active';} ?>"><a href="<?php echo base_url();?>dashboard/addslider"><i class="fa fa-plus"></i> Add Slides</a></li>
          </ul>
        </li>
        <li class="<?php if(isset($page)&&$page=='product'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-edit"></i><span>Product Update</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page_tree)&&$page_tree=='view'){echo 'active';} ?>"><a href="<?php echo base_url();?>dashboard/product"><i class="fa fa-mobile"></i> View products</a></li>
            <li class="<?php if(isset($page_tree)&&$page_tree=='add'){echo 'active';} ?>"><a href="<?php echo base_url();?>dashboard/addProduct"><i class="fa fa-plus-square"></i> Add Products</a></li>
          </ul>
        </li>

        <li class="<?php if(isset($page)&&$page=='setup'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-phone"></i><span>Setup Device</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page_tree)&&$page_tree=='view'){echo 'active';} ?>"><a href="<?php echo base_url();?>dashboard/setuplist"><i class="fa fa-mobile"></i> View Device</a></li>
            <li class="<?php if(isset($page_tree)&&$page_tree=='add'){echo 'active';} ?>"><a href="<?php echo base_url();?>dashboard/setup"><i class="fa fa-plus-square"></i> Add Device</a></li>
          </ul>
        </li>

        
        <li><a href="<?php echo base_url();?>dashboard/about"><i class="fa fa-envelope-o"></i> <span>About Page</span></a></li>
        <li><a href="<?php echo base_url();?>dashboard/payment"><i class="fa fa-picture-o"></i> <span>Recharge History</span></a></li>
        <li><a href="<?php echo base_url();?>dashboard/service"><i class="fa fa-envelope-o"></i> <span>Service Page</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url();?>dashboard/smtp"><i class="fa fa-envelope-o"></i> <span>SMTP Configuration</span></a></li>
        <li><a href="" data-toggle="modal" data-target="#modal-default"><i class="fa fa-key"></i> <span>Change password</span></a></li>
        <li><a class="logout" data-title="Confirm" href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!--change password model  -->

            <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change Password</h4>
              </div>
              <div class="modal-body">
                <form role="form" data-toggle="validator" id="passchg" style="margin-top: -40px;">
                <div class="form-group marginbtn">
                <label class="col-sm-4 control-label">Old Password</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="oldpassword" id="oldpassword" style="margin-bottom: 10px;" required>
                <div class="help-block with-errors"></div>
                </div>
                </div>

                <div class="form-group marginbtn">
                <label class="col-sm-4 control-label">New password</label>
                <div class="col-sm-8">
                <input type="password" required class="form-control" name="newpassword" id="pwd" style="margin-bottom: 20px;">
                <div class="help-block with-errors"></div>

                </div>
                </div>
                  <div class="tip">
                      <div id="pwd_strength_wrap">
                      <div id="passwordDescription">Password not entered</div>
                      <div id="passwordStrength" class="strength0"></div>
                      <div id="pswd_info">
                              <strong>Strong Password Tips:</strong>
                              <ul>
                                      <li class="invalid" id="length">At least 6 characters</li>
                                      <li class="invalid" id="pnum">At least one number</li>
                                      <li class="invalid" id="capital">At least one lowercase &amp; one uppercase letter</li>
                                      <li class="invalid" id="spchar">At least one special character</li>
                              </ul>
                      </div><!-- END pswd_info -->
                    </div>
                  </div>

                <div class="form-group marginbtn">
                <label class="col-sm-4 control-label">Confirm password</label>
                <div class="col-sm-8">
                <input type="password" required data-match="#pwd" data-match-error="Whoops, these don't match" class="form-control" name="cnfpassword">
                <div class="help-block with-errors"></div>
              </div>
              </div>
              </div>
              <div class="modal-footer" >
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="chg" class="btn btn-primary">Change Password</button>
              </div>
              </form>
            </div>
            <span id="result">
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
     <!--change password model END  -->