<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Proceed</title>
</head>

<body>


<div data-aos="fade-down" class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="post" action="manager_view.php" name="login">
                <h1 style="padding-bottom: 20px">Sign in</h1>
                <input type="number" name="369" placeholder="MANAGER ID" required />
                <input type="password" name="pass" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <span style="padding-top: 10px"><input type="submit" name="save" value="LOGIN"/></span>
               
            </form>
        </div>
</div>

    <div class="landing"> <!---background-->
        <div class="opac">
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="index.php">Foodilite</a>
        </p>
    </footer>
    <script src="./js/main.js"></script>
<?php
/*
require 'manager_view.php';
if(isset($_POST['save']))
{
	$m_id = $_POST['m_id'];
    $pass = $_POST['pass'];
	if($m_id=='369'&&$pass=='pass'){include 'manager_view.php';}
	
}
*/
?>


</body>

</html>
