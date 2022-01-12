<?php
	include_once 'db.php';
if(isset($_POST['find']))
{
	$phone   = $_POST['search'];
    
    $query = oci_parse($conn,"select display_email('$phone') from creat_account");
			 
     $result = oci_execute($query);

     if ($result==1) {
		       include'manager_view.php';
			   echo "<p align='center' text_color='red'><b>". "The Phone Number  is found on customer database" ."</b></p>";
				
				exit();
	}
	else if($result==0){
		include'manager_view.php';
			   echo "<p align='center' text_color='red'><b>". "The Phone Number is not found on customer database" ."</b></p>";
				
				exit();
	}
	else{
		include'manager_view.php';
		echo "Error !";
				exit();
	}
}

	
?>
