<?php 
require_once('header.php');
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header"> List Product</h2>
	</div>
</div>
<?php

require_once('src/product.class.php');
require_once('src/tags.class.php');
$tags = new Tags();

$product = new Product();
$productlist = $product->select();
// print_r($productlist); exit;

?>
		<div class="row">
			<table border="1" class="table" style="text-align: center;">
				<tr>
					<td colspan="11">product List</td>
				</tr>
				<tr>
					<th>SN</th>
					<th>Name</th>
					<th>Product Code</th>
					<th>Description</th>
					<th>Price</th>
					<th>Publish</th>
					<th>Featured</th>
					<th>Image</th>
					<th>Slug</th>
					<th>Tags</th>
					<th colspan="2">Action</th>
				</tr>
				<?php
			foreach($productlist as $k=>$p)
		    {
		    	$taglist = $tags->selectProductTags($p->id);
				
		    	
			 ?>
			<tr>
				<td><?php echo $k+1 ?> </td>
				<td><?php echo $p->name ?> </td>
				<td><?php echo $p->product_code ?> </td>
				<td><?php echo $p->description ?> </td>
				<td><?php echo $p->price ?> </td>
				<td><?php 
                 if($p->publish == 1)
                     {
                         echo " <label class = 'label label-success' >Yes </label>";
                     }
                 else
                     {
                         echo " <label class = 'label label-danger' >No </label>";
                     } 
                     ?>
                </td>
				<td><?php 
                 if($p->featured == 1)
                     {
                         echo " <label class = 'label label-success' >Yes </label>";
                     }
                 else
                     {
                         echo " <label class = 'label label-danger' >No </label>";
                     } 
                     ?>
                </td>
				<td><img height="70" width="100" src="img/<?php echo $p->image;?>"> </td>
				<td><?php echo $p->slug ?> </td>
				<td>
					<?php 
					foreach($taglist as $y=> $tag){
						echo $tag->title." ";

					}
				 	?> 
				</td>
				<td><a class="btn btn-primary" href="edit.product.php?id=<?php echo $p->id ?>">edit</a> <a class="btn btn-primary" onclick="return confirm('are u sure want to del')" href="delete.product.php?id=<?php echo $p->id ?>">delete</a></td>
			</tr>
		<?php } ?>

			</table>
		</div>
<?php 
require_once('footer.php');
?>