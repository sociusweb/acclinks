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
      <!-- <div class="col-md-2" style="background:white;padding:0px;">
        <div class="profile_tab">
          <ul class="profile_tab_list">
            <li class="prof_li"><a href="<?php echo base_url();?>home/status">Account Status</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/profile">Personal information</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/changepwd">Change Password</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/statementvoice">Statement</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/login">Logout</a></li>
          </ul>
        </div>
      </div> -->
      <div class="col-md-12">
        <div class="prof_bgnew">
        <div class="row" style="margin: 0">
            <form action="<?php echo base_url() ?>home/profile_add" method="post" enctype="multipart/form-data" style="display: contents;"  data-toggle="validator">
            <div class="col-md-4">
                <div class="avatar-upload">
                    <h3 style="color: #5985D7">Profile Picture</h3>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(https://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png);">
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
                              <input type="text" class="form-control" id="username_profile" placeholder="Username" name="username" required>
                            </div>
                            <div class="col-md-6">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">   
                              <label for="name">Name:</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter Full name" name="name">
                            </div>
                            <div class="col-md-6">
                              <label for="dob">Date Of Birth:</label>
                              <input type="date" class="form-control" id="dob" placeholder="Enter email" name="dob">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">   
                              <label for="alt-contact">Alternative Contact:</label>
                              <input type="text" class="form-control" id="alt-contact" placeholder="Enter Contact Number" name="contact">
                            </div>
                            <div class="col-md-6">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                              <label for="address">Address:</label>
                              <textarea class="form-control" name="address" placeholder="Enter Full Address"></textarea>
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