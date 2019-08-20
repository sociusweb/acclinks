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
    </style>

  <div class="row" style="margin:0px;">
    <div class="col-md-2" style="background:white;padding:0px;">
      <div class="profile_tab">
        <ul class="profile_tab_list">
          <li class="prof_li"><a href="<?php echo base_url();?>home/account">Account Status</a></li>
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
      <div class="row" style="margin: 0">
        <form action="<?php echo base_url() ?>home/profileEdit" method="post" enctype="multipart/form-data" style="display: contents;"  data-toggle="validator">
        <div class="col-md-4">
            <div class="avatar-upload">
                <h3 style="color: #5985D7">Profile Picture</h3>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(<?php echo base_url().$pic ?>);">
                    </div>
                </div>
                <div class="avatar-edit">
                    <input type='file' name="pro_img" id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload">&nbsp;Upload</label>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="white-back">
                <div class="white-border">
                  <h2>User Profile</h2>
                    <div class="form-group">
                        <div class="col-md-6">   
                          <label for="username">User ID:</label>
                          <input type="text" class="form-control" value="<?php echo $username ?>" placeholder="Username" readonly>
                        </div>
                        <div class="col-md-6">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="******" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">   
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter Full name" value="<?php echo $name ?>" name="name">
                        </div>
                        <div class="col-md-6">
                          <label for="dob">Date Of Birth:</label>
                          <input type="date" class="form-control" value="<?php echo $dob ?>" id="dob" placeholder="Enter email" name="dob">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">   
                          <label for="alt-contact">Alternative Contact:</label>
                          <input type="text" class="form-control" id="alt-contact" placeholder="Enter Contact Number" value="<?php echo $contact ?>" name="contact">
                        </div>
                        <div class="col-md-6">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" value="<?php echo $email ?>" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                          <label for="address">Address:</label>
                          <textarea class="form-control" name="address" placeholder="Enter Full Address"><?php echo $address ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="margin:15px;">Save</button>
                    </div>
                  </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>