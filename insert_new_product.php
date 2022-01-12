 <?php
	include_once 'db.php';
if(isset($_POST['done']))
	{
$P_ID        =$_POST['P_ID'];      
$P_NAME      =$_POST['P_NAME']; 
$UNIT_PRICE  =$_POST['UNIT_PRICE'];
$UNIT_QTY    =$_POST['UNIT_QTY'];
$DESCRIPTION =$_POST['DESCRIPTION'];

	
 
 

      $query = oci_parse($conn,"INSERT INTO PRODUCT_DETAIL(P_ID,P_NAME,UNIT_PRICE,UNIT_QTY,DESCRIPTION)
             values('$P_ID','$P_NAME','$UNIT_PRICE','$UNIT_QTY','$DESCRIPTION')");
	   $sql='BEGIN display_product_changes; END;';		 
     $result = oci_execute($query);
     if ($result) {
		 $stid=oci_parse($conn,$sql);
				echo "New Product Added";
				include 'a_view.php';
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}

/*CREATE OR REPLACE TRIGGER display_product_changes 
AFTER INSERT ON product_detail 
FOR EACH ROW 
WHEN (NEW.p_id > 0) 
BEGIN 

 dbms_output.put_line('New Product Added'); 
END;*/

	
?>