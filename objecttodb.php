<?php

$con = mysqli_connect('localhost','trynowb_Testuser','T;c=.@E!m7Pm','trynowb_my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"trynowb_my_db");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
//$sql="SELECT * FROM words";
//$result = mysqli_query($con,$sql);
//$rowsNum = mysqli_num_rows($result);
//echo $rowsNum ."<br>";
//$q = mt_rand(1, $rowsNum);
//echo $q;
//$sql="SELECT word FROM words where id = '".$q."'";
//$result = mysqli_query($con,$sql);
//$row = mysqli_fetch_array($result);
//echo $row['word'];

//$newVar = $row['word'];


/*
$json = '{
    "title": "JavaScript: The Definitive Guide",
    "author": "David Flanagan",
    "edition": 6
}';
$book = json_decode($json);
 */
//echo $book->title
//echo $json;
//$q = intval($_POST['q']);
//$q = 2;
//$objects = $HTTP_RAW_POST_DATA['json_obj_2'];
$str_json = file_get_contents('php://input');

$str_json2 = json_decode($str_json, true);
//print_r($str_json2);
//$userWordPointer = "Niki";
//$userWordGuesser = "Kiril";
//$getit = $str_json2->['word'][5];
//$word = $str_json2['word'];
//echo $word;
    $sql = "INSERT INTO `gamelogs` (`id`, `user_word_pointer`, `user_word_guesser`, `word`, `initial_lives`, `lives`, `word_length`, `current_word`, `num_pics`, `chgPicIndicator`)
    VALUES (
    NULL, '".$str_json2['userWordPointer']."', '".$str_json2['userGuesser']."', '".$str_json2['word']."', '".$str_json2['initialLives']."', '".$str_json2['lives']."', '".$str_json2['len']."', '".$str_json2['currentWord']."', '".$str_json2['numPic']."', '".$str_json2['chgPicIndicator']."'
    )";
    mysqli_query($con, $sql);
    
    

    /*
INSERT INTO `my_db`.`gamelogs` (`id`, `user_word_pointer`, `user_word_guesser`, `word`, `initial_lives`, `lives`, `word_length`, `current_word`, `num_pics`)
        VALUES (NULL, 'computer', 'guest1', 'COTE-DIVOIRE', '5', '5', '12', '****-*******', '1');
*/


//echo $objects;
//echo 2;
//var_dump($objects);
//var_dump($_POST['objectsAll']);
//var_dump($_POST);
echo $str_json;

//echo json_encode( array( "name"=>"2pm" ) );
/*
$con = mysqli_connect('localhost','Testuser','abc123','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"my_db");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM words";
$result = mysqli_query($con,$sql);
$rowsNum = mysqli_num_rows($result);
echo $rowsNum ."<br>";
$q = mt_rand(0, $rowsNum);
echo $q;
$sql="SELECT word FROM words where id = '".$q."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
//echo $row['word'];

$newVar = $row['word'];

//echo json_encode( array( "name"=>$newVar,"time"=>"2pm" ) );
//echo json_encode( array( "name"=>"2pm" ) );
//echo json_encode( $rowsNum));


//echo json_encode( array( "dbWord"=>$newVar ));
*/
?>