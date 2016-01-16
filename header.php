<?php
session_start();
if(!$_SESSION['email'])
{
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
    
}
$sessionStatus = "Active";
if(!isset($_GET['oe']))
{
    include('getword.php');
}else{
    $oppEml = $_GET['oe'];
    include('getwordopponet.php');
}
?>
<h1>Online shop</h1>
<br style="clear:both;" />
<h1 id="1234">Hangman Game</h1>