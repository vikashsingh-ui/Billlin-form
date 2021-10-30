
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURD tutorial</title>
  <?php   include 'links.php' ?>
</head>
<body>

<div class="container register">

<div class ="row">
<div class ="col-md-3 register-left">
<img src="crud.svg" alt="">
<h3>Welcome</h3>
<p>please fill all the details carefully .</p>
<a href="display.php">Check form</a> <br/>
</div>
<div class ="colo-md-9 register-right">
<div class ="tab-content" id="mytabcontent">
<div class ="tab-pan fad show activ" id ="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class ='registration-heading'>Apply for web devloper post</h3>

<form action="" method="POST">
<div class="row registration-form">

<?php
include 'connection.php' ;
$ids = $_GET['id'];
$showquery = "select * from jobregistration where id=($ids) ";
$showdata =  mysqli_query($con , $showquery);
$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['submit'])) {
    $idupdate = $_GET['id'];

  $name = $_POST['user'];
//   $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $upi = $_POST['upi'];
  $money_spend = $_POST['money_spend'];

// $insertquery = "insert into jobregistration(name, degree, mobile, email,
// refral, jobpost
//  ) value( '$name', '$degree','$mobile','$email','$refer','$jobprofile')";

$query = "update  jobregistration set id='$idupdate', name='$name', mobile='$mobile',
 email='$email',
upi='$upi', money_spend='$money_spend' where id=$idupdate ";

// $query = " update `jobregistration` set `id`=[$idupdate],`name`=[$name],
// `degree`=[$degree],`mobile`
// =[$mobile],`email`=[$email],`refral`=[$refer],`jobpost`=[$jobprofile]
//  where id=$idupdate";

 $res = mysqli_query($con, $query);

if ($res) {
  ?>
<script>
alert("data updated properly");
</script>
  <?php

}
else{
?>
<script>
alert("data not updated properly");
</script>
<?php

}
}

?>

<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter your name*" name="user" value="<?php echo $arrdata['name'] ; ?>" required/>

</div>
<div class="form-group">
<input type="tel" class="form-control" placeholder="mobile number*" name="mobile" value="<?php echo $arrdata['mobile'] ; ?>" required/>
</div>

<div class="form-group">
<input type="text" class="form-control" placeholder="upi*" name="upi" value="<?php echo $arrdata['refral'] ; ?>" required/>

</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="money_spend*" name="money_spend" value="<?php echo $arrdata['degree'] ; ?>" required/>

</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="email id*" name="email" value="<?php echo $arrdata['email'] ; ?>" required/>

</div>
<!-- <div class="form-group">
<input type="text" class="form-control" placeholder="web devloper post*" name="jobprofile" value="Webdevloper" required/>

</div> -->
<input type="submit" class="btnregister" name="submit" value="update"/>
</div>

</div>


</form>

</div>

</div>

</div>

</div>


</div>

</body>
</html>
