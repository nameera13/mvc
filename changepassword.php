<div class="container content p-3">
    <h2 class="text-center">Change Password</h2>
    <hr class="border border-3 w-30 mx-auto">
    <div class="row">
        <div class="col-md-4 mt-5 jubotron bg-dark p-5 mt-5">
            <ul class="sidebar">
            <li><a class="btn btn-block btn-success text-white" href="#"> Welcome : <?php echo ucfirst($_SESSION["fnm"]); ?></a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageProfile" class="link-info">Manage Profile</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageallUsers" class="link-info">Manage All Users</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>ChangePassword" class="link-info">Change Password</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl;?>?delete-user" onclick="return confirm('Are you sure to Delete Account?')" class="link-info">Delect Account</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>?logout-here" class="link-info" onclick="return confirm('Are you sure to logout as User?')">Logout!</a></li>
            </ul>
        </div>
        <div class="col-md-8 mt-5">
        <div class="form-group">
            <form action="" method="post" enctype="multipart/form-data" id="frm" data-bvalidator-validate>
                <div class="form-group mt-2 col-md-8">
                    <input type="password" name="opass"  class="form-control" placeholder="Enter Old Password *" data-bvalidator="passwordFormat,required" data-bvalidator-msg="Min 8 characters including a number, letters a-z, A-Z" >
                </div>
                <div class="form-group mt-2 col-md-8">
                    <input type="password" name="npass"  class="form-control" placeholder="Enter New Password *" data-bvalidator="passwordFormat,required" data-bvalidator-msg="Min 8 characters including a number, letters a-z, A-Z">
                </div>
                <div class="form-group mt-2 col-md-8">
                    <input type="password" name="cpass"  class="form-control" placeholder="Enter Confirm Password *" data-bvalidator="passwordFormat,required" data-bvalidator-msg="Min 8 characters including a number, letters a-z, A-Z">
                </div>
                <div class="form-group mt-4">
                    <input type="submit" name="change" class="btn btn-outline-success btn" value="Submit!">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>