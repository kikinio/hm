<?php
include("database/db_conection.php");
//$dbcon=mysqli_connect("localhost","trynowb_Testuser","T;c=.@E!m7Pm");
//mysqli_select_db($dbcon,"trynowb_my_db");
//$dbcon
$userEmail = $_POST['email'];
$selWord = $_POST['selWord'];
$reqTime = date('U');

echo $_POST['selWord'];

$sql = "INSERT INTO `gamerequests` (`id`, `chooser_email`, `slelected_word`, `request_time`)
VALUES (
NULL, '".$userEmail."', '".$selWord."', '".$reqTime."'
)";
mysqli_query($dbcon, $sql);


var_dump($_POST);

?>