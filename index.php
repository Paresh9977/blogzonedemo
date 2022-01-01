<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="font/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/index.css">
    <title>Startzone || Landing pages</title>
</head>
<style>
    .fa-blog, .fa-business-time,.fa-share-alt{
  margin-top: 20px;
}
.iconset {
  border-radius: 50%;
  height: 100px;
  width: 100px;
  background-color: #1281c2;
}

    nav ul li a.active{
  border-bottom: 2px solid #1281c2;
  color: #1281c2;
 
 }
 
.login,.get{
  background-color: #1281c2;
  color: #fff;
  
}
#preloader {
width: 100%;
height: 100vh;
background: #fff url('logo/loading.gif');
position: fixed;
z-index: 99999;
background-repeat: no-repeat;
background-position: center center;
}
  
</style>
<body onload="preload()">
<div id="preloader"></div>
    <?php include 'includes/innavbar.php'; ?>
    <!-- navbar coding -->
    <!-- Home page -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 mt-4 ">
                <div class="box m-4 ms-sm-0">
                    <h1>In Startzone</h1>
                    <h2 class="text-center fw-bolder">Make Business Worthy.</h2>
                    <p class="text-center para">Marketing techniques have evolved as the ways in which consumers get
                        information change. Radio advertising led to TV advertising, which then shifted to digital
                        marketing with the rise of the internet. Besides these natural market progressions, the COVID-19
                        pandemic is driving the scope of digital marketing even further online. Digital marketing
                        enthusiasts everywhere have started to search and look around for the latest trends observed.
                    </p>
                    <form action="searchpage.php" method="GET" autocomplete="off">
                    <div class="input-group rounded">
                        <input type="search" name="search" class="form-control rounded "
                            placeholder="Search your blog...." aria-label="Search" aria-describedby="search-addon" />
                            <button id="search-button" type="submit" class="btn login">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                </form>
                    <a href="register.php" class="btn btn-primary btn-lg mt-5 get">Create Account <span>
                            <i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none">
                <div class="box1">
                    <img src="logo/home.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="scroll text-center text-secondary">
        <p class="mt-2">Scroll down</p>
        <i class="fas fa-arrow-down"></i>
    </div>

    <!-- Landing page -->

    <div class="container blog text-center mb-4">
        <div class="row">
            <h1 class=" text-center ">OUR BLOG</h1>
            <p class="para  text-center">Because most consumers use smartphones and research products online before
                buying, digital marketing strategies are crucial to businesses. But companies across the globe also
                employ digital marketing to more easily target their audiences online and via mobile devices — and many
                are seeing a significant return on investment (ROI) because of these efforts.</p>
        </div>
        <?php include "Home/blogsec.php";?>
    </div>
    <!-- service sections -->

    <section class="container-fluid mb-5 bg-light text-center">
    <div class="row">
    <div class="col-md-10 d-block m-auto mt-3">

    <h2 class=" text-center" style=" font-weight: bold;">SERVICE</h2>
        <p class="para text-center mt-2">We Provide you best Quality content, which makes you successful in your life. It
            offers digital marketing services such as social media management, social listening, digital marketing
            strategy, technology, market automation, creative services, media buying, and analytics.</p>
            <?php include "Home/service.php";?>
    </div>
</div>
    
    </section>

    <!-- service sections -->
    
    <!-- Reviews  sections -->
    <section class="container-fluid mt-5  mb-5">
<div class="row">
<h2 class=" text-center" style=" font-weight: bold;">Review</h2>

    <div class="col-md-10 d-block m-auto">

        <p class="para text-center mt-2">We Provide you best Quality content, which makes you successful in your life. It
            offers digital marketing services such as social media management, social listening, digital marketing
            strategy, technology, market automation, creative services, media buying, and analytics.</p>
    <?php include "Home/review.php";?>
    </div>
</div>
    </section>
    <!--Reviews   sections -->
    <!-- footer -->

    <?php include 'includes/infooter.php'; ?>
    <!-- footers details -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
<script>
    function preload(){
            let loader=document.querySelector("#preloader")
            loader.style.display="none";
        }

    
</script>
</body>

</html>
