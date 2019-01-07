<?php

require_once('src/slider.class.php');
$slider = new Slider();
$slider->set('id',$_GET['id']);
$st = $slider->remove();

if($st){
	header('location:list.slider.php');
} 
else
{

	die("Error in Slider delete");
}



?>