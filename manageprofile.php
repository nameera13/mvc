<div class="container content p-3">
    <h2 class="text-center">Manage Your Profile</h2>
    <hr class="border border-3 w-30 mx-auto">
    <div class="row">
        <div class="col-md-4 mt-5 jubotron bg-dark p-5 mt-5">
            <ul class="sidebar">
            <li><a class="btn btn-block btn-success text-white" href="#"> Welcome : <?php echo ucfirst($_SESSION["fnm"]); ?></a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageProfile" class="link-info">Manage Profile</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageallUsers" class="link-info">Manage All Users <span class="badge badge-danger bg-danger"> 0 </span></a></li>
            <li class="mt-2"><a href="<?php echo $mainurl ;?>ChangePassword" class="link-info">Change Password</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl;?>?delete-user" onclick="return confirm('Are you sure to Delete Account?')" class="link-info">Delect Account</a></li>
            <li class="mt-2"><a href="<?php echo $mainurl;?>?logout-here" class="link-info" onclick="return confirm('Are you sure to logout as User?')">Logout!</a></li>
            </ul>
        </div>
        <div class="col-md-8 mt-5">
        <div class="form-group">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <img src="<?php echo $shwdata[0] ["photo"]; ?>">
                    <input type="file" name="img" class="form-control" placeholder="Enter Photo *" required>
                </div>
                 <div class="form-group mt-2">
                    <input type="text" name="fnm" value="<?php echo $shwdata[0] ["firstname"] ;?>" class="form-control" placeholder="Enter FirstName *" >
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="lnm" value="<?php echo $shwdata[0] ["lastname"] ;?>" class="form-control" placeholder="Enter LastName *" >
                </div>
                <div class="form-group mt-2">
                    <input type="email" name="em" value="<?php echo $shwdata[0] ["email"] ;?>" class="form-control" placeholder="Enter Email *" >
                </div>
                <div class="form-group mt-2">
                    <input type="number" name="phone" value="<?php echo $shwdata[0] ["phone"] ;?>" class="form-control" placeholder="Enter Phone *" >
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="gender" value="male" 
                    <?php 
                    if($shwdata[0]["gender"]=='male')
                    {
                        echo "checked='checked'";
                    }
                    ?>>Male
                    <input type="radio" name="gender" value="female" <?php
                    if($shwdata[0]["gender"]=='female')
                    {
                        echo "checked='checked'";
                    }
                    ?>>Female
                </div>
                <div class="form-group mt-2">
                    Reading<input type="checkbox" name="chk[]" value="reading" 
                    <?php 
                    if($shwdata[0]["hobby"]=='reading')
                    {
                        echo "checked='checked'";
                    }
                    ?>>
                    Writing<input type="checkbox" name="chk[]" value="writing"
                    <?php 
                    if($shwdata[0]["hobby"]=='writing')
                    {
                        echo "checked='checked'";
                    }
                    ?>>
                    Play<input type="checkbox" name="chk[]" value="play"
                    <?php 
                    if($shwdata[0]["hobby"]=='play')
                    {
                        echo "checked='checked'";
                    }
                    ?>>
                </div>
                <div class="form-group mt-2">
                    <textarea name="address" value="" cols="30" rows="10" class="form-control" placeholder="Enter Address *" ><?php echo $shwdata[0] ["address"] ;?></textarea>
                </div>
                <div class="form-group mt-2">
                    <select name="state" class="form-control" placeholder="Enter State *" >
                        <option value="">select state</option>
                            <?php
                                foreach($st as $st1)
                                {
                                    if($shwdata[0]["s_id"]==$st1["s_id"])
                                    {

                            ?>
                                <option value="<?php echo $shwdata[0]["s_id"]; ?>"selected="selected"><?php echo $st1["s_name"] ?></option>
                            <?php
                                    }
                                    else
                                    {
                            ?>  
                                <option value="<?php echo $st1["s_id"] ?>"><?php echo $st1["s_name"] ?></option>
                            <?php
                                    }
                                }
                            ?>    
                                        
                    </select>
                </div>
                <div class="form-group mt-2">
                    <select name="city" class="form-control" placeholder="Enter City *" >
                        <option value="">select city</option>
                            <?php
                                foreach($ct as $ct1)
                                {
                                    if($shwdata[0]["c_id"]==$ct1["c_id"])
                                    {

                                    
                            ?>
                                <option value="<?php echo $shwdata[0]["c_id"]; ?>"selected="selected"><?php echo $ct1["c_name"] ?></option>
                            <?php
                                    }
                                    else
                                    {

                            ?>
                                 <option value="<?php echo $ct1["c_id"] ?>"><?php echo $ct1["c_name"] ?></option>
                            <?php
                                    }
                                }
                            ?>    
                    </select>
                </div>
                <div class="form-group mt-4">
                    <input type="submit" name="upd" class="btn btn-outline-success btn-lg" value="Update Profile!">
                    <input type="reset" class="btn btn-outline-danger btn-lg" value="Reset">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>