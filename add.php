<?php 
include "connection.php";
session_start();
$city=$_POST['city'];
$state=$_POST['state'];
$caste=$_POST['caste'];
$tongue=$_POST['mother'];
$occupation=$_POST['Occupation'];
$college=$_POST['college'];
$sql = "UPDATE signups SET City='$city',State='$state',Caste='$caste',Tongue='$tongue',Occupation='$occupation',College='$college' WHERE Email='".$_SESSION['email']."'";
    
    if ($con->query($sql) === TRUE) {
    echo 'done';
    header("location:home.php");

}
else{
  echo $con->error;
}
?>