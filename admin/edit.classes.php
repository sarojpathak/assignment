<?php
require_once('header.php');
?>


<?php
require_once('src/classes.class.php');

$class = new Classes();
$class->set('id',$_GET['id']);

$class->set('updated_at',date('y-m-d h:i:s'));

if(isset($_POST['register']))
{
    $err = [];
    if(isset($_POST['title']) && !empty($_POST['title']))
    {
        $class->title =$_POST['title'];
    }
    else
    {
        $err['title'] = "Enter Class Title!";
    }
    if(isset($_POST['description']) && !empty($_POST['description']))
    {
        $class->description = $_POST['description'];
    }
    else
    {
        $err['description'] = "Write shote description about classes";
    }
    if($_FILES['image']['error'] == 0)
    {

        if(move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']))
        {
            $class->image = $_FILES['image']['name'];
        }
        else
        {
            $err['image'] = "Error in image selection";
        }
    }
    else
    {
        $class->image = $_POST['old_image'];
    }
    if(isset($_POST['slug']) && !empty($_POST['slug']))
    {
        $class->slug =$_POST['slug'];
    }
    else
    {
        $err['slug'] = "Enter classes Slug!";
    }
    if(isset($_POST['type']) && !empty($_POST['type']))
    {
        $class->type =$_POST['type'];
    }
    else
    {
        $err['type'] = "Enter class type!";
    }
    if(count($err)== 0)
	{
		// print_r($err); exit;
		echo $ec = $class->edit(); exit;
		if($ec)
		{
			echo "Class Updated successfully!";
		}
		else
		{
			echo "error in data update";
		}
	}
}
$classList = $class->getClassByID();
$classList = $classList[0];
//print_r($classList); exit;
?>
<div class="row">
    <?php if(isset($cg)) { echo $cg; } ?>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="col-lg-8 form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Classes Title" autocomplete="off" value="<?php echo $classList->title; ?>">
            <?php if(isset($err['title'])){ echo $err['title']; } ?>
        </div>
        <div class=" col-lg-8 form-group">
            <label>Description</label>
            <textarea name="description" rows="5" cols="50" class="form-control" placeholder="classes Description" autocomplete="off"><?php echo $classList->description; ?></textarea>
            <?php if(isset($err['description'])){ echo $err['description']; } ?>
        </div>
        <div class="col-lg-8 form-group">
            <label>Current Image</label>
            <img height="250" width="400" src="img/<?php echo $classList->image;?>">
            <input type="hidden" name="old_image" value="<?php echo $classList->image;?>">
        </div>
        <div class="col-lg-8 form-group">
            <label>Image</label>
            <input type="file" name="image" value="<?php echo $classList->image; ?>">
            <?php if(isset($err['image'])){ echo $err['image']; } ?>
        </div>
        <div class="col-lg-8 form-group">
            <label>Type</label>
            <input type="text" name="type" class="form-control" placeholder="Enter Class Type" autocomplete="off" value="<?php echo $classList->type; ?>>
            <?php if(isset($err['type'])){ echo $err['type']; } ?>
        </div>
        <div class="col-lg-8 form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" placeholder="Enter Class Slug" autocomplete="off" value="<?php echo $classList->slug; ?>>
            <?php if(isset($err['slug'])){ echo $err['slug']; } ?>
        </div>
        <div class="col-lg-8 form-group">
            <input type="submit" name="register" value="Register" class="btn btn-primary">
        </div>
    </form>
</div>
<?php
require_once('footer.php');
?>