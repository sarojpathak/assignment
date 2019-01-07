<?php
require_once('header.php');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Menu</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>

<?php
require_once('src/menu.class.php');

$add = new Menu();

if(isset($_POST['register']))
{
	$err = [];
	if(isset($_POST['title']) && !empty($_POST['title']))
	{
		$add->title =$_POST['title'];
	}
	else
	{
		$err['title'] = "Enter Menu Title!";
	}
	if(isset($_POST['rank']) && !empty($_POST['rank']))
	{
		$add->rank =$_POST['rank'];
	}
	else
	{
		$err['rank'] = "Enter Rank!";
	}
	
	if(isset($_POST['slug']) && !empty($_POST['slug']))
	{
		$add->slug =$_POST['slug'];
	}
	else
	{
		$err['slug'] = "Enter Category Slug!";
	}
	if(isset($_POST['link']) && !empty($_POST['link']))
	{
		$add->link =$_POST['link'];
	}
	else
	{
		$err['link'] = "Enter Menu Link!";
	}

	if(count($err) == 0)
	{
		$st = $add->save();
		if($st){
			echo "Menu Create successfully!";
		} else{
			echo "Manu create error";
		}
	}
}
?>
		<div class="row">
			<?php if(isset($cg)) { echo $cg; } ?>
			<form method="post" action="">
				<div class="col-lg-8 form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control" placeholder="Enter Menu Title" autocomplete="off">
					<?php if(isset($err['title'])){ echo $err['title']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<label>Rank</label>
					<input type="number" name="rank" placeholder="Enter Rank" class="form-control" autocomplete="off">
					<?php if(isset($err['rank'])){ echo $err['rank']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<label>Slug</label>
					<input type="text" name="slug" placeholder="Enter Slug" class="form-control" autocomplete="off">
					<?php if(isset($err['slug'])){ echo $err['slug']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<label>Link</label>
					<input type="text" name="link" class="form-control" placeholder="Enter Menu Link" autocomplete="off">
					<?php if(isset($err['link'])){ echo $err['link']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<input type="submit" name="register" value="Register" class="btn btn-primary">
				</div>
			</form>
		</div>
<?php
require_once('footer.php');
?>