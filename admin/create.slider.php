<?php
require_once('header.php');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Slider</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>
<?php
require_once('src/slider.class.php');

$add = new Slider();
// print_r($add); exit;

if(isset($_POST['register']))
{
	$err = [];
	if(isset($_POST['title']) && !empty($_POST['title']))
	{
		$add->title =$_POST['title'];
	}
	else
	{
		$err['title'] = "Enter slider Title!";
	}
	if(isset($_POST['rank']) && !empty($_POST['rank']))
	{
		$add->rank =$_POST['rank'];
	}
	else
	{
		$err['rank'] = "Enter rank!";
	}
	
	if($_FILES['image']['error'] == 0)
	{

		if(move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']))
		{
			$add->image = $_FILES['image']['name'];
		}
		else
		{
			$err['image'] = "Error in image selection";
		}
	}
	else
	{
		$err['image'] = "Choose one image File";
	}
	if(count($err) == 0)
	{
		// print_r($err); exit;
		$st = $add->save();
		if($st){
			echo "Slider Create successfully!";
		} else{
			echo "Slider create error";
		}
	}
}
?>
		<div class="row">
			<?php if(isset($cg)) { echo $cg; } ?>
			<form method="post" action="" enctype="multipart/form-data">
				<div class="col-lg-8 form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control" placeholder="Enter slider Title" autocomplete="off">
					<?php if(isset($err['title'])){ echo $err['title']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<label>Rank</label>
					<input type="number" name="rank" placeholder="Enter rank" class="form-control" autocomplete="off">
					<?php if(isset($err['rank'])){ echo $err['rank']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<label>Image</label>
					<input type="file" name="image" placeholder="Enter image" class="form-control" autocomplete="off">
					<?php if(isset($err['image'])){ echo $err['image']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<input type="submit" name="register" value="Register" class="btn btn-primary">
				</div>
			</form>
		</div>
<?php
require_once('footer.php');
?>