<?php

//SEND SESSION DATA TO DB: users, TABLE: sessions:
$con=mysqli_connect("localhost","trynowb_Testuser","T;c=.@E!m7Pm");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"trynowb_my_db");


$str_json = file_get_contents('php://input');

$str_json2 = json_decode($str_json, true);
//print_r($str_json2);
$userWordPointer = "Niki";
$userWordGuesser = "Kiril";
$sessionStatus = $str_json2['sessionStatus'];
//$getit = $str_json2->['word'][5];
//$word = $str_json2['word'];
//echo $word;


$sql = "INSERT INTO `sessions` (`session_id`, `user_email`, `user_name`, `session_begin_end`, `session_status`)
VALUES (
NULL, '".$str_json2['userEmail']."', '".$str_json2['userName']."', '".$str_json2['sessionBeginEnd']."', '".$sessionStatus."'
)";
mysqli_query($con, $sql);


echo $str_json;