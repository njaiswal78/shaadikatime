<!DOCTYPE html>
<?php
session_start();
if(isset($_COOKIE['email']) &&  empty($_GET['Message'])){
  header("location:home.php");
}

?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Source Code Pro" rel="stylesheet">
<title>#1 Matrimony Search Platform, It's perfect time to get married, search your partner now.</title>
<style>
* {
  box-sizing: border-box;
}
body{
  font-family: fontawesome;
  color:#aaaaaa;
  max-width: 100%;
  height:100vh;
  margin:0;
}
.top-container{
  background-image: url(images/background.jpg);
  background-repeat: no-repeat;
  border: 2px solid black;
  background-size: cover;
  width: 100%;
  height:80%;

}
header{
  padding:15px;
  margin-left: 10%;
}
header img{
  width: 240px;
  margin-top:-8%;
}
header p{
  display: inline-block;
  margin-right: 10%;
  float: right;
}
header input, select{
  border-radius: 5px; 
  color: white;
  background-color:darkblue;
  cursor: pointer;
  line-height: 1.5;
  padding: .375rem .75rem;
  font-size: 1rem;
  box-shadow: 1px 1px 2px #888888;

  opacity: 1;
}
header input:hover{
  opacity: 0.8;
  border-color: darkblue;
}

header span{
  font-family: fontawesome;
  line-height: 1.5;
  font-size: 40px;
  letter-spacing: -1px;
  color: white;
  -webkit-font-smoothing:antialiased;
  font-weight: bolder;
  text-decoration: none;
}

footer{
  background-color:#e5e5e5;
  text-align:center;
  padding:10px;
  margin-top:7px;
}
.menu {
  float:left;
  width:5%;
  text-align:center;
}
.menu a {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.main {
  float:left;
  width:90%;
  padding:0 20px;
  text-align: center; 
  color: white; 
  margin-top: 10%;
  text-shadow:1px 1px 1px #1f2a1f;
  font-size: 20px;
}

.search-section{
width: 90%;
margin:auto;
height: 20vh;
position: static;
padding: 15px 19px 30px;
background:rgba(0,0,0,.3);
border-radius: 3px;
}

.output{
width: 90%;
margin:auto;
height: 20vh;
position: static;
text-align: center;
padding: 15px 200px 30px;
background:rgba(0,0,0,.3);
border-radius: 3px;  
color: white;
}
.output table{
  border:1px solid white;
  border-collapse: collapse;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}
.output table, td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.search-input li{
  float: left;
  list-style-type: none;
  padding: 5px;
  margin-left: 3vw;
}
.search-input select{
  color:black;

  border-radius: 5px;
  cursor: pointer;
  background-color:white;
  cursor: pointer;
  line-height: 1.5;
  padding: .35rem .5rem;
  font-size: 1rem;
  box-shadow: 5px 5px 40px #888888;
   -webkit-appearance: button;
    -moz-appearance: button;
    -webkit-user-select: none;
    -moz-user-select: none;
    -webkit-padding-end: 20px;
    -moz-padding-end: 20px;
    -webkit-padding-start: 2px;
    -moz-padding-start: 2px;

}
.search-input input{
  border-radius: 5px; 
  color: white;
  background-color:darkblue;
  cursor: pointer;
  line-height: 1.5;
  padding: .375rem .75rem;
  font-size: 1rem;
    box-shadow: 5px 5px 40px #888888;
    opacity: 1;
}
.search-input input:hover{
  opacity: 0.8;
}

.right {
  background-color:#e5e5e5;
  float:left;
  width:5%;
  padding:15px;
  margin-top:7px;
  text-align:center;
  position: fixed;
  right:0;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    
  }
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 12vh;
  right: 5vw;
  border: 3px solid #f1f1f1;
  z-index: 9;
  color: black;
}

