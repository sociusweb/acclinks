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

 #pwd, #c_pwd, #n_pwd{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

#pwd_submit_btn{
  background-color: #3089CA;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.pwd_section{
  padding:45px 32px;
  margin:40px;
  background:white;
}
    </style>
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
        <div class="pwd_section">
       
           <h3>Change Password</h3>
           <form method="POST"  action="<?php echo base_url();?>home/change_pwd">
            <label for="password">Existing Password</label>
              <input type="password" id="pwd" name="e_password" required>
   
              <label for="new_pwd">New Password</label>
              <input type="password" id="n_pwd" name="new_pwd" required>

              <label for="confirm_pwd">Confirm Password</label>
              <input type="password" id="c_pwd" name="confirm_pwd" required >

              <input id="pwd_submit_btn" type="submit" value="Submit" onclick="return Validate()" />
        </form>
        </div>
    </div>
    </div>

   
    <script type="text/javascript">
      function Validate() {
          var password = document.getElementById("n_pwd").value;
          var confirmPassword = document.getElementById("c_pwd").value;
          if (password != confirmPassword) {
              event.preventDefault();
              alert("Passwords do not match.");
              return false;
          }
          return true;
      }
    </script>