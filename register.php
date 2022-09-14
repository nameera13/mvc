<!-- register modal load here -->

<div class="modal fade" id="reg" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content p-5">
            <div class="row">
                <h2>Register With Us</h2><hr>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <form action="" method="post" enctype="multipart/form-data"  data-bvalidator-validate>
                                <div class="form-group mt-2">
                                    <input type="file" name="img" class="form-control" placeholder="Enter Photo *" data-bvalidator="extension[jpg:png:txt],required" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg">
                                </div>
                                <div class="form-group mt-2">   
                                    <input type="text" name="fnm" class="form-control" placeholder="Enter FirstName *" data-bvalidator="alpha,required">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="lnm" class="form-control" placeholder="Enter LastName *" data-bvalidator="alpha,required">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="email" name="em" class="form-control" placeholder="Enter Email *" data-bvalidator="required">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="password" name="pass" class="form-control" placeholder="Enter Password *" id="new_pass1" data-bvalidator="passwordFormat,required" data-bvalidator-msg="Min 8 characters including a number, letters a-z, A-Z" >
                                </div>
                                <div class="form-group mt-2">
                                    <input type="password" name="cpass" class="form-control" placeholder="Enter Confirm Password *"  id="new_pass2" data-bvalidator="equal[new_pass1],required" data-bvalidator-msg-equal="Please enter the same password again">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="number" name="phone" class="form-control" placeholder="Enter Phone *" data-bvalidator="number,minlen[10],maxlen[10],required"  data-bvalidator-msg="Please Enter valid Mobile Number">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="radio" name="gender" value="male" >Male
                                    <input type="radio" name="gender" value="female" data-bvalidator="required" data-bvalidator-msg="Select radio">Female
                                </div>
                                <div class="form-group mt-2">
                                    Reading<input type="checkbox" name="chk[]" value="reading" >
                                    Writing<input type="checkbox" name="chk[]" value="writing">
                                    Play<input type="checkbox" name="chk[]" value="play" data-bvalidator="min[1],required" data-bvalidator-msg="Select at least one checkboxes">
                                </div>
                                <div class="form-group mt-2">
                                    <textarea name="address" cols="30" rows="10" class="form-control" placeholder="Enter Address *" data-bvalidator="required" data-bvalidator-msg="Please Enter Address"></textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <select name="state" class="form-control" placeholder="Enter State *" data-bvalidator="required" data-bvalidator-msg="Please Select State">
                                        <option value="">select state</option>
                                        <?php
                                        foreach($st as $st1)
                                        {
                                        ?>
                                        <option value="<?php echo $st1["s_id"] ?>"><?php echo $st1["s_name"] ?></option>
                                        <?php
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <select name="city" class="form-control" placeholder="Enter City *" data-bvalidator="required" data-bvalidator-msg="Please Select City">
                                        <option value="">select city</option>
                                        <?php
                                        foreach($ct as $ct1)
                                        {
                                        ?>
                                        <option value="<?php echo $ct1["c_id"] ?>"><?php echo $ct1["c_name"] ?></option>
                                        <?php
                                        }
                                        ?>    
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="submit" name="reg" class="btn btn-outline-success btn-lg" value="Register!">
                                    <input type="reset" class="btn btn-outline-danger btn-lg" value="Reset">
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>