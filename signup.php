<?php 
$db_conx = mysqli_connect("localhost", "root", "", "group7");


if (isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['emailMobile']) && isset($_POST['password']) && isset($_POST['submit']) && !empty($_POST['fullname']) && !empty($_POST['username']) && !empty($_POST['emailMobile']) && !empty($_POST['password'])){

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$emailMobile = $_POST['emailMobile'];
$password = $_POST['password'];
$password = 
// inserting into dataBase
$insertData = "INSERT INTO signup_table(id,fullname,username,emailmobile,password,datemade) VALUES (NULL, '$fullname', '$username', '$emailMobile', '$password',NOW())";
$insertQuery = mysqli_query($db_conx, $insertData);

if($insertQuery){
	echo "inserted";
}
 else {
	echo "not in db";
}
}
?>



















<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<title></title>
</head>
<body>





<div id="overAllWrapper">
 <div id="homeAlign">
 <div id="homeLogo"></div>
 <div id="homefieldForm">
 <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">
 <div id="hffDivider">
 <div id="hffDividerForm"><input type="text" name="fullname" id="authInput" placeholder="Full name" /></div> 
 <div id="hffDividerMessage"></div>   
 </div>


<div id="hffDivider">
 <div id="hffDividerForm"><input type="text" name="username" id="authInput" placeholder="Username" /></div> 
 <div id="hffDividerMessage"></div>   
 </div>


 <div id="hffDivider">
 <div id="hffDividerForm"><input type="text" name="emailMobile" id="authInput" placeholder="Email address or mobile number" /></div> 
 <div id="hffDividerMessage"></div>   
 </div>


 <div id="hffDivider">
 <div id="hffDividerForm"><input type="password" name="password" id="authInput" placeholder="Password" /></div> 
 <div id="hffDividerMessage"></div>   
 </div>








  <div id="hffDivider"  class="clearfix">
 <div id="hffDividerForm">
 <div id="hffDividerFormL">
  <span>By signing up, you agree to our <a href="#" style="    color: #0095f6;
    display: block;
    margin-top: 5px;
    text-decoration: none;">terms and conditions</a></span> 
 </div>
  <div id="hffDividerFormR">
   <input type="submit" name="submit" value="SIGN UP" id="authLog" /> 
  </div>  
 </div>   
 </div> 


 <div id="hffDivider">
<div id="signupTray">
<div id="signupAsk">Already have an account?</div>  
<a href="index.php" id="authsignupBtn">LOG IN</a>
<div id="signupTerms"></div>
</div>
<div class="clear"></div>
 </div> 


 </form>  
 </div>  
 </div>
 </div> 


</body>
</html>