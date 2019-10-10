<style>
    .tabs-left > li > a:hover, .tabs-left > li > a:focus,.tabs-left > li > a.active{
        background-color: #4392cd;
        border-left: 0.2em solid #4392cd;
        padding-left: 1.9em;
        margin-right: 0.1em;
    }
    #page-content-wrapper .component-wrapper{
        border: none;
        box-shadow: none;
    }
    #pay-button .btn-start-order{
        background: #4392cd;
        color: white;
        margin: 25px;
    }
    .tabs-left > li > a{
        padding:1em;
    }
</style>
      <div class="container-fluid">
        <div class="support_contact">
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container">
                    <div class="row component-wrapper">
                        <div class="col-xs-2" style="padding:0;box-sizing: border-box;
                        border: 1px solid #c1bbbb;">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left">
                                <!-- <li ><a href="#signal" data-toggle="tab" class="active show">Credit Card</a></li> -->
                                <li><a href="#network" data-toggle="tab" class="active">Paypal</a></li>
                                <li><a href="#alipay" data-toggle="tab">Alipay</a></li>
                                <li><a href="#wechat" data-toggle="tab">Wechat Pay</a></li>
                            </ul>
                        </div>

                        <div class="col-xs-10" style="box-sizing: border-box;border: 1px solid #d6d1d1;padding-bottom: 50px;box-shadow:2px 2px 10px rgba(0, 0, 0, 0.5);">

                            <!-- Tab panes -->
                            <div class="tab-content">
<!--                                 <div class="tab-pane active" id="signal">
                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2 style="margin-top:35px; text-align:center;margin-bottom:28px;">Credit Card Details</h2>
                                                <hr>
                                                <div class="">
                                                   <form id="" class="form" action="" method="POST" role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name">Card Holder Name</label>

                                                                    <input type="text" class="form-control"
                                                                        name="name" placeholder="Name" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name">Card Number</label>

                                                                    <input type="text" class="form-control"
                                                                        name="number" placeholder="0000-0000-0000-0000" tabindex="1"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email">Expiry month</label>
                                                                    <input type="number" class="form-control"
                                                                        name="month" placeholder="xx" tabindex="2" min="1" max="12"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email">Expiry Year</label>
                                                                    <input type="number" class="form-control" id="year"
                                                                        name="phone" min="1900" max="2099" placeholder="xxxx"
                                                                        tabindex="2" required>
                                                                </div>
                                                            </div>
                                                                <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email">CVV number</label>
                                                                    <input type="number" class="form-control" id="cvv"
                                                                        name="cvv" placeholder="xxx"
                                                                        tabindex="2" min="1"required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center" id="pay-button">
                                                            <button type="submit" class="btn btn-start-order">Proceed to Pay</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="tab-pane" id="network">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2 style="margin-top:35px; text-align:center;">Paypal Details</h2>
                                                <hr>
                                                <p style="text-align:center;">
                                                Proceed to pay via Paypal</p>
                                                <div style="text-align: center;">
                                                    <img src="<?php echo base_url() ?>assets/frontend/img/paypal.png" style="height:90px;width:auto" />
                                                </div>
                                                 <div class="text-center" id="pay-button">
                                                        <?php if ($err) {
                                                            echo $val;
                                                        } 
                                                        elseif (!$err) { ?>
                                                            <a href="<?php echo $val ?>"><button type="submit" class="btn btn-start-order">Proceed to Pay</button></a>
                                                        <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane" id="alipay">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2 style="margin-top:35px;margin-bottom:15px; text-align:center;">Alipay Details</h2>
                                                <hr>
                                                <p style="text-align:center;">
                                                Proceed to pay via Alipay</p>
                                                <div style="text-align: center;">
                                                    <img src="<?php echo base_url() ?>assets/frontend/img/alipay2.png" style="height:70px;width:auto" />
                                                </div>
                                                <div class="text-center" id="pay-button">
                                                            <a href="<?php echo base_url('payment/alipay')?>"><button type="submit" class="btn btn-start-order">Proceed to Pay</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane" id="wechat">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2 style="margin-top:35px; text-align:center;">Wechat pay Details</h2>
                                                <hr>
                                                <p style="text-align:center;">
                                                Proceed to pay via Wechat pay</p>
                                                <p style="text-align: center;">Scan the QR code & complete the payment</p>
                                                <div style="text-align: center;">
                                                    <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo $qrcode;?>&choe=UTF-8" style="height:200px;width:auto" />
                                                </div><br>
                                                <p style="text-align: center;">page will redirect automatically after the payment, if not <a href="<?php echo base_url('payment/wechatverify') ?>">click here</a></p>

<!--                                                 <div class="text-center" id="pay-button">
                                                            <a href="<?php echo base_url('payment/alipay')?>"><button type="submit" class="btn btn-start-order">Payment</button></a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <span style="position: absolute;right: 15px;">
                                <?php
                                $req_url = 'https://api.exchangerate-api.com/v4/latest/AUD';
                                $response_json = file_get_contents($req_url);

                                // Continuing if we got a result
                                if(false !== $response_json) {

                                    // Try/catch for json_decode operation
                                    try {

                                    // Decoding
                                    $response_object = json_decode($response_json);
                                    echo 'Currency Exchange rate<br>';
                                    echo '1 AUD = '.$response_object->rates->CNY.' RMB';

                                    }
                                    catch(Exception $e) {
                                        // Handle JSON parse error...
                                    }

                                }
                                ?>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--page content end-->
        </div>
    </div>
    <script type="text/javascript">
        var request;
        var url = '<?php echo base_url() ?>payment/pay_verify/<?php echo $out_trade_no ?>';
        setInterval(function(){ 
            $.ajax({
            url: url,
            context: document.body,
            success: function(data){
                console.log('status',data)
                if ( data== 'true') {
                    location.href = '<?php echo base_url() ?>payment/wechatverify';
                }
            }
        });
         }, 15000);
    </script>
