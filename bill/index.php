<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURD tutorial</title>
  <?php   include 'links.php' ?>
  <!-- <?php   include 'style.css' ?> -->
</head>
<body>

<div class="container register">

<div class ="row">
<div class ="col-md-3 register-left">
<img src="crud.svg" alt="">
<h3>Welcome</h3>
<p>please fill all the details carefully . </p>
<a href="display.php">Check form</a> <br/>
</div>
<div class ="colo-md-9 register-right">
<div class ="tab-content" id="mytabcontent">
<div class ="tab-pan fad show activ" id ="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class ='registration-heading'>Enter your friends details</h3>

<form action="" method="POST">
<div class="row registration-form">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter member name*" name="user" value="" required/>

</div>
<div class="form-group">
<input type="tel" class="form-control" placeholder="mobile number*" name="mobile" value="" required/>
</div>

<div class="form-group">
<input type="text" class="form-control" placeholder="Upi.id*" name="upi" value="" required/>

</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="money spend*" name="money" value="" required/>

</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="email id*" name="email" value="" required/>

</div>

<input type="submit" class="btnregister" name="submit" value="Add another"/>
<div class="form-group">
<!-- <input type="email" class="form-control"  name="next" value="to bill part" /> -->

</div>
</div>

</div>
<br><br>
<div>
  <button style="width:400px;">Continue to bill</button>
</div>


</form>

</div>

</div>

</div>

</div>


</div>

</body>
</html>
<?php
include 'connection.php' ;

if (isset($_POST['submit'])) {
  $name = $_POST['user'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $upi = $_POST['upi'];
  $money_spend = $_POST['money'];


  $insertquery = "insert into friends(name, mobile, email, upi,
  money_spend
   ) value( '$name', '$mobile','$email','$upi','$money_spend')";
  

 $res = mysqli_query($con, $insertquery);

if ($res) {
  ?>
<script>
alert("data inserted properly");
</script>
  <?php

}
else{
?>
<script>
alert("data not inserted properly");
</script>
<?php

}
}

?>