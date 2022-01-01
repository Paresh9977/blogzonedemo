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

    <div class="container mt-5">
        <div class="row">
            <div class=" col-md-10 col-12 d-block m-auto">

                <form action="<?php $_SERVER['PHP_SELF'] ; ?>" method="GET" autocomplete="off">
                    <div class="input-group rounded">
                        <input type="search" name="search" class="form-control rounded "
                            placeholder="Search your blog...." aria-label="Search" aria-describedby="search-addon" />
                            <button id="search-button" type="submit" name="btnsh" class="btn login">
                                <i class="fas fa-search"></i>
                            </button>

                            </div>
             

                </form>

            </div>
        </div>
    </div>
    <!-- blogsections -->

    <!-- blog card -->
    <div class="container">
        <div class="row mt-3">
                    <!-- carditems -->
                    <?php
  include "./config.php";
if(isset($_REQUEST['btnsh'])){
    $bsr=$_REQUEST['search'];
  $sql="SELECT * FROM b_post WHERE Btitle LIKE '%$bsr%'";
}
else{
    $sql="SELECT * FROM `b_post` ORDER BY id DESC  ";
}

  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
      while($row=mysqli_fetch_assoc($result3)){
?>
          <div class="col-lg-4 col-md-6  mb-2">
                        <div class="card blogcolor m-auto" style="width: 18rem;">
                            <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent">
                                <img src="<?php echo "Blogphoto/". $row["B_photo"];?>" class="card-img-top img-fluid " alt="blog image">
                            </a>
                            <div class="card-body ">
                                <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent" style="text-decoration: none;">
                                    <h5 class="card-title "><?php   echo $row["Btitle"]; ?></h5>
                                </a>
                                <p class="card-text text-truncate"><?php echo $row["Bdesc"]; ?></p>
                                <p class="card-text bg-light p-2"><small class="text-muted">Publish date <?php   echo $row["B_date"]; ?></small></p>
                            </div>
                        </div>
        </div>
        <?php } ?>
   <?php }
   else{
      echo '<h3 class=" text-center text-danger"> No record forund ???</h3>';
   }

   ?>

        <!-- carditems -->
    </div>
      <div class="row">
        <div class="col-md-10 col-10 d-block m-auto pagi">
      
  <ul class="pagination pagination-sm justify-content-center" id="nav">
  <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>  
  <li class="page-item active" aria-current="page" id="li">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>  
</div>
      </div>
    </div>
      
    <!-- blog card -->
    <!-- footer -->

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