<?php


require_once('common.class.php');
require_once('event.class.php');




class Classes extends Common
{
	public $id,$title,$description,$type,$image,$slug,$created_at,$updated_at;
	private $table = "classes";
	public function save()
	{
        $sql = "insert into $this->table (title,description,type,image,slug,created_at) values ('$this->title','$this->description','$this->type','$this->image','$this->slug','$this->created_at')";
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
		 $sql ="update $this->table set title='$this->title',description='$this->description',image='$this->image',type='$this->type',updated_at='$this->updated_at' where id='$this->id'";
		 print_r($sql); exit;
		return $this->update($sql);
	}
	public function getClassByID()
    {
        $sql = "select * from $this->table where id='$this->id'";
        return $this->list($sql);
    }
}

?>