<?php

$username = "root";
$password = "";
$server = 'localhost';
$database = 'bill';

$con = mysqli_connect($server, $username, $password,$database);
if ($con) {
    
    ?>
<script>
alert('connection successful');
</script>
    <?php
}else{
    die ( "no connection" . mysqli_connect_error());

}

?>