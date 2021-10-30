

<!DOCTYPE html>
<html >
<head>
    <title></title>
<?php include 'links.php'; ?>
<!-- <?php include 'style.php'; ?> -->


</head>
<body>
    
<div class = "main-div">
<h1> List of candidates </h1>

<div class= "center_div">
<div class = "table-responsive">
<table>

<thead>
<tr>
<th>id</th>
<th>name</th>

<th>mobile</th>
<th>email</th>
<th>upi</th>
<th>money_spend</th>
<th colspan="2">operation</th>
</tr>

</thead>
<tbody>
<?php

include 'connection.php';
$selectquery = "select * from friends ";
$query = mysqli_query($con, $selectquery);
$nums = mysqli_num_rows($query);
// $res = mysqli_fetch_array($query);

while ($res = mysqli_fetch_array($query)) {
   
?>

    <tr>
    <td><?php echo $res['id'] ;  ?></td>
    <td><?php echo $res['name'] ;  ?></td>
    <!-- <td><?php echo $res['degree'] ;  ?></td> -->
    <td><?php echo $res['mobile'] ;  ?></td>
    <td><?php echo $res['email'] ;  ?></td>
    <td><?php echo $res['upi'] ;  ?></td>
    <td><?php echo $res['money_spend'] ;  ?></td>
    <td><a href="update.php?id=<?php echo $res['id'] ;  ?>"
     data-toggle="tooltip" data-placement="bottom"
     title="update"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
     <td><a href="delete.php?id=<?php echo $res['id'] ;  ?>"
     data-toggle="tooltip" data-placement="bottom"
     title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    
    </tr>
    
<?php

}
?>


</tbody>

</table>

</div>

</div>

</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>