<?php
$con = mysqli_connect('localhost','trynowb_Testuser','T;c=.@E!m7Pm','trynowb_my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"trynowb_my_db");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM gamelogs";
$result = mysqli_query($con,$sql);
$rowsNum = mysqli_num_rows($result);
//echo $rowsNum ."<br>";
$q = mt_rand(1, $rowsNum);
//echo $q ."</br>";
$sql="SELECT * FROM gamelogs where id = '".$q."'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

//print_r($row);
$temp = $row['word'];
//echo $temp;

//echo json_encode($row);

//echo "</br>";
$arrayNew = array( "user_word_pointer"=>$row['user_word_pointer'],"user_word_guesser"=>$row['user_word_guesser'],"word"=>$row['word'],"initial_lives"=>$row['initial_lives'],"lives"=>$row['lives'],"word_length"=>$row['word_length'],"current_word"=>$row['current_word'],"num_pics"=>$row['num_pics']);
//print_r($arrayNew);
//echo "</br>";
echo json_encode($arrayNew);
//<?php echo json_encode( array( "name"=>"John","time"=>"2pm" ) );



//'".$str_json2['word']."'current_word

//echo $row['word'];

//$newVar = $row['word'];
?>