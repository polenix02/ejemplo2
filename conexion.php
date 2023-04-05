<?php
	function conexion(){
	$host = "host=containers-us-west-156.railway.app";
	$port = "port=7704";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=XWpe9oXWa2BhobUxnnhH";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>