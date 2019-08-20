  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider
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
              <h3 class="box-title">Update Slide</h3>
            </div>
            <div class="box-body">
        <form action="<?php echo base_url();?>dashboard/updateslide" id="addslider" method="post" enctype="multipart/form-data">
          
          <label for="">Slider Image</label>
          <div class="input-group" style="margin-bottom: 10px;">
              <span class="input-group-addon"><i class="fa fa-file"></i></span>
              <input type="hidden" name="id" value="<?php echo $slide[0]['id'] ?>">
              <input type="file" class="form-control" name="sdr_img" placeholder="Email">
          </div>

          <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" value="<?php echo $slide[0]['sdr_title'] ?>" name="sdr_title" placeholder="Slider Title">
          </div>

          <div class="form-group">
                <label for="">URL</label>
                <input type="text" class="form-control" value="<?php echo $slide[0]['sdr_url'] ?>" name="sdr_url" placeholder="URL">
          </div>

          <div class="form-group">
                <label for="">Description</label>
                <textarea  name="sdr_des" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $slide[0]['sdr_des'] ?></textarea>
          </div>

        </div>
        <div class="box-footer">
          <input type="submit" class="btn btn-primary pull-right" value="Update" name="sub">
        </div>
      </form>
     </section>
    