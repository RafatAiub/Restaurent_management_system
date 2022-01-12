<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <style>
  * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
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
 <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="admin.php">Admin Details </a>
  <a href="a_reg.php">Admin Registration </a>
  <div class="search-container">
    <form method="POST" action="view_customer_email.php">
      <input type="text" placeholder="Search Number.." name="search"/>
	  <input type="submit" name="find" value="find"/>
    </form>
  </div>
</div>

<h2 align="center">CUSTOMER ORDER</h2>

<table id="customers">
  <tr>
    <td>Product_ID</td>
    <td>UNIT NEEDED</td>
    <td>CUSTOMER NUMBER</td>
  
  </tr>
 
<?php

$conn = oci_connect('SYSTEM', '1110210850', 'localhost/XE');

$stid = oci_parse($conn, 'SELECT * FROM place_order');
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
<br>
<form method="post" action="manager_view.php"  align="center">
<p align="center">
<input type="SUBMIT" name="save" value="CONFIRM FIRST ORDER "/>
</p>
</form>
<br>

<?php 

if(isset($_POST['save']))
	{
$conn = oci_connect('SYSTEM', '1110210850', 'localhost/XE');
      $query = oci_parse($conn,"DELETE FROM PLACE_ORDER");
	 	 
      oci_execute($query);
    }
?>
<h2 align="center">PRODUCT CHART</h2>

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
<a href="u_product.php" class="button"align="right">UPDATE</a>
</div>

</p>
</body>
</html>

