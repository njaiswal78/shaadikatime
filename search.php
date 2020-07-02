<?php 
include "connection.php";
session_start();

$looking=$_POST['looking-for'];
$age_from=$_POST['aged-from'];

$age_to=$_POST['aged-to'];

$religion=$_POST['religion'];
$caste=$_POST['caste'];

//echo "I am looking for $looking of age from $age_from to $age_to of religion $religion and caste $caste ";

$sql="SELECT * FROM signups WHERE Gender='".$looking."' and Religion='".$religion."' and Caste='".$caste."' ";
		$result = $con->query($sql);
		if(mysqli_num_rows($result)>0){
		while($row = $result->fetch_assoc())
{
	$d=(int)date('Y',strtotime("today"))-(int)date('Y',strtotime($row['DOB']));
	if($d>=(int)$age_from && $d<=(int)$age_to){
	echo $row['Name']." and ".$row['Email']."<br>";
	echo "<br>";
}

}	
		}else{
			echo "No data found";
		}


?>
