<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$pass = $_POST['pass'];
		$emal = $_POST['email'];
        $name = $_POST['username'];
         
        
		$db = mysqli_connect("localhost" , "root" , "" , "univer") or die("failed to connect") ;
        $sql = "INSERT INTO `admin` (`name`, `mail`, `pass`) VALUES ( '$name' , '$emal' , '$pass');" ;

        if ($db->query($sql) === true )
            header("location: crud.php");
        else {
            echo "some thing went wrong";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="signup.php" method="POST">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>

                    <span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							sigunup
                        </button> 
                    </div> 
					  <a href="login.php">Already member ? Login</a>					
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>