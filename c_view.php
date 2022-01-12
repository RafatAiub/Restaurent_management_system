<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
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
</style>
</head>
<body>
<style>
	body{
		  background-image: url("gray.jpg");
	    }
 </style>
<h1 align="center">Product Details</h1>

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
   
</table>
<br>
<p align="center">
<div align="center">
<a href="index.php" class="button" type="submit">GO Back</a>
<a href="orderr.php" class="button">ORDER NOW</a>
</div>
</p>
</body>
</html>

