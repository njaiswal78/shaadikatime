<!DOCTYPE html>
<?php 
include 'connection.php';
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
  background-size: cover;

  width: 100%;
  height:90%;

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
  height: 70vh;
  padding:0 20px;
  text-align: center; 
  color: white; 
  text-shadow:1px 1px 1px #1f2a1f;
  font-size: 20px;
  border:1px solid black;
}

.slider{
width: 70%;
height: 5vh;
position: fixed;
padding: 15px 19px 30px;
margin-top: 2vh;
margin-left: 10%;

}
#sliders{
opacity: 1;
width: 40%;
height: 40px;
}
progress{
  height: 40px;
}

.sliders::-webkit-slider-thumb {
  width: 20px;
  height: 40px;
  background: darkblue;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 20px;
  height: 40px;
  background: darkblue;
  cursor: pointer;
}

.photo-section{
width:20%;
height: 40vh;
margin-left: 15%;
padding: 15px 19px 30px;
margin-top: 20vh;
padding-top: 15vh;
position:fixed;
border:1px solid white;
background-size: cover,contain;
background-position: center;
background-repeat: no-repeat;
background-image: url(images/profile-placeholder.jpg);
cursor: pointer;
}
.photo-section button{
  position: absolute;
  bottom: 10px;
  margin-left: 2em;
}

.text-section{
width:30%;
height: 30vh;
margin-top: 20vh;
position:fixed;
border:1px solid white;
text-align: center;
margin-left: 40%;

}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
table input, select{
  color:black;

  border-radius: 5px;
  cursor: pointer;
  background-color:white;
  cursor: pointer;
  line-height: 1;
  padding: .35rem .5rem;
  font-size: 1rem;
     -webkit-appearance: button;
    -moz-appearance: button;
    -webkit-user-select: none;
    -moz-user-select: none;
    -webkit-padding-end: 20px;
    -moz-padding-end: 20px;
    -webkit-padding-start: 2px;
    -moz-padding-start: 2px;
}
table input, select:focus{
  background-color: #ddd;
  outline: none;
}
#cImage{
  display: none;
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


/* Full-width input fields */

/* When the inputs get focus, do something */

/* Set a style for the submit/login button */
</style>
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
function changeImage() {
  document.getElementById("cImage").style.display = "block";
}

</script>
</head>
<body>
  <div class="top-container">
<header>
<div>
<span>Shadikatime</span>
    <p>
    <input type="button" onclick="javascript:location.href='logout.php'" value="Logout">
    <input type="button" onclick="openForm()" value="Help">
   
    </p>
 

</div>
</header>

<div style="overflow:auto;">
  <div class="menu">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
  </div>

  <div class="main">
<h1>
You are almost there, complete your profile.
</h1>
<?php 
    $sql="SELECT * FROM signups WHERE Email='".$_SESSION['email']."' ";
    $result = $con->query($sql);
    if(mysqli_num_rows($result)>0){
    $result=$result->fetch_assoc();
    $name=$result['Name'];
    $dob=$result['DOB'];
    $religion=$result['Religion'];
    $gender=$result['Gender'];
    $image=$result['image'];
    } 
  ?>

<div  class="slider">
  <span id="slider-text">  60% profile completed
</span>
<br>
<progress id="sliders" value="60" max="100"> </progress>
</div>
<div  class="photo-section" id="myImage">
<?php
  if(empty($image)){
?>
  <span style="font-weight: bolder;font-size: 2em;">+</span><br>
  Add Photo
  <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
<?php
}
else{
?>
<script type="text/javascript">
document.getElementById("myImage").style.backgroundImage = "url('<?php echo $image;?>')";
document.getElementById("slider-text").innerHTML="80% profile completed";
document.getElementById("sliders").value="80";

 </script>

<?php 

} ?>
</form>
<button name="ChangeImage" onclick="changeImage();">Change Image</button>
<div id="cImage">
    <form action="reupload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</div>

</div>
<div  class="text-section">
  
 <table>
   <tr>
     <td>
       <?php echo $name; ?>
     </td>
     <td>
       <?php

       $d=strtotime($dob);
       echo date("d-F-Y",$d); 

        ?>
      </td>
   </tr>
   <tr>
     <td>
       <?php echo $gender; ?>
     </td>
     <td>
       <?php echo $religion; ?>
     </td>
   </tr>
   <tr>
    <td>
     City <input type="text" placeholder="Lucknow"> 
    </td>
    <td>
      State <select name="state">
        <option value="Maharashtra">Maharashtra</option>
        <option value="Andra Pradesh">Andra Pradesh</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Bihar">Bihar</option>
        <option value="Punjab">Punjab</option>
        <option value="Jammu & Kashmir">Jammu & Kashmir</option>
        <option value="Chattisgarh">Chattisgarh</option>
        <option value="Manipur">Manipur</option>
        <option value="Uttar Pradesh" selected>Uttar Pradesh</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Gujarat">Gujarat</option>
        <option value="kerala">Kerala</option>
        <option value="Orissa">Orissa</option>
        <option value="Himanchal Pradesh">Himanchal Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="Meghayala">Meghalaya</option>
        <option value="Karnataka">Karnataka</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Haryana">Haryana</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Assam">Assam</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Nagaland">Nagaland</option>
      </select> 
    </td>
     
   </tr>
   <tr>
     <td>
    Caste <select name="caste">
        <option value="Aggarwal">Aggarwal</option>
        <option value="Brahmin">Brahmin</option>
        <option value="Khatri">Khatri</option>
        <option value="Rajput">Rajput</option>
        <option value="Arora">Arora</option>
        <option value="Bania">Bania</option>
        <option value="Sikh Jat">Sikh Jat</option>
        <option value="Vaishnav">Vaishnav</option>
        <option value="Kanyakubj Brahmin" selected>Kanyakubj Brahmin</option>
        <option value="Jat">Jat</option>
        <option value="Kshatriya">Kshatriya</option>
        <option value="Sindhi">Sindhi</option>
        <option value="Swetanbar">Swetamber</option>
        <option value="Scheduled Caste">Scheduled Caste</option>
        <option value="Gupta" selected>Gupta</option>
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
        
      </select> 
       </td>
   </tr>
 </table> 

</div>


  </div>

  <div class="right">
    <h2>About</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  </div>
</div>
</div>

<footer>
  <div>© copyright shadikatime.com</div>  
</footer>

</body>
</html>
