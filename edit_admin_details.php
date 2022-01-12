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
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=mail], select {
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
<h1 align="middle">Update ADMIN Details</h1>


<div class="container">
  <form method="post"action="u_admin.php" TEXT="">
		
    <input type="number" id="" name="A_ID" placeholder="ENTER ADMIN ID" required/>
	<input type="mail" id="" name="A_EMAIL" placeholder="ENTER ADMIN EMAIL" required/> 
	
	<input type="password" id="" name="A_PASSWORD" placeholder="ENTER ADMIN PASS" required/>
	<input type="number" id="" name="A_PHONE_NO" placeholder="ENTER ADMIN CELL PHONE NUMBER" required/>
     
    
	
	 <input type="text" id="" name="A_ADDRESS" placeholder="ENTER ADMIN ADDRESS" required/>

	<input type="text" id="" name="A_NAME" placeholder="ENTER ADMIN NAME" required/>
     

  
   
    
     <input type="submit" name="okk" value="Edit Admin Profile">
    
	
	
		
  </form>
</div>

<div class="container">
  <form method="post"action="admin.php" TEXT="">
	

    <input type="submit" name="done" value="GO BACK">
	
		
  </form>
</div>


</body>
</html>
