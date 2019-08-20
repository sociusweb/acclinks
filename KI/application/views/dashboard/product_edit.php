<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       Add Products
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Add Products</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
            <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Product Details</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url();?>dashboard/proupdate" enctype="multipart/form-data" id="proadd" method="post">
            <div class="box-body">

              <div class="row">
                <div class="col-md-6">
              <div class="form-group">
                <label >Product Name</label>
                <input type="hidden" name="id" value="<?php echo $product[0]['id']; ?>">
                <input type="text" class="form-control" value="<?php echo $product[0]['pro_name']; ?>" name="pro_name" placeholder="Enter product name">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label >Brand</label>
                <input type="text" class="form-control" value="<?php echo $product[0]['pro_brand']; ?>" name="pro_brand" placeholder="Enter Brand Name">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label >Price</label>
                <input type="text" class="form-control" value="<?php echo $product[0]['pro_price']; ?>" name="pro_price" placeholder="Enter Price">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label >Colours</label>
                <input type="text" class="form-control" value="<?php echo $product[0]['pro_color']; ?>" name="pro_color" placeholder="Enter Colours">
              </div>
              </div>
              <div class="col-md-12">
                <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Key Features</a></li>
            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Technical Specs</a></li>
            <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Additional Information</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Feature 1</label>
                    <input type="text" class="form-control" value="<?php echo $product[0]['pro_fe1']; ?>" name="pro_fe1" placeholder="Enter Feature 1">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Feature 2</label>
                    <input type="text" class="form-control" value="<?php echo $product[0]['pro_fe2']; ?>" name="pro_fe2" placeholder="Enter Feature 2">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Feature 3</label>
                    <input type="text" class="form-control" value="<?php echo $product[0]['pro_fe3']; ?>" name="pro_fe3" placeholder="Enter Feature 3">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Feature 4</label>
                    <input type="text" class="form-control" value="<?php echo $product[0]['pro_fe4']; ?>" name="pro_fe4" placeholder="Enter Feature 4">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label >OS</label>
                    <input type="text" class="form-control" value="<?php echo $product[0]['pro_os']; ?>" name="pro_os" placeholder="Enter OS">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >RAM</label>
                    <input type="text" class="form-control" name="pro_ram" value="<?php echo $product[0]['pro_ram']; ?>" placeholder="Enter RAM">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Product Dimensions</label>
                    <input type="text" class="form-control" name="pro_dime" value="<?php echo $product[0]['pro_dimensions']; ?>" placeholder="Enter Product Dimensions">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Battery</label>
                    <input type="text" class="form-control" name="pro_battery" value="<?php echo $product[0]['pro_battery']; ?>" placeholder="Enter Battery Specification">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Item model number</label>
                    <input type="text" class="form-control" name="pro_model" value="<?php echo $product[0]['pro_model']; ?>" placeholder="Enter Item model number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Wireless communication technologies</label>
                    <input type="text" class="form-control" name="pro_comm" value="<?php echo $product[0]['pro_comm']; ?>" placeholder="Enter Wireless communication technologies">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Connectivity technologies</label>
                    <textarea class="form-control" name="pro_tech" placeholder="Enter Connectivity technologies"><?php echo $product[0]['pro_connectivity']; ?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label >Special features</label>
                    <textarea  class="form-control" name="pro_special" placeholder="Enter Special features"><?php echo $product[0]['pro_special']; ?></textarea>
                  </div>
                </div>
            </div>
            </div>
            <div class="tab-pane" id="tab_3">
              <div class="box-body pad">
              <textarea id="addinfo" name="pro_addinfo" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product[0]['pro_addinfo']; ?></textarea>

          </div>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
              </div>
            </div>

<!--                 <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div> -->
              <div class="row">
                <div class="col-md-3">
                  <label >Add Product Images</label>
                  <p class="help-block" style="text-align: center;">please Select or drag and drop Multiple images upto 8</p>
                </div>
              <div class="col-md-9">
                  <div class="row">
                      <div class="col-xs-12 col-md-12">
                          <div class="col-md-12 col-lg-12 col-xs-12" id="columns">
                              <h3 class="form-label">Select the images</h3>
                              <div id="uploads"><!-- Upload Content --></div>
                          </div>
                          <div class="clearfix"></div>
                          <button class="btn btn-danger  pull-left" id="reset" type="button" ><i class="fa fa-history"></i> Clear</button>
                      </div>
                  </div>



              </div>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Update Product">

                          <?php
          if(isset($_GET['suc']) && $_GET['suc'] == '1'){
            echo '<div class="alert alerts alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4> Product Updated Successfully
            </div>';
          }
          elseif (isset($_GET['suc']) && $_GET['suc'] == '2') {
            echo '<div class="alert alerts alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Alert!</h4>Product Update Error
            </div>';
          }
          ?>
            </div>
          </form>
        </div>
  </section>
