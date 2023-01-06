<?php
$db_connection = pg_connect("dbname=telescope user=postgres password=XXXXX");

foreach($_REQUEST as $key => $val) {
if ($val == "1") {
	$flag_id = "2";
} else {
	$flag_id = "1";
}

$explode = explode("-",$key);
$capablity = $explode[1]; 
$qq = "UPDATE capability set flag_id = $flag_id  where id = $capablity"; 
$result = pg_query($db_connection, $qq);
}

header("Location: index.php");



?>