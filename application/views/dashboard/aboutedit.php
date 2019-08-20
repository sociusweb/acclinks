   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          About Page
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">About page</li>
        </ol>
      </section>

    <!-- Main content -->
      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>

        <div class="box-body">           
        <form action="<?php echo base_url();?>dashboard/update_about" role="form" data-toggle="validator" method="post" enctype="multipart/form-data">
          <div class="row" id="blocks">
                <div class="col-md-6">
                  <h3>Section 1</h3>
                  <div class="boz">
                      <div class="form-group">
                        <div class="heading">
                          <label>Heading</label>
                          <input type="text" value="<?php echo $about[0]['heading_1'] ?>" class="form-control" name="heading_1">
                          <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="description">
                            <label>Description</label>
                            <textarea class="form-control" name="description_1"><?php echo $about[0]['description_1'] ?></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>      
                     

                      <div class="form-group">
                        <div class="previmage">
                          <div class="row"> 
                            <div class="col-md-6">
                              <label>Display Image</label>
                              <input type="file" accept="image/*"  class="form-control" id="imgadd" name="image_1">
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6">
                              <img src="<?php echo base_url().$about[0]['image_1'] ?>" id="prev1" class="img img-responsive" style="height: 200px">
                            </div>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>

                <div class="col-md-6">
                  <h3>Section 2</h3>
                  <div class="boz">
                      <div class="form-group">
                        <div class="heading">
                          <label>Heading</label>
                          <input type="text" value="<?php echo $about[0]['heading_2'] ?>" class="form-control" name="heading_2">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="description">
                          <label>Description</label>
                          <textarea class="form-control" name="description_2"><?php echo 
                          $about[0]['description_2'] ?>       
                          </textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                
                      <div class="form-group">
                        <div class="previmage">
                            <div class="row"> 
                              <div class="col-md-6">
                                <label>Display Image</label>
                                <input type="file" accept="image/*" class="form-control" id="imgadds" name="image_2">
                                <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-md-6">
                                <img src="<?php echo base_url().$about[0]['image_2'] ?>" id="prev2" class="img img-responsive"style="height: 200px">
                              </div>
                            </div>
                        </div>
                      </div>

                  </div>
                </div>

                <div class="col-md-6">
                  <h3>Section 3</h3>
                  <div class="boz">
                      <div class="form-group">
                        <div class="heading">
                          <label>Heading</label>
                          <input type="text" value="<?php echo $about[0]['heading_3'] ?>" class="form-control" name="heading_3" >
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="description">
                          <label>Description</label>
                          <textarea class="form-control" name="description_3"><?php echo $about[0]['description_3'] ?>                
                          </textarea><div class="help-block with-errors"></div>
                        </div>
                      </div>
    
                      <div class="form-group">
                        <div class="previmage">
                          <div class="row"> 
                            <div class="col-md-6">
                              <label>Display Image</label>
                              <input type="file" accept="image/*" class="form-control" id="imgaddss" name="image_3" >
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6">
                              <img src="<?php echo base_url().$about[0]['image_3'] ?>" id="prev3" class="img img-responsive" style="height: 200px">
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
        </form>
        </div>
        </div>
     </section>
     </div>
    