<style type="text/css">
      .form-group{display: flex;}
      .profile_tab{
        background:white;
      }
      .profile_tab_list{
        list-style:none;
        padding-left:0px;
      }
      .profile_tab .prof_li{
        padding:15px;
        box-sizing: border-box;
        border: 1px solid #cccccc;
      }
      .prof_bgnew{
        margin:20px;
        background:white;
      }
      .prof_head{
        padding:15px 25px;
      }
      .prof_view{
        padding:0px 25px;
        margin-top:25px;
        min-height: 60vh;
        margin-bottom:50px;
      }
      .prof_view .prof_view_p1 , .prof_view .prof_view_p2{
        font-size:29px;
        color:#5985D7;
      } 
      .prof_view_p1{
        margin-left:50px;
        margin-top:30px;
      }
      .prof_section p{
        margin-bottom:0px;
      }
      .prof_plan{
        padding:25px 10px;
      }
      /* .prof_plan_p{
        margin-top:46px;
      } */
      .prof_section{
        margin-left: 40px;
        margin-bottom: 20px;
      }
      .prof_plan_p p{
          margin-bottom:0px;
      }
      .prof_plan{
        margin-left: 55px;
      }
      @media only screen and (min-width: 767px) {
        .validity{
          position: absolute;
          bottom: 0;
        }
    }
    </style>
<?php
function get_time_ago( $time )
{
    $time_difference = time() - $time;
    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );
    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
?>


    <div class="row" style="margin:0px;">
      <div class="col-md-2" style="background:white;padding:0px;">
        <div class="profile_tab">
          <ul class="profile_tab_list">
            <li class="prof_li"><a href="<?php echo base_url();?>home/account">Account</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/profile">Personal information</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/changepwd">Change Password</a></li>
            <li class="prof_li"><a data-toggle="collapse" href="#collapseExample">Statement<i class="fa fa-caret-down" style="float:right;"></i></a></li>
            <div class="collapse" id="collapseExample">
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementvoice"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Voice</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementdata"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Data</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementsms"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement SMS</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementrecharge"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Recharge</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementtransfer"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Transfer</a></li>
          </div>
            <li class="prof_li"><a href="<?php echo base_url();?>login/user_logout">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-10">
        <div class="prof_bgnew">
        <div class="row">
          <h2 style="margin-bottom:0px;">
            <p class="prof_view_p1">Welcome <?php echo $name; ?>!</p>
          </h2>
        </div>  
          <div class="row">
            <div class="col-md-4">
              <div class="prof_view">
                <div class="prof_section">
                  <p>Registered Mobile no :</p>
                  <h3 style="color:#5985D7"> <?php echo $details[0]['SERVICE_NBR'] ?></h3>
                </div>
                <div class="prof_section">
                  <p>Account Balance:</p>
                  <h3 style="color:#5985D7"><?php $data = ($balance[0]['BalanceAmount']/100); 
                    setlocale(LC_MONETARY, 'en_AU');
                    $data = money_format('%!i', $data);
                    echo $data; 
                  ?></h3>
                </div>
                <div class="prof_section">
                  <p>Expiry Date:</p>
                  <h3 style="color:#5985D7"><?php $date = new DateTime();
                    $date->setTimestamp(strtotime($balance[0]['ExpiredDate']));
                    echo $date->format('d/m/Y'); ?></h3>
                </div>
                
                <div class="prof_section">
                  <p>Account State:</p>
                  <h3 style="color:#5985D7"><?php
                    switch ($details[0]['BASIC_STATE']) {
                      case 'F0A':
                        echo "Initial";
                        break;
                      case 'F0B':
                        echo "Active";
                        break;
                      case 'F0E':
                        echo "Reserve";
                        break;
                      case 'F0F':
                        echo "Frozen";
                        break;
                      case 'F0H':
                        echo "Deleted";
                        break;
                    }
                   ?></h3>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="prof_plan">
                <div class="prof_plan_p">
                  <p>Current Plans :</p>
                  <?php $prevname='' ?>
                  <?php foreach ($plans as $plan) { ?>
                  <?php
                   if ($prevname != $plan['OfferName']) {
                     ?>
                     <h3 style="color:#5985D7"><?php echo $plan['OfferName']; ?></h3>
                     <?php
                     $prevname = $plan['OfferName'];
                   }else{
                     echo '';
                   }
                   
                   ?>
                  <div class="row">
                    <?php if($plan['FREE_UNIT_TYPE'] == 3){ 
                      $width = ($plan['FreeFlux']/$plan['FREE_UNIT_VALUE'])*100;
                      ?>
                        <div class="col-md-6">
                          <div class="progress">
                              <div class="progress-bar" role="progressbar" style="background-color:#3089ca;min-width:1%;width: <?php echo $width; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span><?php echo number_format($width,1); ?>%</span></div>
                          </div>
                          <p>Remaining Data Balance: <?php echo number_format($plan['FreeFlux'] / 1073741824, 2); ?>GB</p>
                        </div>

                    <?php } 

                    if($plan['FREE_UNIT_TYPE'] == 1){
                      $width = ($plan['FreeVoice']/$plan['FREE_UNIT_VALUE'])*100;
                      ?>
                        <div class="col-md-6">
                          <div class="progress">
                              <div class="progress-bar" role="progressbar" style="background-color:#3089ca;min-width:1%;width: <?php echo $width; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span><?php echo number_format($width,1); ?>%</span></div>
                          </div>
                          <p>Remaining Voice Balance: <?php echo ($plan['FreeVoice']/60) ?>min</p>
                        </div>
                    <?php } 

                    if($plan['FREE_UNIT_TYPE'] == 2){ ?>
                        <div class="col-md-6">
                          <p>Remaining sms Balance: <?php echo $plan['FreeSms']?></p>
                        </div>
                    <?php } ?>
                    <div class="col-md-6">
                      <p class="validity">Plan Validity: <?php $date = new DateTime();
                    $date->setTimestamp(strtotime($plan['ExpiredDate']));
                    echo $date->format('d/m/Y m:i'); ?>
                    </p>
                    </div>
                  </div>
                  <br>
                <?php } ?>
                </div>
              </div>
            </div>

          </div>
          <p style="text-align: right;padding: 10px">Last Login: <?php echo get_time_ago($_SESSION['lastloginuser']) ?></p>

        </div>
      </div>
  </div>