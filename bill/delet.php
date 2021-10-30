<?php

include 'connection.php';
$id = $_GET['id'];

$deletequery = "delete from jobregistration where id=$id ";

$query = mysqli_query($con , $deletequery);

if ($query) {
    ?>
  <script>
  alert("deleted properly");
  </script>
    <?php
  
  }
  else{
  ?>
  <script>
  alert(" not deleted properly");
  </script>
  <?php
  
  }
  header('location:display.php');
?>