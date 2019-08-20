<style>
  .dataTables_wrapper .row{
    width:100%;
  }
  .error{
    color: red;
    display: none;
  }

.BlockUIConfirm {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 100vh;
  width: 100vw;
  z-index: 50;
}

.blockui-mask {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #333;
  opacity: 0.4;
}

.RowDialogBody {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 400px;
  opacity: 1;
  background-color: white;
  border-radius: 4px;
}

.RowDialogBody > div:not(.confirm-body) {
  padding: 8px 10px;
}

.confirm-header {
  width: 100%;
  border-radius: 4px 4px 0 0;
  font-size: 13pt;
  font-weight: bold;
  margin: 0;
}

.row-dialog-hdr-success {
  border-top: 4px solid #3089CA;
  border-bottom: 1px solid transparent;
}

.row-dialog-hdr-info {
  border-top: 4px solid #3089CA;
  border-bottom: 1px solid transparent;
}

.confirm-body {
  padding:20px 10px;
}

.confirm-btn-panel {
  width: 100%;
}
.row-dialog-btn {
  cursor: pointer;
}
#BlockUIConfirm{
  display :none;
}
.btn-naked {
  background-color: transparent;
}
</style>
  <!--==========================
    Recharge
  ============================-->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 center" style="vertical-align: middle;display: list-item;">
        <div style="width: 100%;height: auto;">
        <img src="<?php echo base_url() ?>assets/frontend/img/recpromo.png" width=100%>
        </div>
      </div>
      <div class="col-md-7 recharge_new" style="background-color: white">
       
        <div class="container recharge">
        <form class="form" action="<?php echo base_url('home/rechargenumber') ?>" method="POST" role="form">
          <div class="row">
            <div class="col-md-4 number">
              <p>Mobile Number</p>
            <input type="text" class="form-contrl" id="mobilenumber" name="mobilenumber" placeholder="Enter Number" required>
            </div>
            <div class="col-md-4 amount">
              <p>Amount</p>
            <input type="text" class="form-contrl" id="amount" name="amount" placeholder="Enter amount" required>
            <a href="#plans">Choose Plan</a>
            </div>
            <div class="col-md-4 buttonn">
            <button class="btn btn-clr" id="rechargeBtn">Recharge</button>
            </div>
          </div>
          <p id="errmsg" class="error">Amount Cannot be less than 1$</p>
          <?php if (isset($_GET['err']) && $_GET['err'] == '1' ) { ?>
          <p style="color: red;">Invalid Number! Please check the number.</p>
          <?php } if(isset($_GET['err']) && $_GET['err'] == '2' ) { ?>
          <p style="color: red;">Your mobile number is not active !!</p>
          <?php } ?>
        </form>
      </div>
      <?php 
      ?>
        <h4 style="margin:25px 0 0 15px;">Browse Plans</h4>
        <ul class="accordion" id="plans">
          <li>
            <a class="active dropdown">Voice Plans</a>
            <div class="hidee" >
              <table style="width:100%" class="table table-bordered table-hover dt-responsive">
                <thead>
                  <tr>
                    <th>Pack</th>
                    <th>Validity</th>
                    <th>Talktime</th>
                    <th>Price</th>
                    <th>Activation</th>
                  </tr>
                </thead>
                <?php 
                foreach($list as $v) {
                  $result[$v['OFR_ID']]['OFR_ID']          = $v['OFR_ID'];
                  $result[$v['OFR_ID']]['package'][] = array('OFR_NAME' => $v['OFR_NAME'],
                                                             'IF_CYCLE'   => $v['IF_CYCLE'],
                                                             'PACAKGE_FEE'   => $v['PACAKGE_FEE'],
                                                             'FREE_UNIT_VALUE'   => $v['FREE_UNIT_VALUE'],
                                                             'LIFE_DAYS'   => $v['LIFE_DAYS'],'FREE_UNIT_TYPE'   => $v['FREE_UNIT_TYPE'],'IF_MUTIL_SUBSCRIBE'   => $v['IF_MUTIL_SUBSCRIBE'],);
              }
                ?>
                <tbody>
                  <?php foreach ($result as $value) {
                    if (count($value['package'])>1) {
                      continue;
                    }
                    if ($value['package'][0]['FREE_UNIT_TYPE'] == 1) {
                  ?>
                  <tr>
                    <td style="text-align: left;" class="recharge-clm"><?php echo $value['package'][0]['OFR_NAME']; ?></td>
                    <td class="recharge-clm"><?php echo $value['package'][0]['LIFE_DAYS'] ?></td>
                    <td class="recharge-clm"><?php echo $value['package'][0]['FREE_UNIT_VALUE']/60 ?>min</td>
                    <td class="recharge-clm"><?php $data = ($value['package'][0]['PACAKGE_FEE']/100);
                    setlocale(LC_MONETARY, 'en_AU');
                    $data = money_format('%!i', $data);
                    echo $data; ?> AUD</td>
                    <td class="recharge-clm"><a href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>"><button data-name="<?php echo $value['package'][0]['OFR_NAME']; ?>" data-href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>" class="btn btn-sm recharge-btn" onclick="ConfirmForm(event,this.getAttribute('data-href'),this.getAttribute('data-name'));">Activate</button></a></td>
                  </tr>
                <?php } } ?>
                </tbody>
               </table>
            </div>
          </li>
          <li>
            <a class="dropdown">Data Plans</a>
            <div class="hidee" >
              <table class="table table-bordered table-hover dt-responsive">
                <thead>
                  <tr>
                    <th>Pack</th>
                    <th>Validity</th>
                    <th>Data</th>
                    <th>Price</th>
                    <th>Activation</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($result as $value) {
                    if ($value['package'][0]['FREE_UNIT_TYPE'] == 3) {        
                  ?>
                  <tr>
                    <td style="text-align: left;" class="recharge-clm"><?php echo $value['package'][0]['OFR_NAME']; if ($value['package'][0]['IF_CYCLE']==1) {
                      echo ' (Auto Renewal)';
                    } ?></td>
                    <td class="recharge-clm"><?php echo $value['package'][0]['LIFE_DAYS'] ?></td>
                    <td class="recharge-clm"><?php echo number_format($value['package'][0]['FREE_UNIT_VALUE'] / 1073741824, 2); ?>GB</td>
                     <td class="recharge-clm"><?php $data = ($value['package'][0]['PACAKGE_FEE']/100) ;
                     setlocale(LC_MONETARY, 'en_AU');
                    $data = money_format('%!i', $data);
                    echo $data; ?> AUD</td>
                    <td class="recharge-clm"><a href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>"><button data-name="<?php echo $value['package'][0]['OFR_NAME']; ?>" data-href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>" class="btn btn-sm recharge-btn" onclick="ConfirmForm(event,this.getAttribute('data-href'),this.getAttribute('data-name'));">Activate</button></a></td>
                  </tr>
                <?php } } ?>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <a class="dropdown">SMS Plans</a>
            <div class="hidee">
            <table class="table table-bordered table-hover dt-responsive">
              <thead>
                <tr>
                  <th>Pack</th>
                  <th>Validity</th>
                  <th>Sms</th>
                  <th>Price</th>
                  <th>Activation</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($result as $value) {
                    if ($value['package'][0]['FREE_UNIT_TYPE'] == 2) {
                  ?>
                  <tr>
                    <td style="text-align: left;" class="recharge-clm"><?php echo $value['package'][0]['OFR_NAME']; if ($value['package'][0]['IF_CYCLE']==1) {
                      echo ' (Auto Renewal)';
                    } ?></td>
                    <td class="recharge-clm"><?php echo $value['package'][0]['LIFE_DAYS'] ?></td>
                    <td class="recharge-clm"><?php echo $value['package'][0]['FREE_UNIT_VALUE'] ?></td>
                     <td class="recharge-clm"><?php $data = ($value['package'][0]['PACAKGE_FEE']/100);
                     setlocale(LC_MONETARY, 'en_AU');
                    $data = money_format('%!i', $data);
                    echo $data; ?> AUD</td>
                    <td class="recharge-clm"><a href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>"><button data-name="<?php echo $value['package'][0]['OFR_NAME']; ?>" data-href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>" class="btn btn-sm recharge-btn" onclick="ConfirmForm(event,this.getAttribute('data-href'),this.getAttribute('data-name'));">Activate</button></a></td>
                  </tr>
                <?php } } ?>
              </tbody>
           </table>
           </div>
          </li>
                    <li>
            <a class="dropdown">Combo Plans</a>
            <div class="hidee" >
              <table class="table table-bordered table-hover dt-responsive">
                <thead>
                  <tr>
                    <th>Pack</th>
                    <th>Pack Details</th>
                    <th>Price</th>
                    <th>Activation</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($result as $value) {
                    if (count($value['package']) < 2) {
                      continue;
                    }      
                  ?>
                  <tr>
                    <td style="text-align: left;" class="recharge-clm"><?php echo $value['package'][0]['OFR_NAME']; if ($value['package'][0]['IF_CYCLE']==1) {
                      echo ' (Auto Renewal)';
                    } ?></td>
                    <td class="recharge-clm" style="text-align: left;">
                      <?php 
                      foreach ($value['package'] as $details) {
                        if ($details['FREE_UNIT_TYPE'] == 1) {
                            echo "Voice : ".($details['FREE_UNIT_VALUE']/60 )." min - ";
                            echo $details['LIFE_DAYS']." Days validty<br>" ;
                        }
                        else if($details['FREE_UNIT_TYPE'] == 3) {
                          echo "Data : ".number_format($details['FREE_UNIT_VALUE'] / 1073741824, 2). " GB - ";
                          echo $details['LIFE_DAYS']." Days validty<br>" ;
                        }else if($details['FREE_UNIT_TYPE'] == 2) {
                            echo "SMS : ".$details['FREE_UNIT_VALUE']. " - ";
                            echo $details['LIFE_DAYS']." Days validty<br>" ;
                        }
                      }
                      ?>
                    </td>
                     <td class="recharge-clm"><?php $data = ($value['package'][0]['PACAKGE_FEE']/100) ;
                     setlocale(LC_MONETARY, 'en_AU');
                    $data = money_format('%!i', $data);
                    echo $data; ?> AUD</td>
                    <td class="recharge-clm"><a href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>"><button data-name="<?php echo $value['package'][0]['OFR_NAME']; ?>" data-href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>" class="btn btn-sm recharge-btn" onclick="ConfirmForm(event,this.getAttribute('data-href'),this.getAttribute('data-name'));">Activate</button></a></td>
                  </tr>
                <?php  } ?>
                </tbody>
              </table>
            </div>
          </li>
        </ul> <!-- / accordion -->

      </div>
    </div>
  </div>
  <div id="rechargebanner" style="padding: 0;margin: 0">
    <img src="<?php echo base_url() ?>assets/frontend/img/5.jpg" width="100%" height="330px">
  </div>
  <div id="BlockUIConfirm" class="BlockUIConfirm">
    <div class="blockui-mask"></div>
    <div class="RowDialogBody">
        <div class="confirm-header row-dialog-hdr-success">
          Confirm
        </div>
        <div class="confirm-body">
          Are you sure want to activate <span id="plname"></span> plan ?
        </div>
        <div class="confirm-btn-panel pull-right">
          <div class="btn-holder pull-right">
            <input type="submit" class="row-dialog-btn btn btn-primary" style="background: #3089CA;border-color: #3089CA;" value="Yes, Activate" onclick="recharge()" />
            <input type="button" class="row-dialog-btn btn btn-naked" value="No, Cancel" onclick="$('#BlockUIConfirm').hide();" />
          </div>
        </div>
    </div>
  </div>
  <script type="text/javascript">
    var href;
     $('#rechargeBtn').click(function (event){
        if(document.getElementById('amount').value<1){
          event.preventDefault();
          $('#errmsg').show();
        }else{
          $('#errmsg').hide();
        }
     })
     $('table').DataTable( {
                searching: false,
                paging: false,
                info: false
      } );

      function selectAmount(val) {
        document.getElementById('amount').value = val.textContent.replace(/\D/g,'');
        document.getElementById('amount').focus();
      };

      function ConfirmForm(event,val,name) {
        $("#plname").html(name);
        $("#BlockUIConfirm").show();
        event.preventDefault();
        href = val;
      };
      function recharge(){
        window.location.href= href;
      }

  </script>