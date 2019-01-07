<?php
require_once('header.php');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Class</h1>
    </div>
</div>
<?php
require_once('src/class.class.php');
require_once('src/tags.class.php');

$add = new Product();

if(isset($_POST['register']))
{
    $err = [];
    $tags =[];
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
        $err['image'] = "Choose one image File";
    }
    
    if(isset($_POST['slug']) && !empty($_POST['slug']))
    {
        $add->slug =$_POST['slug'];
    }
    else
    {
        $err['slug'] = "Enter Product Slug!";
    }
    if(isset($_POST['tags']))
    {   $tags = $_POST['tags']; 
        if(count($tags)==0){
         $err['tags'] = "Enter Product Tags!";
        }
    }
    else
    // {
    //     $err['tags'] = "Enter Product Tags!";
    // }
    if(isset($_POST['publish']) && !empty($_POST['publish']))
    {
        $add->publish =$_POST['publish'];
    }
    else
    {
        $err['publish'] = "select Publish key!";
    }
    if(isset($_POST['booked']) && !empty($_POST['booked']))
    {
        $add->booked =$_POST['booked'];
    }
    else
    {
        $err['feature'] = "select booked key!";
    }
        // print_r($err);exit;
    if(count($err) == 0)
    {
        $st = $add->save();
        // print_r($st); exit;
        if($st){
            echo "product Create successfully!";
        } else{
            echo "Product create error";
        }
    }
}
$tags = new Tags;
$tagslist = $tags->select();
// $tagslist = $tagslist[0];
// print_r($tagslist); exit;
?>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <div class="row">
            <?php if(isset($cg)) { echo $cg; } ?>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="col-lg-8 form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Class Title" autocomplete="off">
                    <?php if(isset($err['title'])){ echo $err['title']; } ?>
                </div>
                <div class=" col-lg-8 form-group">
                    <label>Description</label>
                    <textarea name="description" rows="5" cols="50" class="form-control" placeholder="Product Description" autocomplete="off"></textarea>
                    <?php if(isset($err['description'])){ echo $err['description']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Image</label>
                    <input type="file" name="image" placeholder="Enter image" class="form-control" autocomplete="off">
                    <?php if(isset($err['image'])){ echo $err['image']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" placeholder="Enter Slug" class="form-control" autocomplete="off">
                    <?php if(isset($err['slug'])){ echo $err['slug']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                    <label>Class</label>
                    <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
                    <?php foreach($tagslist as $t) { ?>
                        <option value="<?php echo $t->id ?>"><?php echo $t->title; ?></option>
                    <?php } ?>
                    </select>
                    <?php if(isset($err['tags'])){ echo $err['tags']; } ?>
                </div>
                <div class="col-lg-8 form-group">
                   <label>Publish</label>
                   <div class="radio">
                       <label>
                           <input type="radio" name="publish" value="1">Yes
                       </label>
                   </div>
                   <div class="radio">
                        <label>
                           <input type="radio" name="publish" value="0" checked>No
                        </label>
                    </div>
                    </div>
                <div class="col-lg-8 form-group">
                <label>booked</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="booked" value="1">Yes
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="booked" value="0" checked>No
                    </label>
                </div>
                <div class="col-lg-8 form-group">
                    <input type="submit" name="register" value="Register" class="btn btn-primary">
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
});
    </script>
<?php
require_once('footer.php');
?>