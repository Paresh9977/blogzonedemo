<?php session_start();?>
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
    <title>Startzone || Landing pages</title>
</head>
<style>
    nav ul li a.active{
  border-bottom: 2px solid #1281c2;
  color: #1281c2;
 
 }
 
.login,.get{
  background-color: #1281c2;
  color: #fff;
  
}
</style>
<body>
    <?php include 'includes/innavbar.php'; ?>

    <!-- navbar coding -->
    <!-- contactus -->
    <div class="container">
        <div class="row">
            <h2 class="  text-center mt-5">Contact</h2>
            <p class="  text-center para">When it comes to marketing, products are only half the story. The other half
                is how you present your product in a way that engages your audience. Blog content is what drives traffic
                to your website - without it, you're not going to be able to sell anything.
                Topic: How to Sell Your Products Online With Ecommerce Website Templates
                tone: professional</p>
            <div class="col-md-6 col-10 d-block m-auto mt-3">
            <?php
                if(isset($_REQUEST["btnsend"]))
                {
                  $usrname=$_REQUEST["txtname"];
                  $usremail=$_REQUEST["txtemail"];
                  $usrmsg=$_REQUEST["txtmsg"];
                  $con=mysqli_connect("localhost","root","","blogdata");
                  $qry="INSERT INTO contdb (uname, uemail, umsg) VALUES ('$usrname', '$usremail', '$usrmsg')";
                  if(mysqli_query($con, $qry)){
                    echo"<h4 class='text-success'>Record Saved Successfully!!!!</h4>";
                    
                  }
                  else
                  {
                    echo"Error Occurred ".mysqli_error($con);
                  }
                }
                ?>
                <form name="userinfo" method="POST" >
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">Name</label>
                        <input type="text" id="form4Example1" class="form-control" name="txtname"
                            placeholder="Enter your name"  required/>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example2">Email address</label>
                        <input type="email" id="form4Example2" name="txtemail" class="form-control"
                            placeholder="Enter valid email" required />

                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">Message</label>
                        <textarea class="form-control" id="form4Example3" required name="txtmsg" rows="4"></textarea>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class=" login btn btn-primary col-md-6 d-block m-auto btn-block mb-4"
                        name="btnsend">Send</button>
                </form>
            </div>
            <div class="col-md-6 bg-light mt-3 text-center p-2">
                <h2 style=" color:rgb(33, 125, 231)">Startzone : Web Developers Team</h2>
                <p>StarZone is a premier Digital Agency that provides businesses in and around Columbus, OH and beyond
                    with services like YouTube Management, Instagram Management, Content Creation, Social Media
                    Management.</p>
                <p>Address : Korba</p>
                <p>Contact : +91.1234567890</p>
                <p>Open : 24/7</p>
            </div>
        </div>
        <!-- 
other links -->
        <div class="row mt-5">

        </div>
        <!-- 
other links -->
    </div>
    <!-- contactus -->
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