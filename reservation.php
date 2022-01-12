

 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Foodilite | Reservation</title>
    <link href="//db.onlinewebfonts.com/c/465b1cbe35b5ca0de556720c955abece?family=AbolitionW00-Regular" rel="stylesheet"
        type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/button.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Foodilite</title>
</head>
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<body data-aos-easing="ease-out-back" data-aos-duration="1500" data-aos-delay="0">
    <nav class="navbar navbar-expand-md navbar-dark position-sticky-top fixed-top">
        <div class="canvas-area">
            <div class="head1">
                <a class="navbar-logo" href="#"><img src="img/logo.png"
                        style="height:35px; width: 214px;padding-top:1px"> </a></div>
            <div class="flot">
                <button class="navbar-toggler" type="button " style="float: right" data-toggle="collapse"
                    data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>

            <div class="collapse navbar-collapse text-right" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">customer login</a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link"  onclick="myFunction()" class="dropbtn">Already Booked</a>
						<div id="myDropdown" class="dropdown-content">

                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <section id="section03" class="demo">
        <h1 style="font-family:'Sugar Candy';font-weight:bolder!important;font-size:95px;padding-top:40px;">Make Reservations</h1>
        <a href="#reservation"><span></span></a>
    </section>




    <div class="container-fluid" id="reservation">
        <form method="post" action="index.php" name="reservation">
            <h1 class="chooseres" style="">Choose your options</h1>
            <div class="row">

                <div class="col-md-4"></div>

                <div class="col-md-4" id="blockres">

                    
                    <input type="date" name="res_date" required />
                    <input type="number" name="no_of_ppl" placeholder="Number of people" style="text-align:center"
                        required />
                    <input type="time" name="res_time" style="align-content:center" id="timepick" min="12:00"
                        max="24:00">
                    <label for="timepick"></label>
                    <input type="submit" name="insert" value="Book" style="padding-top: 10px" />

                </div>

                <div class="col-md-4"></div>
            </div>

        </form>
        <p class="flickr"><?php echo $status; ?></p>
    </div>
<?php 
require('db.php');
if(isset($_POST['insert']))
{
$res_date = $_POST['res_date']; // removes backslashes
$no_of_ppl = $_POST['no_of_ppl'];		
$res_time = $_['res_time'];

$query = oci_parse($conn,"insert into reservation (res_date,no_of_ppl,res_time) values ('$res_date','$no_of_ppl','$res_time')");
			 
     $result = oci_execute($query);
     if ($result) {
		          
				  
				echo "Reservation completed Successfully !";
				exit();
	}
	
	else{
		echo "Error !";
				exit();
	}


$status = "Your reservation has been booked</br>";
}
?>




    <script>
        $(function () {
            $('a[href*=#]').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 500, 'linear');
            });
        });
    </script>
</body>

</html>