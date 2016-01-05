<?php

/*
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
*/

//echo '[{"word":"Bulgaria"}]';


$con = mysqli_connect('localhost','trynowb_Testuser','T;c=.@E!m7Pm','trynowb_my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"trynowb_my_db");

$partialWord = $_POST['partialWord'];
//var_dump($_POST['partialWord']);
//var_dump($partialWord);


//$sql="SELECT * FROM user WHERE id = '".$q."'";
//$sql="SELECT * FROM words";
//$result = mysqli_query($con,$sql);
//$rowsNum = mysqli_num_rows($result);
//echo $rowsNum ."<br>";

$sql="SELECT DISTINCT word FROM words where word LIKE '$partialWord%' ORDER BY word";
$result = mysqli_query($con,$sql);

    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    
//    var_dump($emparray);
   
 //   echo "</br>";
//    echo "{".'"countrylist"'.':' . json_encode($emparray)."}";
    echo json_encode($emparray);
//    var_dump(json_encode($emparray));
//    echo json_encode(array('data' => $emparray));
/*
    while ($wordArray = mysqli_fetch_array($result, MYSQL_ASSOC)){
    //echo "<div>".$wordArray['word'];
    $arrayNew1 = array( "word"=>$wordArray['word']);
    $arrayNew2 = array($arrayNew1);
    //echo $wordArray['word'];
    echo json_encode($arrayNew1);
    //echo json_encode($arrayNew2); 
}
var_dump($arrayNew1);
var_dump($arrayNew2);

$row = mysqli_fetch_array($result);
//echo $row['word'];

$newVar = $row['word'];
*/
//$arrayNew = array( "user_word_pointer"=>$row['user_word_pointer'],"user_word_guesser"=>$row['user_word_guesser'],"word"=>$row['word'],"initial_lives"=>$row['initial_lives'],"lives"=>$row['lives'],"word_length"=>$row['word_length'],"current_word"=>$row['current_word'],"num_pics"=>$row['num_pics']);
//echo json_encode($arrayNew);
?>


<?php
/*
$con = mysqli_connect('localhost','trynowb_Testuser','T;c=.@E!m7Pm','trynowb_my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"trynowb_my_db");

$sql="SELECT * FROM gamelogs";
$result = mysqli_query($con,$sql);
$rowsNum = mysqli_num_rows($result);

$q = mt_rand(1, $rowsNum);

$sql="SELECT * FROM gamelogs where id = '".$q."'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

$temp = $row['word'];

$arrayNew = array( "user_word_pointer"=>$row['user_word_pointer'],"user_word_guesser"=>$row['user_word_guesser'],"word"=>$row['word'],"initial_lives"=>$row['initial_lives'],"lives"=>$row['lives'],"word_length"=>$row['word_length'],"current_word"=>$row['current_word'],"num_pics"=>$row['num_pics']);

echo json_encode($arrayNew);
*/
?>