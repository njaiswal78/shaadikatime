<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Source Code Pro" rel="stylesheet">
<title>#1 Matrimony Search Platform, It's perfect time to get married, search your partner now.</title>
</head>
<body>
<?php 



$con=mysqli_connect("localhost","root","","shaadikatime");

		if(mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$password=$_POST['psw'];
		$phone=$_POST['number'];
		$dob=$_POST['dob'];
		$religion=$_POST['religion'];
		$gender=$_POST['m-f'];
		$s = "SELECT Email, Number,Password FROM signup";
		$cookie_name = "email";
		$cookie_value = base64_encode($email);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");

$temp=1;

if($temp==1){
	
		
		
		
		$sql = "INSERT INTO signups (Name,Email,Password,Number,DOB,Religion,Gender) VALUES ('$name','$email','$password','$phone','$dob','$religion','$gender')";
		
		if ($con->query($sql) === TRUE) {
		    
		    //sending out email to customer for signup
		    
		    
		    
		echo "<a href='https://socialplayer.in/getstarted/home.php'><img src='images/icon.ico' style='    position: absolute;
    top: -15px;
    right: 59%;
    /* margin: 1%; */
    width: 100px;' /></a>";
			echo "<h1 style='text-align:center;'>Socialplayer Platform</h1>";
			echo "Welcome to Social Player. You are registered successfully. Add your social accounts and manage all accounts at one place";
			
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}
			
		}
		else{
		echo "You are already registered with". $email;
	}


?>
</body>
</html>