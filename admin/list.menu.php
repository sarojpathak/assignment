<?php
include_once('header.php');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">list Menu</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>

<?php

require_once('src/menu.class.php');

$menu = new Menu();
$menulist = $menu->select();
// print_r($menulist); exit;

?>
		<div class="row">
			<table border="1" class="table" style="text-align: center;">
				<tr>
					<th colspan="6">Menu List</th>
				</tr>
				<tr>
					<th>SN</th>
					<th>Title</th>
					<th>Rank</th>
					<th>slug</th>
					<th>Link</th>
					<th colspan="2">Action</th>
				</tr>
				<?php
			foreach($menulist as $k=>$m)
		    {
			 ?>
			<tr>
				<td><?php echo $k+1 ?> </td>
				<td><?php echo $m->title ?> </td>
				<td><?php echo $m->rank ?> </td>
				<td><?php echo $m->slug ?> </td>
				<td><?php echo $m->link ?> </td>
				<td><a class="btn btn-primary" href="edit.menu.php?id=<?php echo $m->id ?>">edit</a> <a class="btn btn-primary" onclick="return confirm('are u sure want to del')" href="delete.menu.php?id=<?php echo $m->id ?>">delete</a></td>
			</tr>
		<?php } ?>

			</table>
		</div>
<?php
include_once('footer.php');
?>