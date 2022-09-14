<div class="container content p-3">
    <div class="row">
        <div class="col-md-4 mt-5">
            <img src="<?php echo $baseurl; ?>images/sign_in.gif" alt="" class="img-fluid" style="width:100%; height: 300px !important;">
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <form action="" method="post" id="frm" data-bvalidator-validate>
                    <div class="form-group mt-5">
                        <input type="text" class="form-control" name="em" placeholder="Enter Email *" data-bvalidator="email,required" >
                    </div>
                    
                    <div class="form-group mt-4">
                        <input type="submit" name="frg" class="btn btn-outline-success" value="Forgot Password">    
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>