<style type="text/css">
  .vertical .item{
    border: #e4e4e4;
    background: #e4e4e4;
    border-radius: 10px;
    padding: 4px 6px;
}
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Setup Phone</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setup Phone</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content" style="margin: 20px;padding:0px;background:white;">
    <div class="box box-primary"></div>
         <div class="box-header with-border">
            <h3 class="box-title">Device List</h3>
        </div>
         <div class="col-md-7 pull-right">
                  <a href="<?php echo base_url('dashboard/setup');?>"><button class="btn btn-primary btn-small pull-right" id="addblock">Add Device</button></a>

          </div>
              <br><br>
            <div class="table-responsive table--no-card m-b-40" style="padding:0px 25px;">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>IMAGE</th>
                                    <th>HEADING</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                      <?php
                          $i=1;
                              if (empty($blk)) {
                                echo "No Blocks Added";
                              }
                              foreach ($blk as $block){
                            ?>
                 
                       <tr>
                        <input type="hidden" value="">
                        <td><img src="<?php echo $block['image'] ?>" style="height:100px;"></td>
                        <td class="vertical"><?php echo $block['Heading'] ?></td>
                        <td class="vertical">
                            <button class="item" data-toggle="tooltip" data-placement="top"
                                title="Edit"><a href="<?php echo base_url('dashboard/set_edit?bid='.$block['id']);?>">
                                    <i class="fa fa-edit"></i></a>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top"
                                title="Delete"><a href="<?php echo base_url('dashboard/rowdeletes?bid='.$block['id']);?>">

                                <i class="fa fa-trash"></i></a>
                            </button></td>
                    </tr>

              <?php $i++; } ?>
            </tbody>
          </table>
        </div>
    </section>

</div>