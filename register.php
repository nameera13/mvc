<!-- register modal load here -->

<div class="modal fade" id="reg" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content p-5">
            <div class="row">
                <h2>Register With Us</h2><hr>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group mt-2">
                                    <input type="file" name="img" class="form-control" placeholder="Enter Photo *" required>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="fnm" class="form-control" placeholder="Enter FirstName *" required>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="lnm" class="form-control" placeholder="Enter LastName *" required>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="email" name="em" class="form-control" placeholder="Enter Email *" required>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="password" name="pass" class="form-control" placeholder="Enter Password *" required>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="password" name="cpass" class="form-control" placeholder="Enter Confirm Password *" required>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="number" name="phone" class="form-control" placeholder="Enter Phone *" required>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="radio" name="gender" value="male" required>Male
                                    <input type="radio" name="gender" value="female">Female
                                </div>
                                <div class="form-group mt-2">
                                    Reading<input type="checkbox" name="chk[]" value="reading" >
                                    Writing<input type="checkbox" name="chk[]" value="writing">
                                    Play<input type="checkbox" name="chk[]" value="play">
                                </div>
                                <div class="form-group mt-2">
                                    <textarea name="address" cols="30" rows="10" class="form-control" placeholder="Enter Address *" required></textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <select name="state" class="form-control" placeholder="Enter State *" required>
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
                                    <select name="city" class="form-control" placeholder="Enter City *" required>
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