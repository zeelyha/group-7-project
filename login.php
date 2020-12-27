<?php include('includes/config.php') ?>
<?php include('includes/header.php') ?>

<?php



$report="";

if(isset($_POST['submit']) &&
 !empty($_POST['emailmobile']) && 
 !empty($_POST['password'])){

$emailmobile= $_POST['emailmobile'];
$password   = $_POST['password'];

$selectsql= "SELECT emailmobile,password FROM signup_table WHERE emailmobile='$emailmobile' AND password='$password' LIMIT 1";

$selectQuery=mysqli_query($conn,$selectsql);
$check = mysqli_num_rows($selectQuery);
if($check > 0){
while($row=mysqli_fetch_array($selectQuery)){
	header("location:signup.php");

}
}else{
$report .="<div style='color:red;'>Incorrect login details</div>";	
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
<div id="overallWrapper" style="background-color: #fff;">
 <div id="homeAlign">

<div><?php echo "$report"; ?></div>

 <div id="homefieldForm">
 <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">
 <div id="hffDivider">
<div id="hffDividerMessage"> </div>
 <div id="hffDividerForm"><input type="text" name="emailmobile" id="authInput" placeholder="Email address or mobile number" required/></div> 
   
 </div> 

  <div id="hffDivider">
 <div id="hffDividerForm"><input type="password" name="password" id="authInput" placeholder="Enter your password" required /></div>  
 </div> 


  <div id="hffDivider"  class="clearfix">
 <div id="hffDividerForm">
 <div id="hffDividerFormL">
  <span><input type="checkbox" name="remember" value=""></span><span>Remember me</span> 
 </div>
  <div id="hffDividerFormR">
   <input type="submit" name="submit" value="LOG IN " id="authLog" /> 
  </div>  
 </div>   
 </div> 

 <div id="hffDivider">
<a href="forgot-password" style="color: #0095f6;display:block;text-align: center;text-decoration: none;">Forgot your password?</a>
 </div> 

 <div id="hffDivider">
<div id="signupTray">
<div id="signupAsk">Don't have an account?</div>  
<a href="signup.php" id="authsignupBtn">SIGN UP</a>
<div id="signupTerms"></div>
</div>
 </div> 


 </form>  
 </div>  
 </div> 
</div>
</body>
</html>

