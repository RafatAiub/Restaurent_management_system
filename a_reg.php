<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>registration</title>
</head>

<body>

	

    <div class="container" id="container">
        
            <form method="post" action="a_input.php"  >
                <h1 style="padding-bottom: 0px">NEW ADMIN</h1>
				<input type="text" name="A_ID" placeholder="ID" required />
                <input type="text" name="A_NAME" placeholder="Name" required />
				<textarea rows="1" col="30" name="A_ADDRESS" placeholder="Address" required /></textarea>
                
				<input type="password" name="A_PASSWORD" placeholder="Password" required />
				 <input type="phone" name="A_PHONE_NO" placeholder="Phone Number" required />
				<input type="email" name="A_EMAIL" placeholder="Email" required />
               
                 <p style="font-weight:bold">go previous page? <a href='manager_view.php' style="color:#FF0000">Go back</a></p>
                <input style="font-weight:bold" type="submit" name="save" value="ADD" />
            </form>
        
    </div>

    <div class="landing">
        <!---background-->
        <div class="opac">
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="index.php">Foodilite</a>
        </p>
    </footer>

</body>
	
</html>
    
	