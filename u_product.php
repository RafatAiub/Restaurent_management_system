<!DOCTYPE html>
<html>
<style>
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
input[type=number], select {
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
<h1 align="middle">Update Product Details</h1>


<div class="container">
  <form method="post"action="upgrade.php" TEXT="">
		
    <input type="number" id="" name="P_ID" placeholder="ENTER PRODUCT ID" required/>
     
    <input type="text" id="" name="P_NAME" placeholder="ENTER PRODUCT NAME" required/>
     
    <input type="number" id="" name="UNIT_PRICE" placeholder="UNIT PRICE OF PRODUCT" required/>
     
    <input type="number" id="" name="UNIT_QTY" placeholder="UNIT QUANTITY OF PRODUCT" required/>
  
    <input type="text" id="" name="DESCRIPTION" placeholder="DESCRIPTION OF PRODUCT" required/>

    
     <input type="submit" name="ok" value="Upgrade">
    <input  type="submit" name="done" value="New Product">
	
	
		
  </form>
</div>
<div class="container">
  <form method="post"action="index.php" TEXT="">
	

    <input type="submit" name="done" value="GO BACK">
	
		
  </form>
</div>


</body>
</html>
