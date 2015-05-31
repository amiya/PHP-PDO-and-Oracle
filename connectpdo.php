<?php
	
	echo "PDO OCI CONN";
	
	echo $dbh = new PDO('oci:dbname=10.0.30.105:1521', 'elibrary', 'elibrary@123');
	
	 print_r($dbh);
	 
	$s = $dbh->prepare("SELECT ID, SURNAME FROM TBL_AUTHOR");
	$s->execute();
	
	while (($r = $s->fetch(PDO::FETCH_ASSOC)) != false) {
		echo htmlentities($r['SURNAME']) . "<br>";
	}
	
	echo "<br />END PDO OCI CONN";