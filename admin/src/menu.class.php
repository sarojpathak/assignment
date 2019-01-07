<?php


require_once('common.class.php');




class Menu extends Common
{
	public $id,$title,$slug,$rank,$link;
	protected $conn;
	private $table = "menus";

	public function save()
	{       
        $sql = "insert into $this->table (title,slug,rank,link) values ('$this->title','$this->slug','$this->rank','$this->link'  )";
        return $this->insert($sql);
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
		$sql ="update $this->table set title='$this->title',slug='$this->slug',rank='$this->rank',link='$this->link' where id='$this->id'";
		return $this->update($sql);
	}

	public function getMenuByID()
	{
		$sql = "select * from $this->table where id = $this->id";
		return $this->list($sql);
	}

	public function getMenuByRank()
	{
		$sql  = "select * from $this->table order by rank asc";
		return $this->list($sql);
	}
	public function create_slug($string)
	{
   		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   		return $slug;
   	}

}





?>