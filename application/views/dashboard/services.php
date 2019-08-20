
    <style>
    h3 {
    font-size: 16px;
    text-align: center;
    }
    </style>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Our Service
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Service</li>
      </ol>
    </section>
    <!-- Main content -->

    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Service Page Contents</h3>
        </div>

        <div class="box-body">
          <form action="<?php echo base_url();?>dashboard/update_service" role="form" data-toggle="validator" method="post" enctype="multipart/form-data">
            <div class="row" id="blocks">
                <div class="col-md-6">
                    <div class="boz">
                     <h3 class="box-title">Blocks1</h3>
                    </div>
                    <div class="boz">
                      <div class="form-group">
                        <div class="heading">
                          <label>Heading</label>
                          <input type="text" value="<?php echo $service[0]['service_head1'] ?>" class="form-control" name="service_head1" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="description">
                          <label>Description</label>
                          <textarea class="form-control" name="service_des1" required><?php echo $service[0]['service_des1'] ?></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>               
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="boz">
                       <h3 class="box-title">Blocks2</h3>
                  </div>
                  <div class="boz">
                      <div class="form-group">
                        <div class="heading">
                          <label>Heading</label>
                          <input type="text" value="<?php echo $service[0]['service_head2'] ?>" class="form-control" name="service_head2" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="description">
                          <label>Description</label>
                          <textarea class="form-control" name="service_des2" required=""><?php echo $service[0]['service_des2'] ?></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                  </div>
                </div>
            </div> 
            <div class="row" id="blocks">
                  <div class="col-md-6">
                    <div class="boz">    
                      <h3 class="box-title">Blocks3</h3>
                    </div>
                    <div class="boz">
                        <div class="form-group">
                          <div class="heading">
                            <label>Heading</label>
                            <input type="text" value="<?php echo $service[0]['service_head3'] ?>" class="form-control" name="service_head3" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="description">
                            <label>Description</label>
                            <textarea class="form-control" name="service_des3" required=""><?php echo $service[0]['service_des3'] ?></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                    </div>
                  </div>
              

                 <div class="col-md-6">
                    <div class="boz">
                     <h3 class="box-title">Blocks4</h3>
                    </div>

                    <div class="boz">
                        <div class="form-group">
                          <div class="heading">
                            <label>Heading</label>
                            <input type="text" value="<?php echo $service[0]['service_head4'] ?>" class="form-control" name="service_head4" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="description">
                            <label>Description</label>
                            <textarea class="form-control" name="service_des4" required=""><?php echo $service[0]['service_des4'] ?></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>   
                    </div>
                 </div>
            </div>
            <div class="row" id="blocks">
                  <div class="col-md-6">
                    <div class="boz">
                    <h3 class="box-title">Blocks5</h3>
                    </div>

                    <div class="boz">
                        <div class="form-group">
                          <div class="heading">
                            <label>Heading</label>
                            <input type="text" value="<?php echo $service[0]['service_head5'] ?>" class="form-control" name="service_head5" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="description">
                            <label>Description</label>
                            <textarea class="form-control" name="service_des5" required=""><?php echo $service[0]['service_des5'] ?></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>                
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="boz">
                     <h3 class="box-title">Blocks6</h3>
                    </div>
                    <div class="boz">
                          <div class="form-group">
                              <div class="heading">
                                <label>Heading</label>
                                <input type="text" value="<?php echo $service[0]['service_head6'] ?>" class="form-control" name="service_head6" required>
                                <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="description">
                              <label>Description</label>
                              <textarea class="form-control" name="service_des6" required=""><?php echo $service[0]['service_des6'] ?></textarea>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                    </div>
                  </div>
            </div>
            <div class="row" id="blocks">
                <div class="col-md-6">
                      <div class="boz">
                     <h3 class="box-title">Blocks7</h3>
                    </div>
                
                    <div class="boz">
                      <div class="form-group">
                        <div class="heading">
                          <label>Heading</label>
                          <input type="text" value="<?php echo $service[0]['service_head7'] ?>" class="form-control" name="service_head7" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="description">
                          <label>Description</label>
                          <textarea class="form-control" name="service_des7" required=""><?php echo $service[0]['service_des7'] ?></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="boz">
                     <h3 class="box-title">Blocks8</h3>
                    </div>
               
                  <div class="boz">
                    <div class="form-group">
                      <div class="heading">
                        <label>Heading</label>
                        <input type="text" value="<?php echo $service[0]['service_head8'] ?>" class="form-control" name="service_head8" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="description">
                        <label>Description</label>
                        <textarea class="form-control" name="service_des8" required=""><?php echo $service[0]['service_des8'] ?></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row" id="blocks">  
              <div class="col-md-6">
                  <div class="boz">
                     <h3 class="box-title">Blocks9</h3>
                    </div>
                <div class="boz">
                  <div class="form-group">
                    <div class="heading">
                      <label>Heading</label>
                      <input type="text" value="<?php echo $service[0]['service_head9'] ?>" class="form-control" name="service_head9" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="description">
                      <label>Description</label>
                      <textarea class="form-control" name="service_des9" required><?php echo $service[0]['service_des9'] ?>
                      </textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div> 
              </div>

              <div class="col-md-6">
                 <div class="boz">
                     <h3 class="box-title">Blocks10</h3>
                    </div>
                <div class="boz">
                  <div class="form-group">
                    <div class="heading">
                      <label>Heading</label>
                      <input type="text" value="<?php echo $service[0]['service_head10'] ?>" class="form-control" name="service_head10" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="description">
                      <label>Description</label>
                      <textarea class="form-control" name="service_des10" required><?php echo $service[0]['service_des10'] ?></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
     
                </div>
              </div>
            </div>
            <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="save" name="sub" />
            </div>
          </form>
        </div>
      </div>
    </section>
    