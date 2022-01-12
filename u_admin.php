 <?php
	include_once 'db.php';
if(isset($_POST['okk']))
{
$A_ID       =$_POST['A_ID']; 
$A_EMAIL	=$_POST['A_EMAIL']; 
$A_PASSWORD =$_POST['A_PASSWORD']; 
$A_PHONE_NO =$_POST['A_PHONE_NO']; 
$A_ADDRESS  =$_POST['A_ADDRESS']; 
$A_NAME     =$_POST['A_NAME']; 



      $query = oci_parse($conn,"UPDATE ADMIN SET A_ID='$A_ID',A_EMAIL='$A_EMAIL',A_PASSWORD='$A_PASSWORD',A_PHONE_NO='$A_PHONE_NO',A_ADDRESS='$A_ADDRESS',A_NAME='$A_NAME' WHERE A_ID='$A_ID'");
			 
     $result = oci_execute($query);
     if ($result) {
		        include 'admin.php'; 
			 echo "<p align='center' text_color='red'><b>". "Profile update successfully ........Please Check........." ."</b></p>";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}
?>