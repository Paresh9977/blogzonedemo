<?php
  include "config.php";
  $id=$_GET['pid'];
  $sql="DELETE FROM b_post WHERE id={$id}";
  mysqli_query($conn,$sql);
  header("Location: dashboard.php");
?>