<?php

    require_once("model/model.php");
    class controller extends model
    {
        public function __construct()
        {
            parent ::__construct();

            // fetch state or city on register view
            $st=$this->selectalldata('state');
            $ct=$this->selectalldata('city');

            // store data in register table
            if(isset($_POST["reg"]))
            {
                // upload photo
                $tmp_name=$_FILES["img"]["tmp_name"];
                $type=$_FILES["img"]["type"];
                $size=$_FILES["img"]["size"]/1024;
                $path="uploads/users/".$_FILES["img"]["name"];
                move_uploaded_file($tmp_name,$path);

                $fnm=$_POST["fnm"];
                $lnm=$_POST["lnm"];
                $email=$_POST["em"];
                $pass=base64_encode($_POST["pass"]);
                $cpass=base64_encode($_POST["cpass"]);
                $phone=$_POST["phone"];
                $gen=$_POST["gender"];
                $hob=implode(",",$_POST["chk"]);
                $add=$_POST["address"];
                $st=$_POST["state"];
                $ct=$_POST["city"];

                if($pass==$cpass)
                {
                $data=array("photo"=>$path,"firstname"=>$fnm,"lastname"=>$lnm,"email"=>$email,"password"=>$pass,"phone"=>$phone,"gender"=>$gen,"hobby"=>$hob,"address"=>$add,"s_id"=>$st,"c_id"=>$ct);

                $check=$this->insdata('register',$data);
                if($check)
                {
                    echo "<script>
                    alert('Thanks for create your account with Us')
                    window.location='./';
                    </script>";
                }
                }
                else
                {
                    echo "<script>
                    alert('Your password does not matched try again')
                    window.location='./';
                    </script>";
                }

            }

            // store data in contact from user contact form
            if(isset($_POST["addcontact"]))
            {
                $fnm=$_POST["fnm"];
                $lnm=$_POST["lnm"];
                $email=$_POST["em"];
                $phone=$_POST["phone"];
                $sub=$_POST["sub"];
                $msg=$_POST["msg"];

                $data=array("firstname"=>$fnm, "lastname"=>$lnm, "email"=>$email,"phone"=>$phone,"subject"=>$sub,"message"=>$msg);
                
                $result=$this->insdata('contact',$data);
                if($result)
                {
                    echo "<script>
                    alert('thanks for contact with us our one of admin contact with you soon')
                    window.location='Contact-us';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('something went wrong')
                    window.location='Contact-us';
                    </script>";
                }
            }

            // login as user
            if(isset($_POST["log"]))
            {
                $email=$_POST["em"];
                $pass=base64_encode($_POST["pass"]);

                $check=$this->loguser('register',$email,$pass);
                if($check)
                {
                    echo "<script>
                    alert('You are Logged in Successfully')
                    window.location='ManageProfile';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('Your email and password are Incorrect try again')
                    window.location='./';
                    </script>";
                }
                
            }

            // manage profile
            if(isset($_SESSION["rid"]))
            {
                $rid=$_SESSION["rid"];
                $shwdata=$this->manageprofile('register','state','city','register.s_id = state.s_id','register.c_id = city.c_id','r_id',$rid);
            } 

            // manage all users
            $shwdata=$this->manageallusers('register','state','city','register.s_id=state.s_id','register.c_id=city.c_id','r_id');

            // count users
            $countuser =$this->countuser('register','r_id');

            // update users
            if(isset($_POST["upd"]))
            {
                // upload photo
                $id=$_SESSION["rid"];
                $tmp_name=$_FILES["img"]["tmp_name"];
                $type=$_FILES["img"]["type"];
                $size=$_FILES["img"]["size"]/1024;
                $path="uploads/users/".$_FILES["img"]["name"];
                move_uploaded_file($tmp_name,$path);

                $fnm=$_POST["fnm"];
                $lnm=$_POST["lnm"];
                $email=$_POST["em"];
                $phone=$_POST["phone"];
                $gen=$_POST["gender"];
                $hob=implode(",",$_POST["chk"]);
                $add=$_POST["address"];
                $st=$_POST["state"];
                $ct=$_POST["city"];
                
                $chk=$this->upddata('register',$path,$fnm,$lnm,$email,$phone,$gen,$hob,$add,$st,$ct,'r_id',$id);
                if($chk)
                {
                    echo "<script>
                    alert('Thanks for  your account updated succefully with Us')
                    window.location='ManageProfile';
                    </script>";
                }

            }

            //forget password logic
            if(isset($_POST["frg"]))
            {
                $email=$_POST["em"];
                $pass=$this->forgetpassword('register',$email,'password');
                
                if($pass)
                {
                    echo "<script>
                    alert('Your password is :'+'$pass')
                    window.location='./';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('Your email does not exist with us try another email')
                    window.location='ForgotPassword';
                    </script>";
                }
            }

            //change password logic

            if(isset($_POST["change"]))
            {
                $id=$_SESSION["rid"];
                $opass=base64_encode($_POST["opass"]);
                $npass=base64_encode($_POST["npass"]);
                $cpass=base64_encode($_POST["cpass"]);

                $chk=$this->changepassword('register',$opass,$npass,$cpass,$id);
                if($chk)
                {
                    unset($_SESSION["rid"]);
                    unset($_SESSION["fnm"]);
                    unset($_SESSION["em"]);

                    echo "<script>
                    alert('Your password successfully changed')
                    window.location='./';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('old password,new password and confirm password does not matched try agian')
                    window.location='ChangePassword';
                    </script>";
                }
            }

            //delete
            if(isset($_GET["delete-user"]))
            {
                $delid=base64_decode($_GET["delete-user"]);
                $id=array('r_id'=>$delid);
                $chk=$this->delalldata('register',$id);

                if($chk)
                {
                    unset($_SESSION["rid"]);
                    unset($_SESSION["fnm"]);
                    unset($_SESSION["em"]);

                    echo"<script>
                    alert('Your Profile Deleted Successfully')
                    window.location='./';
                    </script>";
                }
            }

            // logout here
            if(isset($_GET["logout-here"]))
            {
                $logout=$this->logout();
                if($logout)
                {
                    echo "<script>
                    alert('Your Are Logout successfully')
                    window.location='./';
                    </script>";
                }
            }

            // load your view here

            if(isset($_SERVER["PATH_INFO"]))
            {
                switch($_SERVER["PATH_INFO"])
                {
                    case '/':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("content.php");
                        require_once("footer.php");
                        require_once("register.php");
                        break;

                    case '/Contact-us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("contact.php");
                        require_once("footer.php");
                        break;

                    case '/ManageProfile':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("manageprofile.php");
                        require_once("footer.php");
                        break;

                    case '/ManageallUsers':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("manageallusers.php");
                        require_once("footer.php");
                        break;

                    case '/ForgotPassword':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("forgetpassword.php");
                        require_once("footer.php");
                        break;

                    case '/ChangePassword':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("changepassword.php");
                        require_once("footer.php");
                        break;

                    default:
                        require_once("index.php");
                        require_once("header.php");
                        require_once("404.php");
                        break;
                }
            }
        }
    }
    $obj=new controller();

?>