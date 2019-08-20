  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Functional Block
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Homepage Slider</li>
      </ol>
    </section>
    <!-- Main content -->
      <section class="content">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blocks</h3>
            </div>
            <div class="box-body">
        <form action="<?php echo base_url();?>dashboard/updateblock" method="post" enctype="multipart/form-data">
          <div class="row" id="blocks">
            <div class="col-md-6">
              <h3>Block 1</h3>
              <div class="boz">
                <div class="form-group">
                <input type="hidden" value="<?php echo $block[0]['id'] ?>" name="id">
                <div class="heading"><label>Heading</label><input type="text" value="<?php echo $block[0]['blk_heading1'] ?>" class="form-control" name="heading1"></div></div>
                <div class="form-group">
                <div class="description"><label>Description</label><textarea class="form-control" name="description1"><?php echo $block[0]['blk_description1'] ?></textarea></div></div>
                <div class="form-group">
                <div class="link"><label>Link to page</label><input class="form-control" type="text" value="<?php echo $block[0]['blk_link1'] ?>" name="link1"></div></div>
                <div class="form-group">
                <div class="previmage">
                  <div class="row"> 
                  <div class="col-md-6">
                  <label>Display Image</label><input type="file" accept="image/*" class="form-control" id="imgadd" name="img1">
                  </div>
                  <div class="col-md-6">
                  <img src="<?php echo base_url().$block[0]['blk_img1'] ?>" id="prev1" class="img img-responsive">
                </div>
                </div>
              </div>
              </div>
              </div>
            </div>
            <div class="col-md-6">
              <h3>Block 2</h3>
              <div class="boz">
                <div class="form-group">
                <div class="heading"><label>Heading</label><input type="text" value="<?php echo $block[0]['blk_heading2'] ?>" class="form-control" name="heading2"></div></div>
                <div class="form-group">
                <div class="description"><label>Description</label><textarea class="form-control" name="description2"><?php echo $block[0]['blk_description2'] ?></textarea></div></div>
                <div class="form-group">
                <div class="link"><label>Link to page</label><input class="form-control" type="text" value="<?php echo $block[0]['blk_link2'] ?>" name="link2"></div></div>
                <div class="form-group">
                <div class="previmage">
                  <div class="row"> 
                  <div class="col-md-6">
                  <label>Display Image</label><input type="file" accept="image/*" class="form-control" id="imgadds" name="img2">
                  </div>
                  <div class="col-md-6">
                  <img src="<?php echo base_url().$block[0]['blk_img2'] ?>" id="prev2" class="img img-responsive">
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          </div>
        </div>
        <div class="box-footer">
          <input type="submit" class="btn btn-primary" value="save" name="sub">
        </div>
        <?php
          if(isset($_GET['suc']) && $_GET['suc'] == '1'){
            echo '<div class="alert alerts alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4> Block Updated Successfully
            </div>';
          }
          elseif (isset($_GET['suc']) && $_GET['suc'] == '2') {
            echo '<div class="alert alerts alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Alert!</h4>Block Update Error
            </div>';
          }
          ?>
        </form>
     </section>
    