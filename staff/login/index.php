<?php
// include config
require_once "../../_database/config.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $password = $_POST["password"];

	$sql = "SELECT StaffEmail, StaffPassword FROM staff WHERE StaffEmail='$email'";

    $result = mysqli_query($conn, $sql);
    if ($result == false) {die("ERROR: Invalid Query");}
   
	//check if details match
	if ($row = mysqli_fetch_assoc($result))
	{
		if ($row["StaffPassword"] === $password)
		{
			//
			// LOGIN SUCCESS!
			//
			echo "Password is correct";

			// set login variables to true
			$_SESSION["loggedIn"] = true;
			$_SESSION["username"] = $email;
			header("location: ../../");
			
		}
		else echo "Wrong Password";
	}
	else 
	{
		echo "Email not known.";
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

    <h1 class="alert alert-info" style="text-align:center;"> Staff Login Form</h1>

    <form class="form-horizontal" action="index.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" >Submit</button>
                </div>
            </div>
    </form>
</body>
</html>
