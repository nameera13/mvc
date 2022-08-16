<div class="container content p-3">
    <div class="row">
        <div class="col-md-4 mt-5">
            <img src="<?php echo $baseurl; ?>images/sign_in.gif" alt="" class="img-fluid" style="width:100%; height: 300px !important;">
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <form action="" method="post">
                    <div class="form-group mt-5">
                        <input type="text" class="form-control" name="em" placeholder="Enter Email *" required >
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" name="pass" placeholder="Enter Password *" required>
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" name="log" class="btn btn-outline-success btn-lg" value="Sign In!">
                        <b><a href="#" class="link-info" >Forgot Password ?</a></b>
                    </div>
                    <div class="form-group mt-4">
                        <b>Don't have an Account <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#reg" >Create Your Account?</a></b>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>