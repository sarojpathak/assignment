<?php
require_once('header.php');
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">List Tags</h1>
    </div>
</div>

<?php

require_once('src/classes.class.php');

$class = new Classes();
$classList = $class->select();
// print_r($classList); exit;

?>
		<div class="row">
			<table border="1" class="table" style="text-align: center;">
				<tr>
					<th colspan="9">tags List</th>
				</tr>
				<tr>
					<th>SN</th>
					<th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>slug</th>
					<th colspan="2">Action</th>
				</tr>
				<?php
			foreach($classList as $k=>$c)
		    {
			 ?>
			<tr>
				<td><?php echo $k+1 ?> </td>
				<td><?php echo $c->title ?> </td>
                <td><?php echo $c->description ?> </td>
                <td><?php echo $c->type ?> </td>
                <td><img height="70" width="100" src="img/<?php echo $c->image;?>"> </td>
                <td><?php echo $c->slug ?> </td>
				<td><a class="btn btn-primary" href="edit.classes.php?id=<?php echo $c->id ?>">edit</a> <a class="btn btn-primary" onclick="return confirm('are u sure want to del')" href="delete.classes.php?id=<?php echo $c->id ?>">delete</a></td>
			</tr>
		<?php } ?>

			</table>
		</div>

<?php
require_once('footer.php');
?>