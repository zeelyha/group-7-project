<?php
session_start();
require_once('./includes/functions.php');


$report="";

if(isset($_POST['submit']) &&
 !empty($_POST['emailmobile']) && 
 !empty($_POST['password'])){

$emailmobile= $_POST['emailmobile'];
$password   = $_POST['password'];

$res = login($emailmobile, $password);



if(is_array($res)){
    $_SESSION['user'] = $res;
    if(isset($_SESSION['redirect']))
        header('location:'.$_SESSION['redirect']);
    header('location: index.php');
}else{
$report .="<div style='color:red;'>".$res."</div>";	
}
}

include('includes/header.php');
?>


<div id="overallWrapper" style="background-color: #fff;">
 <div id="homeAlign">
 <div id="homeLogo">LOGO</div>

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
<?php include_once('./includes/footer.php') ?>

