<?php

function conectar(){

	$host="localhost";
	$user="root";
	$pw=""; 
	$db="venepol";
	$con = mysqli_connect($host, $user, $pw, $db);

        if (!$con) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        
        
	return $con;
	}
?>
