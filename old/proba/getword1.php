<?php

$q = intval($_POST['q']);
//$q = 2;
$con = mysqli_connect('localhost','Testuser','abc123','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"my_db");
//$sql="SELECT * FROM user WHERE id = '".$q."'";

$sql="SELECT word FROM words where id = '".$q."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
//echo $row['word'];
$newVar = $row['word'];
//echo json_encode( array( "name"=>$newVar,"time"=>"2pm" ) );
//echo json_encode( array( "name"=>"2pm" ) );


echo json_encode( array( "dbWord"=>$newVar ) );
?>