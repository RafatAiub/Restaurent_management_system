<?php
	require('db.php');
if(isset($_POST['save']))
{	

    session_start();// session for this user has been started

if (!$conn)
	{
$m = oci_error();
echo $m['message'], "\n";
//error fuction returns an oracle message.
	}
$query = "SELECT email  FROM creat_account WHERE email=:email and pass=:pass"; 
//query is sent to the db to fetch row id.
 $stid = oci_parse($conn, $query);
/*oci_parse fuction prepares the db to execute the statement.
requires two parameters resource($con)and sql string.*/
if (isset($_POST['email'])||isset($_POST['pass'])){           

$email=$_POST['email'];
$pass=$_POST['pass'];
}
echo $email;

oci_bind_by_name($stid, ':email', $email);
oci_bind_by_name($stid, ':pass', $pass);
/*oci_bind_by_name function tells php which variable to use.
They are references of the original variables.*/
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);
//oci_fetch_array returns a row from the db.

 if ($row) {
 $_SESSION['email']=$_POST['email'];
 echo"log in successful";
  }
 else {
	 include 'login.php';
	 echo("wrong password or email address!!!");
         echo("please try again ");
exit;
}
$email=$row['email'];
oci_free_statement($stid);
oci_close($conn);
header('Location: c_view.php');

//header function locates you to a welcome page saved s wel.php
	
}

 ?>