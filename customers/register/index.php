<?php
// get template and config
require_once "../../_database/config.php";

// get form data after user submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "done";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register an account</title>
    <!-- bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body
        {
            background-color: gray;
            /* text-align: center;
            margin:auto;
            display:block; */
        }
    </style>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">HotelsForHours.com</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="../../index.php">Home</a></li>
                <li><a href="#">Find Your Next Stay</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- CHECK LOGIN STATUS  -->
                 <?php
                    if ($GLOBALS["loggedIn"] == false) { ?>
                <li><a href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } else { ?>
                 <li><a href="customers/home"><span class="glyphicon glyphicon-user"></span> Your Profile</a></li>                       
                <?php } ?>

            </ul>
        </div>
    </nav>

    
    <!-- Register Form -->
     <form action="index.php" method="POST" class="form-horizontal" >
        <div class="form-group">
            <label class="control-label col-sm-2">Username:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
     </form>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>