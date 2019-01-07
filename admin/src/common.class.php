<?php

abstract class Common
{

	private $host="localhost";
	private $db="db_assignment";
	private $user="root";
	private $pass="root";
	private $mysqli;

	abstract function save();
	abstract function remove();
	abstract function select();
	abstract function edit();
	// abstract function edit();

	public function set($variable,$value)
	{
		$this->$variable=$value;
	}
	protected function connect()
	{
	    //connect the database
		 $this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db);
         if($this->mysqli->connect_errno != 0)
         {
         	die("Unable to connect to db: ".$this->mysqli->connect_error);
         }
         return $this->mysqli;
	}

	public function insert($sql)
	{
	    //insert query
		$this->mysqli = $this->connect();
		$this->mysqli->query($sql);
		if($this->mysqli->insert_id >0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function delete($sql)
	{
	    //delete query
        $this->mysqli = $this->connect();
        $this->mysqli->query($sql);
        if($this->mysqli->affected_rows == 1 && $this->mysqli->insert_id == 0)
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}

	public function list($sql)
	{
	    //list query
		$this->mysqli = $this->connect();
		$res=$this->mysqli->query($sql);
		$st =[];
		if($res->num_rows>0)
		while($row=$res->fetch_object())
		{
			$st[]=$row;
		}
		return $st;
	}

	public function update($sql)
	{
	    //update query
		$this->mysqli = $this->connect();
		$this->mysqli->query($sql);
		if($this->mysqli->insert_id==0)
	   {
		   	return true;
	   }
		else
		{
			return false;
		}
	}	
}


?>