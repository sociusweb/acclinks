<div class="content-wrapper">

    <section class="content-header">
      <h1>
        Setup Phone
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setup Phone</li>
      </ol>

    </section>
    

    <!-- Main content -->
    <section class="content">
    <div class="box box-primary">
         <div class="box-header with-border">
              <h3 class="box-title">Setup My Phone</h3>
        </div>
        <br><br>
        <div class="col-md-12 text-center">
              <h3 style="width: 100px;display: inline;text-align: center;">     
        </div>

    <form role="form" data-toggle="validator" class="formadd"  action="<?php echo base_url();?>dashboard/set_update" enctype="multipart/form-data"  method="post">
    <input type="hidden" value="<?php echo $blk[0]['id'] ?>" name="id">
        <div class="box-body">
          
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Heading</label>
                            <input type="text"  value="<?php echo $blk[0]['Heading'] ?>" class="form-control" name="Heading" placeholder="Enter heading" required>
                                <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        <div class="col-md-12">
                            <div class="previmage">
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Display Image</label>
                                                <input type="file" accept="image/*" id="imgadd" name="image">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="help-block with-errors">
                                                   <img src="<?php echo $blk[0]['image'] ?>" class="img img-responsive" style="height: 200px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="" id="prev1" class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="box-body pad">
                                <textarea id="addinfo" name="discription"placeholder="Place some text here" required 
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> <?php echo $blk[0]['discription'] ?></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                     </div>
             <input type="submit" class="btn btn-primary" name="login" value="Save" style="margin-left:20px;" />
        </div>
   
        </div>
        
    </section>
 </form>
</div>