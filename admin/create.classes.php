<?php
require_once('header.php');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Classes</h1>
    </div>
</div>

<?php
require_once('src/classes.class.php');

$add = new Classes();

$add->set('created_at',date('y-m-d h:i:s'));

if(isset($_POST['register']))
{
	$err = [];
	if(isset($_POST['title']) && !empty($_POST['title']))
	{
		$add->title =$_POST['title'];
	}
	else
	{
		$err['title'] = "Enter Class Title!";
	}
	if(isset($_POST['description']) && !empty($_POST['description']))
    {
        $add->description = $_POST['description'];
    }
    else
    {
        $err['description'] = "Write shote description about classes";
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
    if(isset($_POST['slug']) && !empty($_POST['slug']))
    {
        $add->slug =$_POST['slug'];
    }
    else
    {
        $err['slug'] = "Enter classes Slug!";
    }
    if(isset($_POST['type']) && !empty($_POST['type']))
    {
        $add->type =$_POST['type'];
    }
    else
    {
        $err['type'] = "Enter class type!";
    }
	if(count($err) == 0)
	{
		$st = $add->save();
		if($st){
			echo "Classes Create successfully!";
		} else{
			echo "Classes create error";
		}
	}

}
?><div class="row">
			<?php if(isset($cg)) { echo $cg; } ?>
			<form method="post" action="" enctype="multipart/form-data">
				<div class="col-lg-8 form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control" placeholder="Enter Classes Title" autocomplete="off">
					<?php if(isset($err['title'])){ echo $err['title']; } ?>
				</div>
				<div class=" col-lg-8 form-group">
                    <label>Description</label>
                    <textarea name="description" rows="5" cols="50" class="form-control" placeholder="classes Description" autocomplete="off"></textarea>
                    <?php if(isset($err['description'])){ echo $err['description']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Image</label>
                    <input type="file" name="image" placeholder="Enter image" class="form-control" autocomplete="off">
                    <?php if(isset($err['image'])){ echo $err['image']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Enter Class Type" autocomplete="off">
                    <?php if(isset($err['type'])){ echo $err['type']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter Class Slug" autocomplete="off">
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