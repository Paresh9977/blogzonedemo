<?php
  include "config.php";
  $id=$_GET['pid'];
  $sql="DELETE FROM reguser WHERE id={$id}";
  mysqli_query($conn,$sql);
  header("Location: dashboard.php");
?>