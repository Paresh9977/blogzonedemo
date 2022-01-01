
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php" class="fw-bolder">
                        <img src="logo/lg.jpg" alt="" width="100" height="42" class="">
                        <!-- <span class="logo">Startzone</span> -->
                        </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""><i class="fas fa-sliders-h fa-3 text-dark"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class=" <?php echo (basename($_SERVER['PHP_SELF'])=="index.php")?"active":"" ?>" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?php echo (basename($_SERVER['PHP_SELF'])=="blog.php")?"active":"" ?>" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?php echo (basename($_SERVER['PHP_SELF'])=="about.php")?"active":"" ?>" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?php echo (basename($_SERVER['PHP_SELF'])=="contact.php")?"active":"" ?>" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <?php 
                        if(isset($_SESSION['Uname'])){
                            echo ' <a href="./dashboard.php" class="btn  d-flex pro fw-bolder">Profile</a>';
                        }
                        else{
                          echo ' <a href="./login.php" class="btn  d-flex login fw-bolder">Login</a>';
                        }
                        ?>
                      
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>