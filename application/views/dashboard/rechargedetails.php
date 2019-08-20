<style>


#data td{
  font-size: 17px;
  padding: 15px 20px;
  margin-bottom: 30px;
  min-height: 200px;
  vertical-align:unset;
}     

</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Recharge Details</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content" style="margin: 20px;padding:0px;background:white;">
      <div class="box box-primary" style="min-height:78vh;">
        <div class="">
          <h3 style="margin-left:15px;">Recharge Details given below:</h3>
        </div>
          <table id="data">

                <tr>
                    <td><b>First Name</b></td>
                    <td>: <?php echo $paydetail[0]['payer_first_name'] ?></td>
                </tr>

                <tr>
                    <td><b>Last Name</b></td>
                    <td>: <?php echo $paydetail[0]['payer_last_name'] ?></td>

                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td>: <?php $address = json_decode($paydetail[0]['address'],true);
                      echo $address['line1'].', '.$address['city'].', '.$address['state'].', postal code: '.$address['postal_code'];
                     ?></td>
                </tr>
                <tr>
                    <td><b>Time</b></td>
                    <td>: <?php echo $paydetail[0]['create_date'] ?></td>
                </tr>
                <tr>
                    <td><b>Paypal Id</b></td>
                    <td>: <?php echo $paydetail[0]['payer_paypal_id'] ?></td>
                </tr>
                <tr>
                    <td><b>Mobile No:</b></td>
                    <td>: <?php echo $paydetail[0]['mobile_number'] ?></td>
                </tr>
                <tr>
                    <td><b>Amount</b></td>
                    <td>: <?php echo $paydetail[0]['amount'] ?></td>

                </tr>
                <tr>
                    <td><b>Payment Id</b></td>
                    <td>: <?php echo $paydetail[0]['paymentID'] ?></td>
                </tr>
          </table>

      </div>
    
    </section>

</div>