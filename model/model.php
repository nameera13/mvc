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
    //create a member function for logout
    public function logout()
    {
        unset($_SESSION["rid"]);
        unset($_SESSION["fnm"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
}

?>