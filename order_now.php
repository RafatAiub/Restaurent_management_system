 <?php
	include_once 'db.php';
if(isset($_POST['order']))
	{
$P_ID       =$_POST['P_ID'];      
$UNIT        =$_POST['UNIT'];
$CPHONE      =$_POST['CPHONE'];

	
//include 'manager_view.php'; 
 

      $query = oci_parse($conn,"INSERT INTO PLACE_ORDER(P_ID,UNIT,CPHONE)
             values('$P_ID ','$UNIT','$CPHONE ')");
	 	 
     $result = oci_execute($query);
     if ($result) {
		        include 'c_view.php';
				echo "<p align='center' text_color='red'><b>". "NEW ORDER PLACED SUCCESSFULLY!!! THANK YOU !!!" ."</b></p>";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}