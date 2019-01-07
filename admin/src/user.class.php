<?php

class User
{
	public $id,$username,$password;

	public function login()
	{
		// print_r($this);
        $conn = new mysqli('localhost','root','root','newsportal');
        // print_r($conn);exit;
        if($conn->connect_errno==0)
        {
        	$sql = "select * from login where username='$this->username' and password='$this->password'";
        	$res = $conn->query($sql);
        	// print_r($res); exit;
        	if($res->num_rows == 1)
        	{
        		session_start();
        		$_SESSION['name']=$this->username;
				header('location:dashboard.php');
        	}
        	else
        	{
        		return "Username and Password doesnot match!";
        	}
        }
        else
        {
        	die("Unable to connect to db: ".$conn->connect_error);
        }        
	}
}




?>