<?php
$con = mysqli_connect('localhost','trynowb_Testuser','T;c=.@E!m7Pm','trynowb_my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"trynowb_my_db");
$sql="SELECT * FROM words";
$result = mysqli_query($con,$sql);
$rowsNum = mysqli_num_rows($result);
$q = mt_rand(1, $rowsNum);
$sql="SELECT word FROM words where id = '".$q."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$newVar = $row['word'];
?>