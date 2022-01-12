 <?php
	include_once 'db.php';
if(isset($_POST['ok']))
{
$P_ID        =$_POST['P_ID'];      
$P_NAME      =$_POST['P_NAME']; 
$UNIT_PRICE  =$_POST['UNIT_PRICE'];
$UNIT_QTY    =$_POST['UNIT_QTY'];
$DESCRIPTION =$_POST['DESCRIPTION'];
      


      $query = oci_parse($conn,"UPDATE PRODUCT_DETAIL SET P_ID='$P_ID',P_NAME='$P_NAME',UNIT_PRICE='$UNIT_PRICE',UNIT_QTY='$UNIT_QTY',DESCRIPTION='$DESCRIPTION' WHERE P_ID='$P_ID'");
			 
     $result = oci_execute($query);
     if ($result) {
		        include 'a_view.php'; 
				echo "Data upgrade Successfully !";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}

else if(isset($_POST['done']))
	{
$P_ID        =$_POST['P_ID'];      
$P_NAME      =$_POST['P_NAME']; 
$UNIT_PRICE  =$_POST['UNIT_PRICE'];
$UNIT_QTY    =$_POST['UNIT_QTY'];
$DESCRIPTION =$_POST['DESCRIPTION'];

	
 
 

      $query = oci_parse($conn,"INSERT INTO PRODUCT_DETAIL(P_ID,P_NAME,UNIT_PRICE,UNIT_QTY,DESCRIPTION)
             values('$P_ID','$P_NAME','$UNIT_PRICE','$UNIT_QTY','$DESCRIPTION')");
	  // $sql='BEGIN display_product_changes; END;';		 
     $result = oci_execute($query);
     if ($result) {
		 //$stid=oci_parse($conn,$sql);
				echo "New Product Added";
				include 'a_view.php';
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}
else
	include 'index.php';
/*
 CREATE OR REPLACE TRIGGER update_product 
AFTER DELETE ON product_detail 
FOR EACH ROW 
WHEN (NEW.p_id > 0) 
BEGIN 
 dbms_output.put_line('Order Deleted.'); 
END;

 CREATE OR REPLACE TRIGGER display_price_changes 
BEFORE UPDATE ON product_detail
FOR EACH ROW 
WHEN (NEW.p_id > 0) 
DECLARE 
 price_diff number; 
BEGIN 
 price_diff := :NEW.unit_price - :OLD.unit_price; 
 dbms_output.put_line('Old price: ' || :OLD.unit_price); 
 dbms_output.put_line('New price: ' || :NEW.unit_price); 
 dbms_output.put_line('Price difference: ' || price_diff); 
END;*/
	
?>