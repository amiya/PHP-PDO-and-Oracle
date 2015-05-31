<?php

//error_reporting(-1);
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
//ini_set('display_errors', 1);



    
	//$dsn = 'oci:host=//192.168.50.18:1522;charset=UTF8';
	//$dsn = 'oci:host=192.168.50.18:1522;charset=UTF8';
	$dsn = 'oci:dbname=tvl11g;charset=UTF8';
	$username = 'CLA_MOPA';
	$password = 'CLA_MOPA';



	try { 
		//$dbc = new PDO($dsn, $username, $password); 

		$dbc = new PDO('oci:dbname=tvl11g;charset=UTF8', 'CLA_MOPA', 'CLA_MOPA');
		
		
	} catch (PDOException $e) { 
		//throw new pdoDbException($e); 
		//print_r($e);
		echo ($e->getMessage());
	} 

 echo "<br />-----------------------<br />";
 print_r($dbc);
 // var_dump($dbc);
 echo "<br />-----------------------<br />";

$sth = $dbc->prepare("SELECT ID, SURNAME FROM TBL_AUTHOR");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
print_r($result);


