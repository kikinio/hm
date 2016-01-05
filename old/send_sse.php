<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');



$con = mysqli_connect('localhost','trynowb_Testuser','T;c=.@E!m7Pm','trynowb_my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"trynowb_my_db");
$sql="SELECT * FROM gamelogs";
$result = mysqli_query($con,$sql);
$rowsNum = mysqli_num_rows($result);
//$q = mt_rand(44, $rowsNum);
$q = $rowsNum;
//$q = mt_rand(44, 57);

//$sql="SELECT * FROM gamelogs where id = '".$q."'";

$sql="SELECT * FROM gamelogs ORDER BY id DESC LIMIT 1";

$result = mysqli_query($con,$sql);


$row = mysqli_fetch_array($result);
$temp = $row['word'];
$arrayNew = array( "user_word_pointer"=>$row['user_word_pointer'],"user_word_guesser"=>$row['user_word_guesser'],"word"=>$row['word'],"initial_lives"=>$row['initial_lives'],"lives"=>$row['lives'],"word_length"=>$row['word_length'],"current_word"=>$row['current_word'],"num_pics"=>$row['num_pics'],"chgPicIndicator"=>$row['chgPicIndicator'],"id"=>$row['id']);

//echo json_encode($arrayNew);
$new_data = json_encode($arrayNew);


//generate random number for demonstration
//$new_data = rand(0, 1000);
//echo the new number
//echo "data: New random number: ".$new_data."\n\n";
echo "retry: 10\ndata: {$new_data}\n\n";
//echo "retry: 5000\ndata: ".$new_data."\n\n";

flush();
?>