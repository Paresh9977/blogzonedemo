<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
   <title>Startzone || Login pages</title>
</head>
<style>
li a.active {
    color: #fff;
    font-weight: 700;
    background: #1281c2;
    border-right: 2px solid red;
}
</style>

<body>
    <?php include 'includes/innavbar.php'; ?>



<div class="container bg-light mt-5 p-3 mb-3">
    <div class="row">
    <h4 class=" text-center fw-bolder">Register </h4>
                            <div class="col-md-10 col-10 d-block m-auto">
                            <?php
                                      if(isset($_REQUEST["signup"])){
                                          include "config.php";
                                          $uname=mysqli_real_escape_string($conn,$_REQUEST["runame"]);
                                          $ty=mysqli_real_escape_string($conn,$_REQUEST["type"]);
                                          $fname=mysqli_real_escape_string($conn,$_REQUEST["rfname"]);
                                     $lname=mysqli_real_escape_string($conn,$_REQUEST["rlname"]);
                                     $remail=mysqli_real_escape_string($conn,$_REQUEST["remail"]);
                                     $pass=mysqli_real_escape_string($conn,md5($_REQUEST["rpass"]));
                                   $sql="SELECT Uname FROM reguser WHERE Uname='{$uname}'";
                                   $result=mysqli_query($conn,$sql) or die("failed");
                                   if(mysqli_num_rows($result)>0){
                                    echo"<h4 class=' text-center text-danger' >Already Register!!!!</h4>";
                                   }
                                   else{
                                    $sql1="INSERT INTO reguser (Uname,Utype,fname, lname, regemail, rpass) VALUES('$uname','$ty','$fname', '$lname', '$remail', '$pass')";
                                  if(mysqli_query($conn,$sql1)){
                                    header("Location: dashboard.php");
                                //  echo "<h4 class=' text-center text-success'>Successfull Register </h4>";
                                
                                   }
                                      }
                                    }
                                    ?>
                                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ; ?>">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row mb-4">
                                    <div class="col-md-12">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example11">Username :</label>
                                                <input type="text" id="form3Example11" name="runame"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <input type="text" id="form3Example11" name="type" value="user"
                                                    class="form-control" hidden/>
                                        <div class="col-md-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1">First name</label>
                                                <input type="text" id="form3Example1" name="rfname"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example2">Last name</label>
                                                <input type="text" id="form3Example2" name="rlname"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">

                                        <label class="form-label" for="form3Example3">Email address</label>
                                        <input type="email" id="form3Example3" name="remail" class="form-control" />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">

                                        <label class="form-label" for="form3Example4">Password</label>
                                        <input type="password" id="form3Example4" name="rpass" class="form-control" />
                                    </div>


                                    <!-- Submit button -->
                                    <button type="submit"
                                        class=" login btn btn-primary col-md-6 d-block m-auto btn-block mb-4"
                                        name="signup" class=" text-white">Sign up</button>
                                </form>
                                    <p class=" text-center">As a member? <a href="login.php">Sign in</a></p>
                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <p>or sign up with:</p>
                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                            <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                            <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                            <i class="fab fa-github"></i>
                                        </button>
                                    </div>
                           
                            </div>
                        </div>

                    </div>



    
    <!-- footer -->
    <?php include_once('includes/infooter.php'); ?>
    <!-- footers details -->
    <script src="https://kit.fontawesome.com/767eb27502.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>