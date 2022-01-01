<div class="row mt-4 blogset">
            <div class="owl-carousel owl-theme">
            <?php
  include "./config.php";
  $sql3="SELECT * FROM b_post ORDER BY id DESC LIMIT 6";
  $result3=mysqli_query($conn,$sql3) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
 while($row=mysqli_fetch_assoc($result3)){
     ?>
                <div class="item">
                    <div class="card">
                    <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent">
                        <img src="<?php echo "Blogphoto/". $row["B_photo"];?>" alt="">
                    </a>
                        <div class="card-body">
                        <a href="blogdetail.php?id=<?php echo $row["id"];?>" target="_parent" style="text-decoration: none;">
                            <h4><?php   echo $row["B_cate"]; ?></h4>
                        </a>
                        </div>
                    </div>
                </div>
                <?php } }?>
              
       
           
            </div>
        </div>