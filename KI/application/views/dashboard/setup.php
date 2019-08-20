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
              <h3 class="box-title">Device List</h3>
        </div>
    <form role="form" data-toggle="validator" class="formadd" action="save_setup" enctype="multipart/form-data"  method="post">
        <div class="box-body">
          
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Heading</label>
                          <input type="text" class="form-control" name="Heading" placeholder="Enter heading" required>
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
                                <input type="file" accept="image/*" required class="form-control" id="imgadd" name="image">
                                <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6">
                                <img src="" id="prev1" class="img img-responsive">
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="box-body pad">
                        <label>Description</label>
                          <textarea id="addinfo" name="discription" placeholder="Place some text here" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
               </div>
              <input type="submit" class="btn btn-primary" name="login" value="Save" style="margin-left:20px;"/>
        </div>
    
        </form>
        </div>
    </section>

</div>