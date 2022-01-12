 <?php
	include_once 'db.php';
if(isset($_POST['save']))
{
      $cname = $_POST['cname'];
      $email = $_POST['email'];
	  $pass =$_POST['pass'];
	  $phone = $_POST['phone'];
	  $address =$_POST['address'];
	 

      $query = oci_parse($conn,"INSERT INTO CREAT_ACCOUNT(cname,email,pass,phone,address)
             values('$cname', '$email',  '$pass', '$phone', '$address')");
     $result = oci_execute($query);
     if ($result) {
				echo "Data added Successfully !";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}

	
?>