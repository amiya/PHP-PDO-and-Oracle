<?php

//error_reporting(-1);
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
//ini_set('display_errors', 1);	
//$tns = "(DESCRIPTION = ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = PC61.tvista-bd.com)(PORT = 1521)))
	//	    (CONNECT_DATA = (SID = tvl11g)(SERVER = DEDICATED)))";
	

//$tns = "oci:dbname=(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = PC61.tvista-bd.com)(PORT = 1521)))
//		(CONNECT_DATA = (SID = tvl11g)(SERVER = DEDICATED)))";		   

$tns = "oci:dbname=(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST =localhost)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = ora11g)
    ))";		   

	   
$db_username = "DB_USER_NAME";
$db_password = "DB_PASSWORD";


try{
 //   $dbc = new PDO("oci:dbname=".$tns,$db_username,$db_password);
    $dbc = new PDO($tns,$db_username,$db_password);
}catch(PDOException $e){
    echo ($e->getMessage());
}


echo "<br />-----------------------<br />";
print_r($dbc);
// var_dump($dbc);
echo "<br />-----------------------<br />";
echo "<br />-----------------------<br />";

//$sth = $dbc->prepare("SELECT ID, SURNAME FROM TBL_AUTHOR");
$sth = $dbc->prepare("SELECT USER_ID, PASSWORD FROM TBL_USER");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
print_r($result);


