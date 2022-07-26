<?php

class model
{
    public $conn="";
    public function __construct()
    {
        session_start();
        try
        {
            $this->conn=mysqli_connect("localhost","root","","mvc");
        }
        catch(Exception $e)
        {   
            die(mysqli_error($this->conn,$e));
        }
    }

    //create a member function for selectalldata or fetch data
    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    // create a member function to insertalldata
    public function insdata($table,$data)
    {
        $k=array_keys($data);
        $kk=implode(",",$k);
        $v=array_values($data);
        $vv=implode("','",$v);

        $insert="insert into $table($kk) values('$vv')";
        $exe=mysqli_query($this->conn,$insert);
        return $exe;
    }

    //create a member function for login user
    public function loguser($table,$email,$pass)
    {
        $select="select * from $table where email='$email' and password='$pass'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $no_rows=mysqli_num_rows($exe);

        if($no_rows==1)
        {
            $_SESSION["rid"]=$fetch["r_id"];
            $_SESSION["fnm"]=$fetch["firstname"];
            $_SESSION["em"]=$fetch["email"];
            
            return true;
        }
        else
        {
            return false;
        }
    }

    //create a member function for manageprofile
    public function manageprofile($table,$table1,$table2,$where,$where1,$column,$rid)
    {
        $select="select * from $table join $table1 on $where join $table2 on $where1 where $column='$rid'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $arr[]=$fetch;
        return $arr;        
    }

    // create a member function for manageallusers

    public function manageallusers($table,$table1,$table2,$where,$where1)
    {
        $sel="select * from $table join $table1 on $where join $table2 on $where1";
        $exe=mysqli_query($this->conn,$sel);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    // create a member function for count all users
    public function countuser($table,$column)
    {
        $sel="select count($column) as total from $table";
        $exe=mysqli_query($this->conn,$sel);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    //create a member function for update users
    public function upddata($table,$path,$fnm,$lnm,$email,$phone,$gen,$hob,$add,$st,$ct,$column,$id)
    {
        // $upd="update $table set photo='$path',firstname='$fnm',lastname='$lnm',email='$email',phone='$phone',gender='$gen', where $colunm='$id'";

        $upd="update $table set photo='$path',firstname='$fnm',lastname='$lnm',email='$email',phone='$phone',gender='$gen',hobby='$hob',address='$add',s_id='$st',c_id='$ct' where $column='$id'";
        $exe=mysqli_query($this->conn,$upd);
        return $exe;
    }

    // create a member function for ForgetPassword
    public function forgetpassword($table,$email,$column)
    {
        $select="select $column from $table where email='$email'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $num_rows=mysqli_num_rows($exe);

        if($num_rows==1)
        {
            $pass=base64_decode($fetch["password"]);
            return $pass;
        }
        else
        {
            return false;
        }
    }
    
    //create a member function for ChangePassword
    public function changepassword($table,$opass,$npass,$cpass,$id)
    {
        $select="select * from $table where r_id='$id'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $pass=$fetch["password"];

        if($opass==$pass && $npass==$cpass)
        {
            $upd="Update $table set password='$npass' where r_id='$id'";
            $exe=mysqli_query($this->conn,$upd);
            return $exe;
        }
        else 
        {
            return false;
         }
    }

    //create a member function for delete all data

    public function delalldata($table,$id)
    {
        $column=array_keys($id);
        $column1=implode(",",$column);
        $value=array_values($id);
        $value1=implode("','",$value); 
        $del="delete from $table where $column1='$value1'";
        $exe=mysqli_query($this->conn,$del);
        return $exe;

    }

    //create a member function for logout
    public function logout()
    {
        unset($_SESSION["rid"]);
        unset($_SESSION["fnm"]);
        unset($_SESSION["em"]);
        session_destroy();
        return true;
    }
}

?>