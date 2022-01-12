<!DOCTYPE html>
<html>
<style>
  
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<style>
	body{
		  background-image: url("gray.jpg");
	    }
 </style>
 <table id="customers">
  <tr>
    <td>P_ID</td>
    <td>P_Name</td>
    <td>UNIT_PRICE</td>
    <td>UNIT_QTY</td>
    <td>DESCRIPTION</td>
	
  </tr>
<?php

$conn = oci_connect('SYSTEM', '1110210850', 'localhost/XE');

$stid = oci_parse($conn, 'SELECT * FROM product_detail');
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
		
  
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
		
    }
	 
    echo "</tr>\n";
}


?>

<h1 align="center">Place Your order Here</h1>

<div align="right">
<a href="c_view.php" class="button" type="submit">GO Back</a>
</div>
<div class="container">
  <form method="post"action="order_now.php">
    
    <input type="text" id="" name="P_ID" placeholder="plese write your desire product id.." required="required"/>
     
    <input type="text" id="" name="UNIT" placeholder="unit quantity of that product" required="required"/>
  
    <input type="text" id="" name="CPHONE" placeholder="your phone number"required="required"/>

    
     <input type="submit" name="order" value="ORDER" required="required"/>
   
  </form>
</div>

   
</table>
</body>
</html>
