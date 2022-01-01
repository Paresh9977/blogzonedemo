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

.login,.get{
  background-color: #1281c2;
  color: #fff;
  
}
</style>
<body>
    <?php include 'includes/innavbar.php'; ?>
    <!-- navbar coding -->

<div class="container">
    <div class="row mt-3">
    <p class=" d-md-none d-block"><a href="blog.php">Back to Blog</p></a> 
    <h2>Search blog....</h2>
    
        <div class="col-md-8 d-block m-auto mt-4">
        <?php
  include "./config.php";
  $sarch=  $_REQUEST['search'] ;
  $sql="SELECT * FROM b_post WHERE Btitle LIKE '%$sarch%'";
  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
   while($row=mysqli_fetch_assoc($result3)){
?>
        <div class="card mb-3" style="max-width: 640px;">
  <div class="row g-0">
    <div class="col-md-4">
    <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent">
      <img src="<?php echo "Blogphoto/". $row["B_photo"];?>"  class="img-fluid rounded-start" alt="...">
    </a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent" style="text-decoration: none;">
        <h5 class="card-title"><?php   echo $row["Btitle"]; ?></h5>
      </a>
        <p class="card-text"><?php   echo  $row["Bdesc"]; ?></p>
        <p class="card-text"><small class="text-muted">Publish date <?php   echo $row["B_date"]; ?></small></p>
      </div>
    </div>
  </div>
</div>
<?php }
  }
  else{
    echo '<h3 class=" text-center text-danger"> No record forund ???</h3>';
    
  }

?>
        </div>
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