<?php

session_start();
if(isset($_SESSION['Uname'])){
?>
<!DOCTYPE html>
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
    <title>Startzone Dashboard</title>
</head>
<style>

</style>
<body>
    <?php include 'includes/innavbar.php';?>
  <div class="container">
  <a href="logout.php"  class=" bg-danger p-1 rounded-2 "><i class=" fas fa-sign-out-alt fa-3 text-white mt-3"></i></a>     
<?php if($_SESSION["Utype"]=="admin"){
  ?>
    <h3 class='text-center fw-bolder mt-2'>Admin Dashboard</h3>
<div class="row  mt-3 p-3">
    <div class="col-md-12 d-block m-auto ">
  <ul class="nav nav-pills mb-3 bg-light" id="pills-tab" role="tablist">
   
  <li class="nav-item" role="presentation">
    <button class="nav-link active fw-bolder" id="pills-user-tab" data-bs-toggle="pill" data-bs-target="#pills-user" type="button" role="tab" aria-controls="pills-user" aria-selected="false">User</button>
  </li>
  <li class="nav-item" role="presentation" >
      <button class="nav-link  fw-bolder" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Post</button>
    </li>
  <li class="nav-item" role="presentation">
      <button class="nav-link fw-bolder" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
    <a href="Addpost.php" style="text-decoration: none;"><button class="nav-link fw-bolder" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Add</button>
    </a>
  </li>
  </ul>
 
  <div class="tab-content" id="pills-tabContent">
   <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
    <?php include 'dash/userlist.php'; ?>
    </div>
    <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <?php include 'dash/allpost.php'; ?>
   </div> 
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <?php include 'dash/profile.php'; ?>
    </div>
  </div>
    </div>
   </div>
  </div>
<?php
} 
else{
  ?>
    <h3 class='text-center fw-bolder mt-4'>User Dashboard</h3>  
<div class="row  mt-3 p-3">
    <div class="col-md-12 d-block m-auto ">
  <ul class="nav nav-pills mb-3 bg-light" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation" >
      <button class="nav-link active fw-bolder" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Post</button>
    </li>
  <li class="nav-item" role="presentation">
      <button class="nav-link fw-bolder" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
    <a href="Addpost.php" style="text-decoration: none;"><button class="nav-link fw-bolder" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Add</button>
    </a>
  </li>
  </ul>
 
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <?php include 'dash/allpost.php'; ?>
   </div> 
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <?php include 'dash/profile.php'; ?>
    </div>
  </div>
    </div>
   </div>
  </div>
<?php }?>




 <?php include 'includes/infooter.php'; ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
<?php
}
else{


header("Location: login.php");
}
?>