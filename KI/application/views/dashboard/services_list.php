  <!-- Content Wrapper. Contains page content -->
  <style>
    .content-wrapper{
          min-height: 1495px;
        }
      .row {
    margin-right: 0px;
    margin-left: 0px;
    }



  </style>
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
            <?php
                $i=1;
                    if (empty($block)) {
                      //echo "No Blocks Added";
                    }
                    foreach ($blk as $block){
                  ?>
                   <!--<div class="row" id="row<?php echo $blk['id'] ?>"<-->
            <div class="col-md-12 text-center">
                  <h3 style="width: 100px;display: inline;text-align: center;">
                  <a href="<?php echo base_url('dashboard/our_services');?>">
                    <button class="btn btn-primary btn-small pull-right" id="addblock ">Add Row</button><br><br>
                  </a></h3>
                  <h3 style="width: 100px;display: inline;text-align: center;">
                  </h3></div>

      

                <div class="col-md-7 pull-right" style="padding-right: 0px;">
                  <a href="<?php echo base_url('dashboard/services_edit?bid='.$block['id']);?>"><button class="btn btn-primary btn-small pull-right" id="addblock">Edit Row</button></a>
</div>


                 
          <div class="box-body">
        <form action="" role="form" data-toggle="validator" method="post" enctype="multipart/form-data">

          <div class="row" id="blocks">
            <div class="col-md-6">
                <center><h3>Block 1</h3></center>
                <div class="boz">
                
                    <div class="form-group">
                      <div class="heading">
                        <label>Heading</label>
                  <input type="text" value="<?php echo $block['service_head1'] ?>"class="form-control" disabled="" name="service_head1" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div></div>

                    <div class="form-group">
                      <div class="description">
                        <label>Description</label>
                        <textarea class="form-control" name="service_des1" disabled="" required><?php echo $block['service_des1']?></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                
               
            </div> <div class="row" id="blocks">
            <div class="col-md-6">
               <center><h3>Block 2</h3> </center>
              <div class="boz">
                  <div class="form-group">
                    <div class="heading">
                      <label>Heading</label>
                      <input type="text" value="<?php echo $block['service_head2'] ?>"class="form-control" disabled="" name="service_head2" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="description">
                      <label>Description</label>
                      <textarea class="form-control" name="service_des2"  disabled="" required=""><?php echo $block['service_des2'] ?></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
        
            </div>
          </div>
        
          
              <div class="row" id="blocks">
                  <div class="col-md-6">
                <div class="box-header with-border">
                 
                   <center><h3 class="box-title">Blocks3</h3> </center>
            
                <div class="boz">
                  <div class="form-group">
                    <div class="heading">
                      <label>Heading</label>
                      <input type="text" value="<?php echo $block['service_head3'] ?>" class="form-control"  disabled=""name="service_head3" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="description">
                      <label>Description</label>
                      <textarea class="form-control" name="service_des3" disabled="" required=""><?php echo $block['service_des3'] ?></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>

                <div class="box-header with-border">
                   <div class="col-md-6">
                 <center> <h3 class="box-title">Blocks4</h3> </center>
               

            <div class="boz">
                <div class="form-group">
                  <div class="heading">
                    <label>Heading</label>
                    <input type="text" value="<?php echo $block['service_head4'] ?>" value="" class="form-control"  disabled="" name="service_head4" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="description">
                    <label>Description</label>
                    <textarea class="form-control" name="service_des4" disabled="" required=""><?php echo $block['service_des4'] ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>   
            </div>
          </div>
        </div>
         <div class="row" id="blocks">
                  <div class="col-md-6">
            <div class="box-header with-border">

           <center>  <h3 class="box-title">Blocks5</h3> </center>
            </div>

              <div class="boz">
                  <div class="form-group">
                    <div class="heading">
                      <label>Heading</label>
                      <input type="text" value="<?php echo $block['service_head5'] ?>" class="form-control" disabled="" name="service_head5"  required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="description">
                      <label>Description</label>
                      <textarea class="form-control" name="service_des5"  disabled="" required=""><?php echo $block['service_des5'] ?></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>                
              </div>
            </div>
              <center><h3 class="box-title">Blocks6</h3> </center>
           <div class="col-md-6">
           <div class="boz">
                <div class="form-group">
                    <div class="heading">
                      <label>Heading</label>
                      <input type="text"  class="form-control" value="<?php echo $block['service_head6'] ?>"  disabled=""name="service_head6" required>
                      <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="description">
                    <label>Description</label>
                    <textarea class="form-control" name="service_des6"   disabled=""required=""><?php echo $block['service_des6'] ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
            </div>
                 <div class="row" id="blocks">
                  <div class="col-md-6">
                 <center><h3 class="box-title">Blocks7</h3> </center>
            
              <div class="boz">
                <div class="form-group">
                  <div class="heading">
                    <label>Heading</label>
                    <input type="text"  class="form-control" disabled="" name="service_head7" value="<?php echo $block['service_head7'] ?>" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="description">
                    <label>Description</label>
                    <textarea class="form-control" name="service_des7"disabled="" required=""> <?php echo $block['service_des7'] ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                
              </div>
             
               <center><h3 class="box-title">Blocks8</h3> </center>
           
            <div class="boz">
                <div class="form-group">
                  <div class="heading">
                    <label>Heading</label>
                    <input type="text"  class="form-control" name="service_head8" value="<?php echo $block['service_head8'] ?>" disabled="" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="description">
                    <label>Description</label>
                    <textarea class="form-control" name="service_des8" disabled="" required=""> <?php echo $block['service_des8'] ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
            </div>
          </div>

            <div class="col-md-6">
              <center><h3 class="box-title">Blocks</h3> </center>
              <div class="boz">
                <div class="form-group">
                  <div class="heading">
                    <label>Heading</label>
                    <input type="text"  class="form-control" value="<?php echo $block['service_head9'] ?>"  disabled=""name="service_head9" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="description">
                    <label>Description</label>
                    <textarea class="form-control" name="service_des9"   disabled=""required><?php echo $block['service_des9'] ?>
                    </textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div> 
            </div>

            <div class="col-md-6">
            <center>   <h3>Block 10</h3> </center>
              <div class="boz">
                <div class="form-group">
                  <div class="heading">
                    <label>Heading</label>
                    <input type="text"   class="form-control" name="service_head10"  value="<?php echo $block['service_head10'] ?>" disabled=""required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="description">
                    <label>Description</label>
                    <textarea class="form-control" name="service_des10"  disabled="" required><?php echo $block['service_des10'] ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
  
              </div>
               </div></div></div></div>
            </div>
  <div class="box box-primary"></div>
       <?php $i++; } ?>
       <!--<div class="box-footer">
          <input type="submit" class="btn btn-primary" value="save" name="sub">
        </div><-->
        </form>
     </section>
    