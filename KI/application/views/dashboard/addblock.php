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
        <form action="<?php echo base_url();?>dashboard/addblocks" role="form" data-toggle="validator" method="post" enctype="multipart/form-data">
          <div class="row" id="blocks">
            <div class="col-md-6">
              <h3>Block 1</h3>
              <div class="boz">
                <div class="form-group">
                <div class="heading"><label>Heading</label><input type="text" value="" class="form-control" name="heading1" required><div class="help-block with-errors"></div></div></div>
                <div class="form-group">
                <div class="description"><label>Description</label><textarea class="form-control" name="description1" required></textarea><div class="help-block with-errors"></div></div></div>
                <div class="form-group">
                <div class="link"><label>Link to page</label><input class="form-control" type="text" name="link1" required><div class="help-block with-errors"></div></div></div>
                <div class="form-group">
                <div class="previmage">
                  <div class="row"> 
                  <div class="col-md-6">
                  <label>Display Image</label><input type="file" accept="image/*" required class="form-control" id="imgadd" name="img1"><div class="help-block with-errors"></div>
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
              <h3>Block 2</h3>
              <div class="boz">
                <div class="form-group">
                <div class="heading"><label>Heading</label><input type="text" value="" class="form-control" name="heading2" required><div class="help-block with-errors"></div></div></div>
                <div class="form-group">
                <div class="description"><label>Description</label><textarea class="form-control" name="description2" required=""></textarea><div class="help-block with-errors"></div></div></div>
                <div class="form-group">
                <div class="link"><label>Link to page</label><input class="form-control" type="text" name="link2" required=""><div class="help-block with-errors"></div></div></div>
                <div class="form-group">
                <div class="previmage">
                  <div class="row"> 
                  <div class="col-md-6">
                  <label>Display Image</label><input type="file" accept="image/*" class="form-control" id="imgadds" name="img2" required><div class="help-block with-errors"></div>
                  </div>
                  <div class="col-md-6">
                  <img src="" id="prev2" class="img img-responsive">
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
        </form>
     </section>
    