<?php
	require('db.php');
if(isset($_POST['save']))
{	

    //session_start();// session for this user has been started

if (!$conn)
	{
//$m = oci_error();
//echo $m['message'], "\n";
//error fuction returns an oracle message.
	}
$query = "SELECT A_ID  FROM ADMIN WHERE A_ID=:A_ID and A_PASSWORD=:A_PASSWORD"; 
//query is sent to the db to fetch row id.
 $stid = oci_parse($conn, $query);
/*oci_parse fuction prepares the db to execute the statement.
requires two parameters resource($con)and sql string.*/
if (isset($_POST['A_ID'])||isset($_POST['A_PASSWORD'])){           

$A_ID=$_POST['A_ID'];
$A_PASSWORD=$_POST['A_PASSWORD'];
}


oci_bind_by_name($stid, ':A_ID', $A_ID);
oci_bind_by_name($stid, ':A_PASSWORD', $A_PASSWORD);
/*oci_bind_by_name function tells php which variable to use.
They are references of the original variables.*/
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);
//oci_fetch_array returns a row from the db.

 if ($row) {
 $_SESSION['A_ID']=$_POST['A_ID'];
 echo"log in successful";
  }
 else {
	 include 'a_login.php';
         echo("The person " . $A_ID . " is not found .
         Please check the spelling and try again or check password");
exit;
}
$A_ID=$row['A_ID'];
oci_free_statement($stid);
oci_close($conn);
header('Location: a_view.php');

//header function locates you to a welcome page saved s wel.php
	
}

 ?>