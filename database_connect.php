<?php
		$host="sql209.byethost5.com";
		$port="3306";
		//$socket="MySQL";
		$user= "b5_30973457";
		$password="naedenglee";
		$dbname="b5_30973457_PROJECT"; 
	
		//$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
       // $conn = new mysqli($host, "root", $password, $dbname)
		//	or die ('Could not connect to the database server' . mysqli_connect_error());

        $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die ('Could not connect to the database server' . mysqli_connect_error());
