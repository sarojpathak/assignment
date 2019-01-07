<?php


require_once('common.class.php');
require_once('classes.class.php');




class Product extends Common
{
	public $id,$name,$product_code,$price,$image,$description,$slug,$publish,$featured,$tags,$keyword;
	protected $conn;
	private $table = "product";

	public function save()
	{     
		
		$this->publish = $_POST['publish'];
        $sql = "insert into $this->table (name,product_code,price,image,description,slug,publish,featured) values ('$this->name','$this->product_code','$this->price','$this->image','$this->description','$this->slug','$this->publish','$this->featured')";
           	$this->mysqli = $this->connect();
			$this->mysqli->query($sql);
		if($this->mysqli->insert_id >0){
			$insert_id = $this->mysqli->insert_id;
			$tags = new Tags();
			$tags->save($insert_id);
			return true;
		}
        
        else{
        	echo "its inside else";
        	exit;
        }
    }
        
	

	public function select()
	{
		$sql = "select * from $this->table";
		return $this->list($sql);
	}
	public function selectById($id)
	{
		$sql = "select * from $this->table where id ='$id'";
		return $this->list($sql);
	}
	public function remove()
	{
        $sql = "delete from $this->table where id = '$this->id'";
         return $this->delete($sql);

	}


	public function edit()
	{
		$sql ="update $this->table set name='$this->name',product_code='$this->product_code',price='$this->price',image='$this->image',description='$this->description', slug='$this->slug' ,publish='$this->publish',featured ='$this->featured' where id='$this->id'"; 
			$this->mysqli = $this->connect();
			$this->mysqli->query($sql);
		if($this->mysqli->insert_id==0)
	   	{
	   		$insert_id = $this->id;
			$tags = new Tags();
			$tags->productEdit($insert_id);
		   	return true;
	  	 }
		
	}

	function getProductByID()
	{
		$sql = "select * from $this->table where id = $this->id";
		return $this->list($sql);
	}

	public function getProductByKeyword($keyword)
{
	$sql = "select * from product where name like '%$keyword%' or description like '%$keyword%' and publish = 1";
	return $this->list($sql);	
}

}





?>