  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SMTP Configuration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SMTP Configuration</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" role="form" data-toggle="validator" class="formadd" action="<?php echo base_url();?>dashboard/smtpConfig" id="smtp" method="post">
              <div class="box-body">

                <div class="row">
                  <div class="col-md-12">
                <div class="form-group">
                  <label >SMTP Host</label>
                  <input type="text" class="form-control" name="smtp_host" placeholder="Enter Host" value="<?php echo $smtp[0]['smtp_host'] ?>" required>
                  <div class="help-block with-errors"></div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label >SMTP Username</label>
                  <input type="text" class="form-control" value="<?php echo $smtp[0]['smtp_username'] ?>" name="smtp_username" placeholder="Enter Username" required>
                  <div class="help-block with-errors"></div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label >SMTP Password</label>
                  <input type="password" class="form-control" value="<?php echo $smtp[0]['smtp_password'] ?>" name="smtp_password" placeholder="Enter Password" required>
                  <div class="help-block with-errors"></div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label >SMTP Port</label>
                  <input type="text" class="form-control" value="<?php echo $smtp[0]['smtp_port'] ?>" name="smtp_port" placeholder="Enter Port" required>
                  <div class="help-block with-errors"></div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label >Type of Encryption</label>
                  <select class="form-control" required="" name="smtp_type">
                    <option value="">Select Any</option>
                    <option <?php if($smtp[0]['smtp_type'] == "ssl") echo"selected" ?> value="ssl">SSL</option>
                    <option <?php if($smtp[0]['smtp_type'] == "tls") echo"selected" ?> value="tls">TLS</option>
                  </select>
                  <div class="help-block with-errors"></div>
                </div>
                </div>
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Save">
                <?php
            if(isset($_GET['suc']) && $_GET['suc'] == '1'){
              echo '<div class="alert alerts alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>Updated Successfully
              </div>';
            }
            elseif (isset($_GET['suc']) && $_GET['suc'] == '2') {
              echo '<div class="alert alerts alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4> Error Updating
              </div>';
            }
            ?>
              </div>
            </form>
          </div>
    </section>
      