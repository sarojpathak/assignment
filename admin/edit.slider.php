<?php
require_once('header.php');
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header"> Edit Slider</h2>
	</div>
</div>

<?php
require_once('src/slider.class.php');

$slider = new Slider();
$slider->set('id',$_GET['id']);

if(isset($_POST['submit']))
{
	$err = [];
	if(isset($_POST['title']) && !empty('title'))
	{
		$slider->title = $_POST['title'];
	}
	else
	{
		$err['title'] = "Enter Title";
	}
	if(isset($_POST['rank']) && !empty('rank'))
	{
		$slider->rank = $_POST['rank'];
	}
	else
	{
		$err['rank'] = "Enter rank";
	}
	if($_FILES['image']['error'] == 0)
	{

		if(move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']))
		{
			$slider->image = $_FILES['image']['name'];
		}
		else
		{
			$err['image'] = "Error in image selection";
		}
	}
	else
	{
		$slider->image = $_POST['old_image'];
	}
	if(count($err)== 0)
	{
		$ec = $slider->edit();
		if($ec)
		{
			echo "Slider Updated successfully!";
		}
		else
		{
			echo "error in data update";
		}
	}
}

$sliderlist = $slider->getSliderByID();
$sliderlist = $sliderlist[0];
?>
		<div class="row">
			<form method="post" action="" enctype="multipart/form-data">
				<?php if(isset($location)) { echo $location; } ?>
				<div class="col-lg-8 form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control" value="<?php echo $sliderlist->title ?>">
					<?php if(isset($err['title'])){ echo $err['title']; } ?>
				</div>
				<div class="col-lg-8 form-group">
					<label>Rank</label>
					<input type="number" name="rank" class="form-control" value="<?php echo $sliderlist->rank ?>" >
					<?php if(isset($err['rank'])){ echo $err['rank']; } ?>
				</div>
				<div class="col-lg-8 form-group">
				    <label>Current Image</label>
				    <img height="250" width="400" src="img/<?php echo $sliderlist->image;?>">
				    <input type="hidden" name="old_image" value="<?php echo $sliderlist->image;?>">
			    </div>
			    <div class="col-lg-8 form-group">
				    <label>Image</label>
				    <input type="file" name="image" value="<?php echo $sliderlist->image; ?>">
				    <?php if(isset($err['image'])){ echo $err['image']; } ?>
			    </div>
				<div class="col-lg-8 form-group">
					<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				</div>
			</form>
		</div>
<?php
require_once('footer.php');
?>