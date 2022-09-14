<div class="container content p-3">
    <h2 class="text-center">Manage All Users</h2>
    <hr class="border border-3 w-30 mx-auto">
    <div class="row">
        <div class="col-md-4 mt-5 jubotron bg-dark p-5 mt-5">
            <ul class="sidebar">
            <li><a class="btn btn-block btn-success text-white" href="#"> Welcome : <?php echo ucfirst($_SESSION["fnm"]); ?></a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageProfile" class="link-info">Manage Profile</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageallUsers" class="link-info">Manage All Users <span class="badge badge-danger bg-danger"><?php echo $countuser[0]["total"];?></span></a></li>
            <li class="mt-2"><a href="<?php echo $mainurl ;?>ChangePassword" class="link-info">Change Password</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl;?>?delete-user=<?php echo base64_encode($shwdata[0]["r_id"]); ?>" onclick="return confirm('Are you sure to Delete Account?')" class="link-info">Delect Account</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl;?>?logout-here" class="link-info" onclick="return confirm('Are you sure to logout as User?')">Logout!</a></li>
            </ul>
        </div>
        <div class="col-md-8 mt-5">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
                <?php
                foreach($shwdata as $data)
                {
                ?>
                <tr>
                    <td><?php echo $data["r_id"]; ?></td>
                    <td><img src="<?php echo $data["photo"];?>" width="45px" height="45px"></td>
                    <td><?php echo $data["firstname"]; ?></td>
                    <td><?php echo $data["lastname"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["phone"]; ?></td>
                    <td><?php echo $data["gender"]; ?></td>
                    <td><?php echo $data["address"]; ?></td>
                    <td><?php echo $data["s_name"]; ?></td>
                    <td><?php echo $data["c_name"]; ?></td>    
                    <td><div class="w-75" style="min-width:100px">
                    <a href="" title="send whatsapp here"><i class="bi bi-whatsapp text-success"></i></a>|
                    <a href="<?php echo $mainurl; ?>?delete-user=<?php echo base64_encode($shwdata[0]["r_id"]);?>" onclick="return confirm('Are you sure to Delete Account?')" title="delete users"><i class="bi bi-trash text-danger"></i></a>|
                    <a href="<?php echo $mainurl; ?>ManageProfile" title="edit users"><i class="bi bi-pencil text-info"></i></a>
                    </div></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>