#signupform input[type=text], input[type=date],input[type=number], input[type=email], select, input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 2px 0 10px 0;
  border: 0.5px solid black;
  background: #f1f1f1;
  color: black;
}
#signupform .form-container input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 2px 0 10px 0;
  border: 0.5px solid black;
  background: #f1f1f1;
  color: black;

}
  
/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 20px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=email], .form-container input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 2px 0 10px 0;
  border: none;
  background: #f1f1f1;
  color: black;
  border: 0.5px solid black;
}

/* When the inputs get focus, do something */
.form-container input[type=email]:focus, .form-container input[type=password]:focus,.form-container input[type=text]:focus,.form-container input[type=number]:focus, .form-container select:focus,.form-container input[type=date]:focus  {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: darkblue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 1;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 0.8;
}
</style>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("signupform").style.display = "none";

}

function openSignUpForm() {
  document.getElementById("signupform").style.display = "block";
  document.getElementById("myForm").style.display = "none";
  
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("signupform").style.display = "none";
}
</script>
</head>
<body>
  <div class="top-container">
<header>
<div>
<span>Shadikatime</span>
    <p>
    <input type="button" onclick="openForm()" value="Login">
        <input type="button" onclick="openForm()" value="Help">
   
    </p>
 
 <div class="form-popup" id="myForm">
  <form action="home.php" class="form-container" method="POST">
    <h1>Login</h1>

    <span style="position: absolute;top: 35px;right: 25px;cursor: pointer;color: black;font-size: 2em;font-weight: bolder;text-decoration: underline;" onclick="openSignUpForm()"><span style="font-size: 15px;color: black;position: absolute;float: right;top:-5px;line-height: .8;letter-spacing: :5px;">New User?</span> Signup</span>
    <span style="color:red;position: absolute;top:-10px;right: 10px;cursor: pointer;" onclick="closeForm()"><img src="images/close.png" alt="close button"style="width: 20px;height: 20px;background-color: white;"></span>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="manu@gmail.com" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="********" name="psw" required>

    <button type="submit" class="btn" name="login">Login</button>
    
  </form>

     <?php
if (isset($_GET['Message'])) {
  $Message=base64_decode($_GET['Message']);
    echo "<script>alert('$Message');</script>";
}
?>

</div>

 <div class="form-popup" id="signupform">
  <form action="home.php" class="form-container" method="POST">
     <h1>Sign Up</h1>

    <span style="position: absolute;top: 35px;right: 25px;cursor: pointer;color: black;font-size: 2em;font-weight: bolder;text-decoration: underline;" onclick="openForm()"><span style="font-size: 15px;color: black;position: absolute;float: right;top:-5px;line-height: .8;letter-spacing: :5px;">Old User?</span> Login</span>
    <span style="color:red;position: absolute;top:-10px;right: 10px;cursor: pointer;" onclick="closeForm()"><img src="images/close.png" alt="close button"style="width: 20px;height: 20px;background-color: white;"></span>
    <label for="fname"><b>Your Name</b></label>
    <input type="text" placeholder="Full Name" name="fname" required>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="manu@gmail.com" name="email" required>
        <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="********" name="psw" required>

    <label for="number"><b>Phone Number</b></label>
    <input type="number" placeholder="9988776663" name="number" max-length="10" required>
    <label for="dob"><b>Your Date of Birth</b></label>
    <input type="date" placeholder="DOB" name="dob" required>
<label for="religion">Your Religion</label>
  <select name="religion" id="religion">
    <option value="Hindu">Hindu</option>
    <option value="Muslim">Muslim</option>
    <option value="sikh">Sikh</option>
      <option value="Christian">Christian</option>

    <option value="Parsis">Parsis</option>

    <option value="Jains">Jains</option>
    <option value="Buddhist">Buddhist</option>
    <option value="Other">Other</option>
  
  </select>

<label for="m-f">I am a </label><br>
  <select name="m-f" id="m-f">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>


    <button type="submit" class="btn" name="signup">SignUp</button>
    
  </form>
</div>



</div>
</header>

<div style="overflow:auto">
  <div class="menu">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
  </div>

  <div class="main">
