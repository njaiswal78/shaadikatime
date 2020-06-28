<!DOCTYPE html>
<?php 
if (isset($_GET['errors'])) {
  $errors=base64_decode($_GET['errors']);
    echo "<script>alert('$errors');</script>";
}
session_start();
include 'connection.php';

		if(isset($_POST['login'])){

		$emailornumber=$_POST['email'];
		$password=md5($_POST['psw']);
		$_SESSION["password"]=$password;
		$_SESSION['email']=$emailornumber;
		$cookie_name = "email";
		$cookie_value = base64_encode($emailornumber);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/","localhost");
		$sql="SELECT * FROM signups WHERE Email='".$emailornumber."' and password='".$password."' ";
		$result = $con->query($sql);
		if(mysqli_num_rows($result)>0){
		include 'take-action.php';
/*		
		echo "<a href='https://socialplayer.in/getstarted/home.php'><img src='images/icon.ico' style='    position: absolute;
    top: -15px;
    right: 59%;
    /* margin: 1%; 
    width: 100px;' /></a>";
			echo "<h1 style='text-align:center;'>Socialplayer Platform</h1>";
			echo "Welcome to Social Player. You have successfully logged in. Add your social accounts and manage all accounts at one place";
*/		}
		else{
			$Message="Incorrect Email and Password combination";
			$Message=base64_encode($Message);
//			header("location:index.php");

//			echo "<script>alert('You have not entered correct email and password. Please re-enter correct credentials.');
//			</script>";
			session_destroy();
			setcookie("email", "", time() - 3600,"/","localhost");
			header("location:index.php?Message=" . urlencode($Message));


		}
	}
	elseif(isset($_POST['signup'])){
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$_SESSION['email']=$email;
		$password=md5($_POST['psw']);
		$_SESSION["password"]=$password;
		$phone=$_POST['number'];
		$dob=$_POST['dob'];
		$religion=$_POST['religion'];
		$gender=$_POST['m-f'];
		$sql="SELECT * FROM signups WHERE Email='".$email."' ";
		$result = $con->query($sql);
		if(mysqli_num_rows($result)>0){
		
			$Message="You are already registered with email id $email";
			$Message=base64_encode($Message);
//			header("location:index.php");

//			echo "<script>alert('You have not entered correct email and password. Please re-enter correct credentials.');
//			</script>";
			session_destroy();
			setcookie("email", "", time() - 3600,"/","localhost");
			header("location:index.php?Message=" . urlencode($Message));


		}
		
		$cookie_name = "email";
		$cookie_value = base64_encode($email);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/","localhost");

		
		
		
		$sql = "INSERT INTO signups (Name,Email,Password,Number,DOB,Religion,Gender) VALUES ('$name','$email','$password','$phone','$dob','$religion','$gender')";
		
		if ($con->query($sql) === TRUE) {
		    
		    //sending out email to customer for signup
		    
		    
			include 'take-action.php';		
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}
			

	}
	elseif (isset($_COOKIE['email'])) {
		$emailornumber=base64_decode($_COOKIE['email']);
		$password=$_SESSION["password"];
		if(empty($password)){
		session_destroy();
		setcookie("email", "", time() - 3600,"/","localhost");
		header("location:index.php");

		}

		$sql="SELECT * FROM signups WHERE Email='".$emailornumber."' and password='".$password."' ";
		$result = $con->query($sql);
		if(mysqli_num_rows($result)>0){
			include 'take-action.php';
		
		}

	}
	else{
		session_destroy();
		setcookie("email", "", time() - 3600,"/","localhost");
		header("location:index.php");

	}


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Source Code Pro" rel="stylesheet">
<title>#1 Matrimony Search Platform, It's perfect time to get married, search your partner now.</title>
</head>
<body>

</body>
</html>