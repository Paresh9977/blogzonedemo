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
<!-- blogdeatil -->
<div class="container">
        <div class="row">
        <?php
     $bid=  $_REQUEST['id'] ;
  include "./config.php";
  $sql="SELECT * FROM b_post WHERE id='{$bid}'";
  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
      
        $row=mysqli_fetch_assoc($result3); 
        ?>
            <div class=" col-lg-12 col-md-12 col-10  d-block m-auto mt-4 ">
                <div class="full">
                    <h3 class="para"><?php   echo $row['id'].":". $row["Btitle"]; ?></h3>
                    <p style=" margin-left: 20px;  float: right;">Date : <?php   echo $row["B_date"]; ?></p>
                    <p style="float: right; color: rgb(240, 24, 24);">Author : <em><?php   echo $row["B_auth"]; ?></em></p>
                    <img src="<?php echo "Blogphoto/". $row["B_photo"];?>" alt="blog photo"
                        class=" img-responsive img-fluid  rounded-start mt-5">
                        <p class="mt-5" style="text-align: justify;"><?php echo $row["Bdesc"]; ?></p>
                </div>
            </div>
            <?php
  } else{
      echo "<h2 class='text-center text-danger>No record found</h2>";
  }
            ?>
        </div>
</div>
        <!-- blog deatail -->
    <!-- popukat coding -->
<div class="container">
    <div class="row">
        <div class="col-md-10 m d-block m-auto">
</div>
     <div class="row">
            <div class=" col-lg-12 col-md-10 col-10  d-block m-auto mt-4">
                <h2>Related Blogs</h2>
                
                <!-- one sections -->
                <div class="row ">
                    <!-- blog -->
                    <?php
  include "./config.php";
  $sql="SELECT * FROM `b_post`";
  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
      while($row=mysqli_fetch_assoc($result3)){
?>
      
                    <div class="card mb-1" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent">
                                    <img src="<?php echo "Blogphoto/". $row["B_photo"];?>"
                                        class="img-fluid rounded-start mt-4" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent" style="text-decoration: none;">
                                        <h5 class="card-title"><?php   echo $row["Btitle"]; ?></h5>
                                    </a>
                                    <p class="card-text text-truncate"><?php echo $row["Bdesc"]; ?> </p>
                                    <p class="card-tex bg-light p-2"><small class="text-muted">Publish date <?php   echo $row["B_date"]; ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
    }
    }?>
                    <!-- blog -->
                    
                </div>
            </div>
            <!--  popblog -->
        </div>
    </div>
    <!-- importNT LINKs -->
    <div class="row mt-5">
        <h2 class="text-center">Important Links</h2>
        <div class="col-10 imp d-block m-auto">
            1. <a href="#">Learn what digital marketing is and how it works</a>
            <br> <br>
            2. <a href="#">Want To Understand What Is SEO And How It Works?</a>
            <br> <br>
            4. <a href="#">The Top 7 Digital Marketing Mistakes To Avoid When Starting</a>
            <br> <br>
            5. <a href="#">How Digital Marketing Helps to Grow Your Business</a>
            <br> <br>
            6. <a href="#">20 Must-have digital marketing tools to help you grow</a>
            <br> <br>
            8. <a href="#">10 essential tools for digital marketing</a>
            <br> <br>

            3. <a href="#">Top 10 Digital Marketing Agencies in India.</a>
            <br> <br>
            4. <a href="#">Digital marketing strategy</a>
        </div>

    </div>
    </div>
    </div>
    <!-- importNT LINKs -->
    <!-- blog card -->

    
    <?php include 'includes/infooter.php'; ?>
    <!-- footers details -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>