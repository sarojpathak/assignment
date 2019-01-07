<?php

require_once('src/classes.class.php');
$class = new Classes();
$class->set('id',$_GET['id']);
$st = $class->remove();

if($st){
	header('location:list.classes.php');
} 
else
{

	die("Error in Tags delete");
}



?>