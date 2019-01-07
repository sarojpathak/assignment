<?php
require_once('header.php');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">List Slider</h1>
    </div>
</div>
<?php

require_once('src/slider.class.php');

$slider = new Slider();
$sliderlist = $slider->select();
// print_r($sliderlist); exit;

?>
		<div class="row">
			<table border="1" class="table" style="text-align: center;">
				<tr>
					<th colspan="5">slider List</th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Rank</th>
					<th>Image</th>
					<th colspan="2">Action</th>
				</tr>
				<?php
			foreach($sliderlist as $k=>$s)
		    {
			 ?>
			<tr>
				<td><?php echo $k+1 ?> </td>
				<td><?php echo $s->title ?> </td>
				<td><?php echo $s->rank ?> </td>
				<td><img height="70" width="100" src="img/<?php echo $s->image;?>"> </td>
				<td><a class="btn btn-primary" href="edit.slider.php?id=<?php echo $s->id ?>">edit</a> <a class="btn btn-primary" onclick="return confirm('are u sure want to del')" href="delete.slider.php?id=<?php echo $s->id ?>">delete</a></td>
			</tr>
		<?php } ?>

			</table>
		</div>
<?php
require_once('footer.php');
?>