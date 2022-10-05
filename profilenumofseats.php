<html>
<head>
	<title>PROFILE</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" type="text/css" href="css/fixedbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
	#foot{
		top:550px;
	}
    	</style>
</head>
<?php
	session_start();
	$username= $_SESSION["username"];
	
?>
<body>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/fixedbar.js"></script>
	<div id="fixedbar">
		<span id="company">
		<a href="findrideLIN.php"><span id="cname" >Taxi</span><span id="cnamecolor" >Share</span></a>
		<img id="cicon" src="http://s2.postimg.org/na0idpbkp/cicon.png">
	  	<a href="findrideLIN.php" id="greenb" class="action-button shadow animate green">Find a ride</a>
	  	<a href="offerride.php" id="redb" class="action-button shadow animate red">Offer a ride</a>
		</span>
		<nav>
		<ul>
		    <li class="drop">
			<a href="#"><?php echo $username; ?></a>
			<div class="dropdownContain">
			    <div class="dropOut">
				<div class="triangle"></div>
				<ul>
				    <li onclick="viewprofileclicked()">View Profile</li>
				    <li onclick="signoutclicked()">Sign Out</li>
				</ul>
			    </div>
			</div>
		    </li>
		</ul>
		</nav>
	</div>
	<div class="container">
		<section id="content">
			<form onsubmit="return isvalidated();" action="profilenumofseatsup.php" method="post">
				<h1>Update number of seats of ride</h1>
				<h2 id="headerror"></h2>
				<div>
					<input onblur="checkrideid()" type="number" placeholder="Ride Id" id="rideid" name="rideid"/>
					<br><span class="errors" id="rideiderror"></span><br>
				</div>
				<div>
					<input onblur="checknumofseats()" type="number" placeholder="New number of seats" id="numofseats" name="numofseats"/>
					<br><span class="errors" id="numofseatserror"></span><br>
				</div>
				<div>
					<input type="submit" value="Reset" />
					<a href="profilepassword.php">Reset password?</a>
				</div>
			</form><!-- form -->
			<div class="button">
			</div><!-- button -->
		</section><!-- content -->
	</div><!-- container -->
	<div id="foot">
		<br><br><p id="fom">Find Out More</p><br>
		<a id="a1" href="howitworksLIN.php">How It Works</a><br><br>
		<a id="a2" href="faqLIN.php">Frequently Asked Questions</a><br><br>
		<a id="a3" href="tandcLIN.php">Terms & Conditions</a>
	</div>
</body>
<script>
	function checkrideid(){
		var x=document.getElementById("rideid").value;
		if(x.localeCompare("")==0)
			document.getElementById("rideiderror").innerHTML="Enter ride ID";
		else
			document.getElementById("rideiderror").innerHTML="";
	}
	function checknumofseats(){
		var x=document.getElementById("numofseats").value;
		if(x.localeCompare("")==0)
			document.getElementById("numofseatserror").innerHTML="Enter ride ID";
		else
			document.getElementById("numofseatserror").innerHTML="";
	}
	function isvalidated(){
		var c=document.getElementById("rideiderror").innerHTML;
		var d=document.getElementById("numofseatserror").innerHTML;
		var j=document.getElementById("rideid").value;
		var k=document.getElementById("numofseats").value;
		if(!(c.localeCompare("")==0 && d.localeCompare("")==0)){
			document.getElementById("headerror").innerHTML="Complete the form correctly!";
			return false;
		}else if(j.localeCompare("")==0||k.localeCompare("")==0){
			document.getElementById("headerror").innerHTML="Complete the form correctly!";
			return false;
		}else{
			return true;
		}
	}
</script>
</html>
