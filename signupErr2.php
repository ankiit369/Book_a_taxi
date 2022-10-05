<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Welcome to TaxiShare</title>
    <link rel="stylesheet" type="text/css" href="css/fixedbar.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
	.body{
		-webkit-filter: blur(0px);
	}
	#foot{
		top:655px;
		height:165px;
	}
	#a1{
		font-size:17px;
	}
	#a2{
		font-size:17px;
	}
	#a3{
		font-size:17px;
	}
	#signup-response{
		font-size:15px;
	}
        </style>

  </head>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.9.3/typeahead.min.js"></script>
<script src="js/fixedbar.js"></script>
  <body>
	<?php
	$userErr=$username=$pword="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["user"])||empty($_POST["password"])) {
	    	$acnumErr = "Invalid Account number or Password";
		} else {
		$username = test_input($_POST["user"]);
		$password = test_input($_POST["password"]);
		$dbhost='localhost:3036';
		$dbuser='root';
		$dbpass='ltw23';
		$conn=mysql_connect($dbhost,$dbuser,$dbpass);
		if(!$conn)
			die('Could not connect: '.mysql_error());
		$db_selected=mysql_select_db('taxi');
		if(!$db_selected)
			die('Could not use database bank : '.mysql_error());
		}
		$result=mysql_query("SELECT * FROM userinfo WHERE user='$username';",$conn);
		$row = mysql_fetch_assoc($result);
		if(isset($row['user'])){
			if(strcmp($password,$row['password'])==0){
				session_start();
				$_SESSION['username']=$username;
				header("Location: findrideLIN.php");
			}else{
				header("Location: signupErr.php");
			}
		}else{
			header("Location: signupErr.php");
		}
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>
	<div class="body"></div>
	<div class="grad"></div>
	<div id="fixedbar">
		<span id="company">
		<a href="findride.php"><span id="cname" >Taxi</span><span id="cnamecolor" >Share</span></a>
		<img id="cicon" src="http://s2.postimg.org/na0idpbkp/cicon.png">
	  	<a href="findride.php" id="greenb" class="action-button shadow animate green">Find a ride</a>
	  	<a href="signupErr2.php" id="redb" class="action-button shadow animate red">Offer a ride</a>
		<a href="signup.php" id="yellowb" >Register Now</a>
		</span>
		<span id="signup-response">Login to offer ride</span>
		<div class="active-links">
		    <div id="session">
		    <a id="signin-link" href="#">
			    <em>Have an account?</em>
			    <strong>Sign in</strong>
		    </a>
		    </div>
		    <div id="signin-dropdown">
			<form class="signin" onsubmit="return isvalidated();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<fieldset class="textbox">
				    	<label class="username">
						<div id="headerror"></div>
						<span>Username</span>
						<input id="userID" type="text" onblur="usercheckLv()" name="user" value="">
						<br><span class="errors" id="usererror"></span>
					</label>
				
					<label class="password">
						<span>Password</span>
						<input id="passwordID" type="password" onblur="passwordcheckLv()" name="password" value="">
						<br><span class="errors" id="passworderror"></span>
					</label>
				</fieldset>
		        
				<fieldset class="remb">
					<button class="submit button" type="submit">Sign in</button>
				</fieldset>
		        </form>
		     </div>
		 </div>
	</div>
	<div class="header">
		<div>Taxi<span>Share</span></div>
		<img id="cicon2" src="http://s2.postimg.org/na0idpbkp/cicon.png">
	</div>
	<br>
	<form class="signup" onsubmit="return isvalidatedsign()" action="signup_successful.php" method="post">
			<div id="headerror"></div>
			<input id="fnameID" type="text" onblur="fnamecheckLv()" placeholder="first name" name="fname"><br><span class="errors" id="fnameerror"></span><br>
			<input id="snameID" type="text" onblur="snamecheckLv()" placeholder="second name" name="sname"><br><span class="errors" id="snameerror"></span><br>
			<input id="userID2" type="text" onkeypress="checkusername2(this.value)" onkeyup="checkusername2(this.value)" onblur="usercheckLv2()" placeholder="username" name="user"><br><span class="errors" id="usererror2"></span><br>
			<input id="passwordID2" type="password" onkeypress="passwordcheck2()" onkeyup="passwordcheck2()" onblur="passwordcheckLv2()" placeholder="password" name="password"><br><span class="errors" id="passworderror2"></span><br>
			<input id="rppasswordID2" type="password"  onkeypress="rppasswordcheck2()" onkeyup="rppasswordcheck2()" onblur="rppasswordcheckLv2()" placeholder="confirm password" name="rppassword"><br><span class="errors" id="rppassworderror2"></span>
			<input id="mobilenumID" type="number" onblur="mobilenumcheckLv()" placeholder="mobile number" name="mobilenum"><br><span class="errors" id="mobilenumerror"></span><br>
			<input id="emailID" type="text" onblur="emailcheckLv()" placeholder="email id" name="email"><br><span class="errors" id="emailerror"></span><br>
			<input type="radio" name="sex" value="male" checked="checked"> <span class="rdfront">male </span>
			<input type="radio" name="sex" value="female" ><span class="rdfront"> female </span><br>
			<input type="submit" value="Sign Up"><br>
	</form>
	<div id="foot">
		<br><p id="fom">Find Out More</p><br>
		<a id="a1" href="howitworks.php">How It Works</a><br><br>
		<a id="a2" href="faq.php">Frequently Asked Questions</a><br><br>
		<a id="a3" href="tandc.php">Terms & Conditions</a>
	</div>
  </body>
  <script src="js/signup.js"></script>
</html>
