<?php
require_once('config.php');
$query = mysql_query("select * from json");
while($fetch = mysql_fetch_array($query))
{
		$output[] = array ($fetch[0],$fetch[1],$fetch[2],$fetch[3],$fetch[4]);
}
echo json_encode($output);
?>