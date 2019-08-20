  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product List</h3>
              <div class="addProduct"><a class="btn btn-block btn-primary" href="<?php echo base_url();?>dashboard/addProduct">Add New Product</a></div>
            </div>
            <div class="box-body">
              <table class="table table-bordered table-striped table-responsive-md">
                <thead>
                <tr>
                  <th>Display image</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Show Product</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if (empty($products)) {
                      echo "<tr><td>No Products Added</td><td></td><td></td><td></td><td></td></tr>";
                    }
                    foreach ($products as $product){
                  ?>
                <tr id='pro<?php echo $product['id']; ?>'>
                  <td class="center" style="padding-left: 0;padding-right: 0;"><img src="<?php echo base_url().$product['pro_img1']; ?>" alt="Image Not found" width="120px"></td>
                  <td class="vertical"><?php echo $product['pro_name']; ?></td>
                  <td class="center vertical"><?php echo $product['pro_price']; ?></td>
                  <td class="center vertical">
                    <div class="btn-group" id="status" data-toggle="buttons">
                      <label class="btn btn-default btn-on btn-xs <?php if($product['pro_status']==1){echo "active";} ?> " onclick="changestatus('<?php echo $product['id']; ?>','1')">
                      <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="<?php if($product['pro_status']==1){echo "checked";} ?>">ON</label>
                      <label class="btn btn-default btn-off btn-xs <?php if($product['pro_status']==2){echo "active";} ?>" onclick="changestatus('<?php echo $product['id']; ?>','2')">
                      <input type="radio" value="2" name="multifeatured_module[module_id][status]" checked="<?php if($product['pro_status']==2){echo "checked";} ?>">OFF</label>
                    </div>
                  </td>
                  <td class="center vertical"><a href="<?php echo base_url('dashboard/editProduct?id='.$product['id']);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"> Edit</i></a>&nbsp;
                      <button class="btn btn-primary btn-xs"><i class="fa fa-trash" onclick="prodelete('<?php echo $product['id']; ?>')"> Delete</i></button>
                  </td>
                </tr>
              <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>
