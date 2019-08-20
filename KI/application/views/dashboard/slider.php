  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Homepage Slider
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
              <h3 class="box-title">Slider</h3>
              <a href="<?php echo base_url('dashboard/addslider')?>" class="btn btn-primary pull-right" >ADD New Slide</a>
            </div>
            <div class="box-body">
         <form role="form" class="formadd" enctype="multipart/form-data" id="proadd" method="post">
          <table class="table table-responsive table-bordered table-condensed">
            <thead>
              <tr>
                <!-- <td>#</td> -->
                <td>Image</td>
                <td>Title</td>
                <td>Status</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <?php
                    if (empty($slider)) {
                      echo "<tr><td>No Products Added</td><td></td><td></td><td></td><td></td></tr>";
                    }
                    foreach ($slider as $slide){
              ?>
              <tr id="sdr<?php echo $slide['id']; ?>">
                <!-- <td width="5%">1</td> -->
                <td width="25%" class="center"><img src="<?php echo base_url().$slide['sdr_img']; ?>" height="120px"></td>
                <td width="25%" class="vertical"><?php echo $slide['sdr_title']; ?></td>
                <td width="20%" class="center vertical">
                  <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default btn-on btn-xs <?php if($slide['sdr_status']==1){echo "active";} ?> " onclick="slidestatus('<?php echo $slide['id']; ?>','1')">
                      <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="<?php if($slide['sdr_status']==1){echo "checked";} ?>">ON</label>
                      <label class="btn btn-default btn-off btn-xs <?php if($slide['sdr_status']==2){echo "active";} ?>" onclick="slidestatus('<?php echo $slide['id']; ?>','2')">
                      <input type="radio" value="2" name="multifeatured_module[module_id][status]" checked="<?php if($slide['sdr_status']==2){echo "checked";} ?>">OFF</label>
                    </div>
                </td>
                <td width="25%" class="center vertical"><a href="<?php echo base_url('dashboard/editslide?sid='.$slide['id']);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"> Edit</i></a>&nbsp;<button class="btn btn-primary btn-xs" onclick="return deleteslide('<?php echo $slide['id']; ?>')"><i class="fa fa-trash"> Delete</i></button></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </form>
          <!-- /.row -->
        </div>

          </div>
     </section>
    