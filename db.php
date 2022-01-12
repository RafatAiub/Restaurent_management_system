

<?php

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('SYSTEM', '1110210850', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	
}
//$status = "Connection with Oracle is Successful!!!";
//	echo $status;

//oci_close($conn);
?>