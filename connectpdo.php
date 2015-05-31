<?php
	
	echo "PDO OCI CONN";
	
	echo $dbh = new PDO('oci:dbname=127.0.0.1:1521', 'username', 'passwd');
	
	 print_r($dbh);
	 
	$s = $dbh->prepare("SELECT ID, SURNAME FROM TBL_AUTHOR");
	$s->execute();
	
	while (($r = $s->fetch(PDO::FETCH_ASSOC)) != false) {
		echo htmlentities($r['SURNAME']) . "<br>";
	}
	
	echo "<br />END PDO OCI CONN";
