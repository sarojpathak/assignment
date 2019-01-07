<?php 
require_once('header.php');
?>

<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header"> Edit Product</h2>
	</div>
</div>
<?php
require_once('src/product.class.php');
require_once('src/tags.class.php');
$add = new Product();
$add->set('id',$_GET['id']);
if(isset($_POST['register']))
{
    $err = [];
    if(isset($_POST['name']) && !empty($_POST['name']))
    {
        $add->name =$_POST['name'];
    }
    else
    {
        $err['name'] = "Enter product name!";
    }
    if(isset($_POST['product_code']) && !empty($_POST['product_code']))
    {
        $add->product_code =$_POST['product_code'];
    }
    else
    {
        $err['product_code'] = "Enter product code!";
    }
    if(isset($_POST['description']) && !empty($_POST['description']))
    {
        $add->description = $_POST['description'];
    }
    else
    {
        $err['description'] = "Write shote description about Product";
    }
    if(isset($_POST['price']) && !empty($_POST['price']))
    {
        $add->price =$_POST['price'];
    }
    else
    {
        $err['price'] = "Enter price!";
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
		$add->image = $_POST['old_image'];
	}
    
    if(isset($_POST['slug']) && !empty($_POST['slug']))
    {
        $add->slug =$_POST['slug'];
    }
    else
    {
        $add->slug =$_POST['slug'];
    }
    if(isset($_POST['publish']) && !empty($_POST['publish']))
    {
        $add->publish =$_POST['publish'];
    }
    else
    {
        $add->publish =$_POST['publish'];
    }
    if(isset($_POST['featured']) && !empty($_POST['featured']))
    {
        $add->featured =$_POST['featured'];
    }
    else
    {
        $add->featured =$_POST['featured'];
    }
    // print_r($err); exit;
    if(count($err) == 0)
    {
    	// print_r($err); exit;
        $ec = $add->edit();
		if($ec)
		{
			echo "Product Updated successfully!";
		}
		else
		{
			echo "error in data update";
		}
    }
    else
    {
    	echo "error";
    }
}
$productlist = $add->getProductByID();
$productlist = $productlist[0];
$tags = new Tags;
$tagslist = $tags->selectTagsByProductId($productlist->id);
// print_r($tagslist); exit;
$all = $tags->select();
// print_r($tagslist); exit;
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <div class="row">
            <?php if(isset($cg)) { echo $cg; } ?>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="col-lg-8 form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name" autocomplete="off" value="<?php echo $productlist->name ?>">
                    <?php if(isset($err['name'])){ echo $err['name']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Product Code</label>
                    <input type="text" name="product_code" placeholder="Enter Product Code" class="form-control" autocomplete="off" value="<?php echo $productlist->product_code ?>">
                    <?php if(isset($err['product_code'])){ echo $err['product_code']; } ?>
                </div>
                <div class=" col-lg-8 form-group">
                    <label>Description</label>
                    <textarea name="description" rows="5" cols="50" class="form-control" placeholder="Product Description" autocomplete="off"><?php echo $productlist->description ?></textarea>
                    <?php if(isset($err['description'])){ echo $err['description']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Price</label>
                    <input type="number" name="price" placeholder="Enter price" class="form-control" autocomplete="off" value="<?php echo $productlist->price ?>">
                    <?php if(isset($err['price'])){ echo $err['price']; } ?>
                </div>
                <div class="col-lg-8 form-group">
				    <label>Current Image</label>
				    <img height="250" width="400" src="img/<?php echo $productlist->image;?>">
				    <input type="hidden" name="old_image" value="<?php echo $productlist->image;?>">
			    </div>
			    <div class="col-lg-8 form-group">
				    <label>Image</label>
				    <input type="file" name="image" value="<?php echo $productlist->image; ?>">
				    <?php if(isset($err['image'])){ echo $err['image']; } ?>
			    </div>
                <div class="col-lg-8 form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" placeholder="Enter Slug" class="form-control" autocomplete="off" value="<?php echo $productlist->slug ?>">
                    <?php if(isset($err['slug'])){ echo $err['slug']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>tags</label>
                    <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
                    <?php foreach($all as $k=>$a) { ?>
                        <option value="<?php echo $a->id ?>" <?php if(array_key_exists($k,$tagslist)){ echo "selected='selected'"; } ?>><?php echo $a->title; ?></option>
                    <?php } ?>
                    </select>
                    <?php if(isset($err['tags'])){ echo $err['tags']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Publish</label>
                    <div class="radio">
                        <label>
                        	<input type="radio" name="publish" value="1" <?php if($productlist->publish == 1){ echo "checked" ;} ?>>Yes
                      	</label>
                	</div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="publish" value="0" <?php if($productlist->publish == 0){ echo "checked" ;} ?>>No
                        </label>
                    </div>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Featured</label>
                    <div class="radio">
                        <label>
                        	<input type="radio" name="featured" value="1" <?php if($productlist->featured == 1){ echo "checked" ;} ?>>Yes
                      	</label>
                	</div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="featured" value="0" <?php if($productlist->featured == 0){ echo "checked" ;} ?> >No
                        </label>
                    </div>
                </div>
                <div class="col-lg-8 form-group">
                    <input type="submit" name="register" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>

        
<?php
require_once('footer.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
})
    </script>