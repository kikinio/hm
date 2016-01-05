<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 2:46 AM
 */
session_start();//session is a way to store information (in variables) to be used across multiple pages.

// THIS CODE TO BE TRANSFERRED TO ANOTHER PHP FILE LATER->
$sessionStatus = "Closed";
$con = mysqli_connect("localhost","trynowb_Testuser","T;c=.@E!m7Pm");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"trynowb_my_db");
$userEmail = $_SESSION['email'];
$userName = $_SESSION['userName'];
$sessionBeginEnd = date('U');

$sql = "INSERT INTO `users`.`sessions` (`session_id`, `user_email`, `user_name`, `session_begin_end`, `session_status`)
        VALUES (
        NULL, '".$userEmail."', '".$userName."', '".$sessionBeginEnd."', '".$sessionStatus."'
        )";
mysqli_query($con, $sql);
// <-THIS CODE TO BE TRANSFERRED TO ANOTHER PHP FILE LATER


session_destroy();
header("Location: start.php");//use for the redirection to some page
?>