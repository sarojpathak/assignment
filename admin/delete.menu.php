<?php

require_once('src/menu.class.php');
$menu = new Menu();
$menu->set('id',$_GET['id']);
$st = $menu->remove();

if($st){
	header('location:list.menu.php');
} 
else
{

	die("Error in Menu delete");
}



?>