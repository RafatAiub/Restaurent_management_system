 <?php
	include_once 'db.php';
if(isset($_POST['save']))
{
	$A_ID       = $_POST['A_ID'];
    $A_NAME		= $_POST['A_NAME'];
    $A_ADDRESS	= $_POST['A_ADDRESS'];
    $A_PASSWORD	= $_POST['A_PASSWORD'];
    $A_PHONE_NO	= $_POST['A_PHONE_NO'];
    $A_EMAIL	= $_POST['A_EMAIL'];
      

      $query = oci_parse($conn,"INSERT INTO ADMIN(A_ID,A_NAME,A_ADDRESS,A_PASSWORD,A_PHONE_NO,A_EMAIL)
             values('$A_ID', '$A_NAME',  '$A_ADDRESS', '$A_PASSWORD', '$A_PHONE_NO', '$A_EMAIL')");
			 
     $result = oci_execute($query);
     if ($result) {
		 include 'a_reg.php';
				echo "Data added Successfully !";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}

	
?>