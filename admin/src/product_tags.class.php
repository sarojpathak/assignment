<?php
require_once('common.class.php');
require_once('tags.class.php');
require_once('product.class.php');
class Product_Tags extends Common
{
	public $id,$pid,$tid,$image;
	private $table = "product_tags";

	public function save()
	{     
		$tags = $_POST['tags'];  
		if(isset($tags)){
			foreach($tags as $t){
				$sql = "insert into product_tags (pid,tid) values ('$insert_id','$t')";
				return $this->insert($sql);
			}
			// return true;
        // $sql = "insert into $this->table (pid,tid) values ('$this->pid','$this->tid')";
        // return $this->insert($sql);
	}
	public function select()
	{
		$sql = "select * from $this->table";
		return $this->list($sql);
	}

	public function remove()
	{
        $sql = "delete from $this->table where id = '$this->id'";
         return $this->delete($sql);

	}


	public function edit()
	{
		$sql ="update $this->table set pid='$this->pid',tid='$this->tid' where id='$this->id'";
		return $this->update($sql);
	}

	function getProductTagsByID()
	{
		$sql = "select * from $this->table where id = $this->id";
		return $this->list($sql);
	}

}





?>