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
        
            <form method="post" action="input.php"  >
                <h1 style="padding-bottom: 20px">Create Account</h1>
                <input type="text" name="cname" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
				<input type="password" name="pass" placeholder="Password" required />
                
                <input type="text" name="phone" placeholder="Phone Number" required />
                <textarea rows="3" col="30" name="address" placeholder="Address" required /></textarea>
                <p style="font-weight:bold">Want to login? <a href='login.php' style="color:#FF0000">Login here</a></p>
                <input type="submit" name="save" value="submit"/>
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
            <a target="_blank" href="index.html">Foodilite</a>
        </p>
    </footer>

</body>
	
</html>
    
	