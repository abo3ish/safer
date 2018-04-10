<?php

include_once "Database.php";

$type 			= $_POST['type'];
$accommodation 	= $_POST['accommodation'];
$area	 		= $_POST['area'];
$continent 		= $_POST['continent'];
$min_budget 	= $_POST['min_budget'];
$max_budget 	= $_POST['max_budget'];
$semester	 	= $_POST['semester'];

$results = $database->query($type ,$accommodation ,$semester ,$continent ,$area ,$min_budget ,$max_budget);

echo json_encode($results);