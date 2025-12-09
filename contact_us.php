<?php
// link config
require_once "_database/config.php";
require_once "templates/base_page.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <!-- bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body
        {
            background-color: gray;
        }
    </style>
</head>
<body>
    
    <!-- Navbar  -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">HotelsForHours.com</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Find Your Next Stay</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- CHECK LOGIN STATUS  -->
                 <?php
                    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == false) { ?>
                <li><a href="customers/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="customers/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } else { ?>
	
				

				<li><a href="customers/home"><span class="glyphicon glyphicon-user"></span> Your Profile <em><strong>(<?php echo $_SESSION["username"]; ?>)</strong></em></a></li>                       
                <?php } ?>

            </ul>
        </div>
    </nav>


	<h1 class="alert alert-info">Contact us here<h1>
	
	<!-- Contact form -->
	<form method="POST" action="contact-us.php">
	
		<label>*Make form </label>

	</form



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
