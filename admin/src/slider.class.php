<?php
require_once('common.class.php');
class Slider extends Common
{
	public $id,$title,$rank,$image;
	private $table = "slider";

	public function save()
	{       
        $sql = "insert into $this->table (title,rank,image) values ('$this->title','$this->rank','$this->image')";
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
		$sql ="update $this->table set title='$this->title',rank='$this->rank',image='$this->image' where id='$this->id'";
		return $this->update($sql);
	}

	function getSliderByID()
	{
		$sql = "select * from $this->table where id = $this->id";
		return $this->list($sql);
	}

}





?>