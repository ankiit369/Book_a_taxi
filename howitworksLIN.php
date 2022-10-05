<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>How it Works</title>
<link rel="stylesheet" type="text/css" href="css/fixedbar.css">
<link rel="stylesheet" type="text/css" href="css/howitworks.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
    </style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/fixedbar.js"></script>
</head>
<body bgcolor="#B2B2B2">
	<?php
		session_start();
		$username=$_SESSION["username"];
	?>
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
	<div id="pageheading">How It Works</div>
	<div id="pagecontent">
		<br><br>
		<div id="ch1"><div class="contentheading">Do You Need To Travel ?</div>
		<div class="contentsubheading">Find a ride</div>
		<p class="maincontent">Just enter your departure and arrival points and your travel date, then choose a car owner offering a ride going your way.</p><br><br>
		<div class="contentsubheading">Get in touch</div>
		<p class="maincontent">Login to your TaxiShare account or create one if you don't have any. You'll then get their phone number if you are correctly logged in.</p><br><br>
		<div class="contentsubheading">Travel Together</div>
		<p class="maincontent">Be at your planned meeting point on time. Bring exact change to pay the car owner the agreed contribution during the ride.</p><br><br></div>
		<br><br>
		<div id="ch2"><div class="contentheading">Do You Have Empty Seats ?</div>
		<div class="contentsubheading">Offer Your Ride Online</div>
		<p class="maincontent">Add your departure and arrival points, the date and time of your departure, and the price per co-traveller. </p>
		<br><br><br><div class="contentsubheading">Your Co-travellers Contact You</div>
		<p class="maincontent">Co-travellers will contact you to confirm journey details by phone.</p><br><br>
		<br><div class="contentsubheading">Travel Together</div>
		<p class="maincontent">Be at your planned meeting point on time. Should you be delayed, send a quick message letting your co-travellers know.Your co-travellers will pay you the agreed contribution during the journey. It might be useful to have a bit of change on you.</p><br><br></div>
	</div>
	<div id="foot">
		<br><br><p id="fom">Find Out More</p><br>
		<a id="a1" href="howitworksLIN.php">How It Works</a><br><br>
		<a id="a2" href="faqLIN.php">Frequently Asked Questions</a><br><br>
		<a id="a3" href="tandcLIN.php">Terms & Conditions</a>
	</div>
</body>
</html>