<h1>
  We help you connect and,<br> you build relationship and future
</h1>
<div  class="search-section">
  <div class="search-input">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <ul>
        <li>
  <label for="looking-for">I am looking for</label><br>
  <select name="looking-for" id="looking-for">
    <option value="Female">Female</option>
    <option value="Male">Male</option>
    <option value="Transgender">Transgender</option>
  </select>
</li>
<li>
  <label for="aged">aged</label><br>
  <select name="aged-from" id="aged-from" style="width: 70px;">
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20" selected="">20</option>
        <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
        <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
        <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
        <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
        <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
        <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
        <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
        <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
  </select>
  <span>to</span>
<select name="aged-to" id="aged-to" style="width: 70px;">
      <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
        <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25" selected>25</option>
    <option value="26">26</option>
        <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
        <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
        <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
        <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
        <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
        <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
        <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option> </select>
  </li>
   <li>
  <label for="religion">of religion</label><br>
  <select name="religion" id="religion">
    <option value="Hindu">Hindu</option>
    <option value="Muslim">Muslim</option>
    <option value="Sikh">Sikh</option>
      <option value="Christian">Christian</option>

    <option value="Parsis">Parsis</option>

    <option value="Jains">Jains</option>
    <option value="Buddhist">Buddhist</option>
    <option value="Other">Other</option>
  
  </select>
</li>
       <li>
  <label for="mother">and of caste</label><br>
 <select name="caste" required>
       
        <option value="Aggarwal">Aggarwal</option>
        <option value="Brahmin">Brahmin</option>
        <option value="Khatri">Khatri</option>
        <option value="Rajput">Rajput</option>
        <option value="Arora">Arora</option>
        <option value="Bania">Bania</option>
        <option value="Sikh Jat">Sikh Jat</option>
        <option value="Vaishnav">Vaishnav</option>
        <option value="Kanyakubj Brahmin">Kanyakubj Brahmin</option>
        <option value="Jat">Jat</option>
        <option value="Kshatriya">Kshatriya</option>
        <option value="Sindhi">Sindhi</option>
        <option value="Swetanbar">Swetamber</option>
        <option value="Scheduled Caste">Scheduled Caste</option>
        <option value="Gupta" selected="">Gupta</option>
          
        <option value="Kurmi Kshatriya">Kurmi Kshatriya</option>
        <option value="Gaur Brahmin">Gaur Brahmin</option>
        <option value="Kayasth">Kayasth</option>
        <option value="Maratha">Maratha</option>
        <option value="Sunni">Sunni</option>
        <option value="Yadav">Yadav</option>
        <option value="Digamber">Digamber</option>
        <option value="Teli">Teli</option>
        <option value="Jaiswal">Jaiswal</option>
        <option value="Singh">Singh</option>
        <option value="Sharma">Sharma</option>
        <option value="Vishwakarma">Vishwakarma</option>
        <option value="Maali">Maali</option>
        <option value="Teli">Teli</option>
        <option value="Other">Other</option>
        
      </select> 

</li>
  <li>
  <label for="looking-for">Let's find out</label><br>
    
    <input type="submit" value="Search" name="search">
</li>
    </ul>
  
</form>
  </div>
</div>

  </div>

  <div class="right">
    <h2>About</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  </div>
</div>
</div>
<div class="output">
  <table>
    <tr>
      <th>
        Name
      </th>
      <th>
        Email
      </th>
    </tr>
  <?php 
if(isset($_POST['search'])){
include "connection.php";

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

  //echo $row['Name']." and ".$row['Email']."<br>";
  //echo "<br>";
?>
<tr>
  <td>
    <?php echo $row['Name'];?>
  </td>
  <td>
    <?php echo $row['Email']; ?>
  </td>
</tr>
<?php
}

} 
    }else{
      echo "No data found";
    }

}

  ?>
    </table>

</div>
<footer>
  <div>© copyright shadikatime.com</div>  
</footer>

</body>
</html>
