<div class="row vg">
        <div class="col-sm-8 d-block m-auto">
     <div class="row">
       <div class="col-4 d-block m-auto">
         <p>Usertytpe</p>
         <p>Username</p>
         <p>Name :</p>
         <p>Email</p>
       </div>
       <div class="col-8 d-block m-auto">
       <?php  echo "<p>".$_SESSION['Utype']."</p>";?>
       <?php echo "<p>".$_SESSION['Uname']."</p>" ;?>
   <?php echo "<p>".$_SESSION['fname']."</p>";?>
   <?php echo "<p>".$_SESSION['regemail']."</p>";?>
       </div>
     </div>
        </div>

      </div>