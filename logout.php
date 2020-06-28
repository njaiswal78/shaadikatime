<?php  

session_destroy();
setcookie("email", "", time() - 3600,"/","localhost");
header("location:index.php");
mysql_close($con);

?>