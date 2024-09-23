<?php

function getConnection()
{
	$serverName="localhost";
 	$userName="root";
 	$password="";
 	$dbName="ab";
 	$conn=new mysqli($serverName,$userName,$password,$dbName);
 	return $conn;

}

?>