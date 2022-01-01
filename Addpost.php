<?php session_start();?>
<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
    <title>Startzone || Blog pages</title>
</head>
<style>
    nav ul li a.active{
  border-bottom: 2px solid #1281c2;
  color: #1281c2;
 
 }
 .search{
  background-color: #1281c2;
  color: #fff;
  font-size: 20px;
}
</style>
<body>
    <?php include 'includes/innavbar.php'; ?>
    <!-- navbar coding -->
  <div class="container">
      
<?php if($_SESSION["Utype"]=="admin"){
    echo " 
    <h3 class='text-center fw-bolder mt-4'>Admin Dashboard</h3>";
} 
else{
    echo " 
    <h3 class='text-center fw-bolder mt-4'>User Dashboard</h3>";   
}
?>
  </div>

  <div class="container">
    <a href="dashboard.php" class=" btn btn-warning mb-3">Dashboard</a>
      <div class="row bg-light mb-4">
        <h2 class=" text-center p-1">Add Blog post</h2>
          <div class="col-md-10 d-block m-auto p-2">
          <?php
if(isset($_POST['post'])){
  include "config.php";
$btitle=mysqli_escape_string($conn,$_REQUEST["B_title"]);
$filetemp=$_FILES['B_photo']['tmp_name'];
$filename=$_FILES['B_photo']['name'];
$bcate=mysqli_escape_string($conn,$_REQUEST["B_cate"]);
$bauth=mysqli_escape_string($conn,$_REQUEST["B_auth"]);
$bdate=$_POST['B_date'];
$bdesc=mysqli_escape_string($conn,$_REQUEST["B_desc"]);
if(move_uploaded_file($filetemp,"Blogphoto/".$filename)){
$sql="INSERT INTO b_post (B_photo,Bdesc,Btitle,B_date,B_auth,B_cate) VALUES ('$filename','$bdesc','$btitle','$bdate','$bauth','$bcate')";
if(mysqli_query($conn,$sql)){
    header("Location: dashboard.php");
}
else{
  echo "Error occured".mysqli_error($conn);
}
}
else{
  echo "Could not  upload file ";
}

}



?>
<form class=" mt-3" method="post" action="<?php $_SERVER['PHP_SELF'] ; ?>" enctype="multipart/form-data">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col-md-12">
            <div class="form-outline mb-3">
              <label class="form-label" for="formtitle">Blog Tilte</label>
              <input type="text" name="B_title" id="formtitle" class="form-control" required/>
   
            </div>
          </div>
        <!-- titit; -->
        <div class="col-md-12">
        <div class="input-group mb-3">
          <label class="input-group-text" for="fileup">Upload</label>
          <input type="file" class="form-control"  accept="image/*"  name="B_photo" required 
               />
        </div>
        
        </div>
      <!-- file -->
      <div class="col-md-6 mb-3">
        <label class="form-label" for="form6Example1">Choose Category</label>
        <select class="form-select" name="B_cate" aria-label="Default select example" required>
          <option selected disabled>Choose category</option>
          <?php
  include "config.php"; 
  $sqlc="SELECT * FROM category";
  $resultc=mysqli_query($conn,$sqlc) or die("failed");
  $numc= mysqli_num_rows($resultc);
  if($numc>0){
    while($rowc=mysqli_fetch_assoc($resultc)){
        echo '<option value="'.$rowc["c_name"].'">'.$rowc["c_name"].'</option>';
    }
  }
    ?>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label" for="forpub">Publish Date</label>
        <input type="date" class=" form-control" id="" name="B_date" required>
        </div>

        <!-- cate or date-->
        <div class="col-md-6">
          <div class="form-outline  mb-3">
            <label class=" form-label" for="wr">Witer Name </label>
            <input type="text" class="form-control" id="wr" name="B_auth" required>
          </div>
          </div>
      <!-- writer -->
      <div class="col-md-12">
        <div class="form-outline  mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
      <textarea class="form-control" name="B_desc" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        </div>
        </div>
        <!-- Submit button -->
        <button type="submit" name="post" class="btn btn-primary mt-4 btn-block d-block col-4 m-auto mb-4">Post</button>
      </form>
    
          </div>
      </div>
  </div>



    <?php include_once('includes/infooter.php'); ?>
    <!-- footers details -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
      </body>

</html>