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
              <div class="col-md-7 pull-right" style="padding-right: 0px;">
                  <a href="<?php echo base_url('dashboard/addblock');?>"><button class="btn btn-primary btn-small pull-right" id="addblock">Add Block</button></a>
            </div>
            </div>
            <div class="box-body">
              <?php
                $i=1;
                    if (empty($block)) {
                      echo "No Blocks Added";
                    }
                    foreach ($block as $blk){
                  ?>
          <div class="row" id="row<?php echo $blk['id'] ?>">
            <div class="col-md-12 text-center">
                  <h3 style="width: 100px;display: inline;text-align: center;">ROW <?php echo $i; ?></h3>
                  <a href="<?php echo base_url('dashboard/editblock?bid='.$blk['id']);?>"><button class="btn btn-primary btn-small pull-right" id="addblock">Edit Row</button></a>
                  <button class="btn btn-danger btn-small pull-right" style="margin-right: 5px;" onclick="rowdelete(<?php echo $blk['id'] ?>)">Delete Row</button>
            </div>
            <div class="col-md-6">
              <h3>Block 1</h3>
              <div class="form-group">
              <label>Heading</label>
              <input type="text" name="" disabled="" value="<?php echo $blk['blk_heading1'] ?>" class="form-control">
              </div>
              <div class="form-group">
              <label>Description</label>
              <textarea disabled="" class="form-control"><?php echo $blk['blk_description1'] ?></textarea>
              </div>
              <div class="form-group">
                <label>Image</label>
                <img src="<?php echo base_url().$blk['blk_img1'] ?>" class="img img-responsive" style="height: 200px">
              </div>
              <div class="form-group">
              <label>View More Url</label>
              <input type="text" name="" disabled="" value="<?php echo $blk['blk_link1'] ?>" class="form-control">
              </div>
            </div>
            
            <div class="col-md-6">
              <h3>Block 2</h3>
              <div class="form-group">
              <label>Heading</label>
              <input type="text" name="" disabled="" value="<?php echo $blk['blk_heading2'] ?>" class="form-control">
              </div>
              <div class="form-group">
              <label>Description</label>
              <textarea disabled="" class="form-control"><?php echo $blk['blk_description2'] ?></textarea>
              </div>
              <div class="form-group">
                <label>Image</label>
                <img src="<?php echo base_url().$blk['blk_img2'] ?>" class="img img-responsive" style="height: 200px">
              </div>
              <div class="form-group">
              <label>View More Url</label>
              <input type="text" name="" disabled="" value="<?php echo $blk['blk_link2'] ?>" class="form-control">
              </div>
            </div>
          </div>
           <hr style="border: inset;border-top: 6px solid #3d8dbc;">
        <?php $i++; } ?>
        </div>
     </section>
    