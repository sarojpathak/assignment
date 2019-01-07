<?php
require_once('header.php');
?>

<?php
require_once('src/menu.class.php');

$menu = new Menu();
$menu->set('id',$_GET['id']);

if(isset($_POST['submit']))
{
	$err = [];
	if(isset($_POST['title']) && !empty('title'))
	{
		$menu->title = $_POST['title'];
	}
	else
	{
		$err['title'] = "Enter Title";
	}
	if(isset($_POST['rank']) && !empty('rank'))
	{
		$menu->rank = $_POST['rank'];
	}
	else
	{
		$err['rank'] = "Enter rank";
	}
	if(isset($_POST['slug']) && !empty('slug'))
	{
		$menu->slug = $_POST['slug'];
	}
	else
	{
		$err['slug'] = "Enter Category Slug";
	}
	if(isset($_POST['link']) && !empty('link'))
	{
		$menu->link = $_POST['link'];
	}
	else
	{
		$err['link'] = "Enter Link";
	}
	if(count($err)== 0)
	{
		$ec = $menu->edit();
		if($ec)
		{
			echo "Menu Updated successfully!";
		}
		else
		{
			echo "error in data update";
		}
	}
}
$menulist = $menu->getMenuByID();
$menulist = $menulist[0];

?>
		<div class="row">
			<form method="post" action="">
				<?php if(isset($location)) { echo $location; } ?>
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control" value="<?php echo $menulist->title ?>">
					<?php if(isset($err['title'])){ echo $err['title']; } ?>
				</div>
				<div class="form-group">
					<label>Rank</label>
					<input type="number" name="rank" class="form-control" value="<?php echo $menulist->rank ?>" >
					<?php if(isset($err['rank'])){ echo $err['rank']; } ?>
				</div>
				<div class="form-group">
					<label>Slug</label>
					<input type="text" name="slug" class="form-control" value="<?php echo $menulist->slug ?>" >
					<?php if(isset($err['slug'])){ echo $err['slug']; } ?>
				</div>
				<div class="form-group">
					<label>Link</label>
					<input type="text" name="link" class="form-control" value="<?php echo $menulist->link ?>">
					<?php if(isset($err['link'])){ echo $err['link']; } ?>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				</div>
			</form>
		</div>
<?php
require_once('footer.php');
?>