<?php
include("database/db_conection.php");


$sql = "SELECT DISTINCT chooser_email FROM `gamerequests`";
$result = mysqli_query($dbcon, $sql);
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}                
echo json_encode($emparray); 

?>