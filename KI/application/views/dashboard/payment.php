<style type="text/css">
  .vertical .item{
    border: white;
    background: white;
    border-radius: 10px;
    padding: 4px 6px;
}
</style>
<div class="content-wrapper">

    <section class="content-header">
      <h1>
       Payment Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Payment</li>
      </ol>
    </section>

    <section class="content">
      <div class="box box-primary">
          <div class="box-header with-border">
              <h2 class="box-title">Payment Details</h2>
          </div>
        <form role="form" data-toggle="validator" class="formadd" action="" enctype="multipart/form-data"  method="post">
          <div class="box-body">
          <div class="table-responsive table--no-card m-b-40" style="padding:0px 25px;box-sizing:border-box;border-radius:10px;">
              <table class="table table-borderless table-striped table-earning">
                  <thead style="background: #3c8dbc;color: white;">
                      <tr>
                        <th>SL NO:</th>
                        <th>MOBILE NO:</th>
                        <th>AMOUNT</th>
                        <th>STATUS</th>
                        <th>VIEW</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                     $i=1;
                      if (empty($payments)) {
                        echo "<tr><td>No Payment Done</td><td></td><td></td><td></td><td></td></tr>";
                      }
                      foreach ($payments as $payment){

                      ?>
                    <tr>

                        <td><?php echo $i?></td>
                        <td class="vertical"><?php echo $payment['mobile_number']; ?></td>
                        <td class="vertical"><?php echo $payment['amount']; ?></td>
                        <td class="vertical"><?php echo $payment['status']; ?></td>
                        <td class="vertical">
                        <a href="<?php echo base_url();?>dashboard/paymentdetails?id=<?php echo $payment['id'] ?>">
                         <i class="fa fa-eye"></i><button class="item" data-toggle="tooltip" data-placement="top"
                        title="View">
                        </button></a></td>
                    </tr>   
                      <?php $i++; }  ?>
                  </tbody>
              </table>
          </div>
          </div>
        </form>
      </div>
    </section>
</div>