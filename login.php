
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

    <!-- navbar end -->
    <!-- login -->
    <div class="container mb-3">
        <div class="row mt-5 bg-light p-2">
            <h4 class=" text-center fw-bolder">Login </h4>
                            <div class="col-md-10 col-10 d-block m-auto">
                                <!-- login php codde -->
                                <?php
                                      if(isset($_REQUEST["logbtn"])){
                                        include "config.php";
                                        $usrname=mysqli_real_escape_string($conn,$_REQUEST["usernames"]);
                                      
                                        $logpass= md5($_REQUEST["lopass"]);
                                        $sql2="SELECT * FROM reguser WHERE Uname='{$usrname}' AND rpass='{$logpass}'";
                                        $result2=mysqli_query($conn,$sql2) or die("failed");
                                        if(mysqli_affected_rows($conn)>0){
                                         while($row1=mysqli_fetch_assoc($result2)){
                                            session_start();  
                                            $_SESSION['Utype']=$row1['Utype'];
                                               $_SESSION['fname']=$row1['fname'];
                                               $_SESSION['regemail']=$row1['regemail'];
                                               $_SESSION['Uname']=$row1['Uname'];
                                               header("Location: dashboard.php");
                                         }
                                           }
                                           else{
                                            echo"<h4 class=' text-center text-danger' >Username and Password Invalid</h4>";
                                           }
                                        }
                                    ?>
      <!-- login php codde -->
                                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ; ?>">
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">

                                        <label class="form-label" for="form2Example1">Username </label>
                                        <input type="text" id="form2Example1" name="usernames" class="form-control" />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">

                                        <label class="form-label" for="form2Example2">Password</label>
                                        <input type="password" name="lopass" id="form2Example2" class="form-control" />
                                    </div>

                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row mb-4 ">
                                        <div class="col d-flex justify-content-center">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="form2Example34" checked />
                                                <label class="form-check-label" for="form2Example34"> Remember me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <!-- Simple link -->
                                            <a href="#!">Forgot password?</a>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit"
                                        class="login btn btn-primary col-md-6 d-block m-auto btn-block mb-4"
                                        name="logbtn">Sign in</button>
                                </form>
                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <p>Not a member? <a href="register.php">Register</a></p>
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