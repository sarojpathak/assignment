<?php

require_once('src/product.class.php');
$product = new Product();
$product->set('id',$_GET['id']);
$st = $product->remove();

if($st){
	header('location:list.product.php');
} 
else
{

	die("Error in product delete");
}



?>