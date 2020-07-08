<?php
require"config.php";
?><html>
<head>
<style>
input[type=text]{
    width: 35%;
	padding : 12px 20px;
	margin:8px 0;
	box-sizing : border-box;
}
input[type=button]{
	width:10%;
	padding : 12px 20px;
	margin:8px 0;
	box-sizing : border-box;
	background-color:#008080;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.menu{
  width: 25px;
  height: 3px;
  background-color: white;
  margin: 3px 0;

}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
  input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
  input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn{
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
body {
  background-image: url("hackpic.jpg");
  background-repeat: repeat;
  background-color: #cccccc;
}

</style>
<script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3' key="232c3ef7-77fc-4b3d-af60-d63162db83f9" ></script>
</head>

<body>
<div class="navbar">
  <a href="test.php">Any Abusive comments!</a>
  	
</div>
<br>
<br>
<center>
<form method="post" enctype="multipart/form-data"> 
<img src="img1.jpeg" width="45%" height="70%">
<br><br>
<input type="text" name="cmt1" size="60" maxlength="400" id="user_input">
 
<input type="submit" name="Comment1" value="Comment">
  <br><br><br><br><br>
<img src="img2.png" width="45%" height="70%">
<br><br>
<input type="text" name="cmt2" size="60">
<input type="submit" name="Comment2" value="Comment">
<br><br><br><br><br>
<img src="img3.jpg" width="45%" height="70%">
<br><br>
<input type="text" name="cmt3" size="60" maxlength="400" id="user_input">
 
<input type="submit" name="Comment3" value="Comment">
 </form>
</center>
</body>
</html>
<?php
if(isset($_POST['Comment1'])){
	$username1=$_POST['cmt1'];
$query1="insert into usercomments(`comment`,`v`) values('$username1',0)";
$runquery1=mysqli_query($con,$query1);}
if(isset($_POST['Comment2'])){
	$username2=$_POST['cmt2'];
$query2="insert into usercomments(`comment`,`v`) values('$username2',0)";
$runquery2=mysqli_query($con,$query2);}
if(isset($_POST['Comment3'])){
	$username3=$_POST['cmt3'];
$query3="insert into usercomments(`comment`,`v`) values('$username3',0)";
$runquery3=mysqli_query($con,$query3);}
?>
