<html>
<head>
	<title>PROFILE</title>
	<link rel="stylesheet" type="text/css" href="css/fixedbar.css">
	<link rel="stylesheet" type="text/css" href="css/mainprofile.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
	#foot{
		top:459px;
	}
    	</style>
</head>
<?php
	session_start();
	$username= $_SESSION["username"];
	$connection = mysql_connect('localhost', 'root', 'ltw23'); 
	mysql_select_db('taxi');
	$query = "SELECT * FROM userinfo WHERE user='$username'"; 
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$fname=$row["fname"];
	$sname=$row["sname"];
	$email=$row["email"];
	$sex=$row["sex"];
	$mobilenum=$row["mobilenum"];
	$query = "SELECT * FROM ride WHERE ruser='$username'"; 
	$result = mysql_query($query);

	echo "<table>"; 
	echo "<tr><th>" . "Ride ID" . "</th><th>" . "  Date  " . "</th><th>" . "  Time  " . "</th><th>" . "  Car  " . "</th><th>" . "Number of seats" . "</th><th>" . "Luggage size" . "</th><th>" . "Time window (minutes) " . "</th><th>" . " Detour (minutes)" . "</th><th>" . "Departure point" . "</th></tr>"; 
	while($row = mysql_fetch_array($result)){   
	echo "<tr><td>" . $row['rideid'] . "</td><td>" . $row['date'] . "</td><td>" . $row['time'] . "</td><td>" . $row['car'] . "</td><td>" . $row['numofseats'] . "</td><td>" . $row['luggage'] . "</td><td>" . $row['timewindow'] . "</td><td>" . $row['detour'] . "</td><td>" . $row['depart'] . "</td></tr>";  
	}

	echo "</table>"; 
	mysql_close();	
?>
<body bgcolor="grey">
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
	<div id="aboutuser">
		<div id="username"><?php echo $username; ?></div>
		<div id="bar"></div>
		<div id="info">
			<div id="name"><span><?php echo $fname; ?></span><span> <?php echo $sname; ?></span></div>
			<div id="sex"><span><?php echo $sex; ?></span></div>
			<div id="email"><span><?php echo $email; ?></span></div>
			<div id="mobilenum"><span><?php echo $mobilenum; ?></span></div>
		</div>
		<div id="links">
			<br>
			<div><a href="profilepassword.php">Reset Password</a></div><br>
			<div><a href="profilenumofseats.php">Update no. of seats for a ride</a></div>
		</div>
	</div>
	<div id="foot">
		<br><br><p id="fom">Find Out More</p><br>
		<a id="a1" href="howitworksLIN.php">How It Works</a><br><br>
		<a id="a2" href="faqLIN.php">Frequently Asked Questions</a><br><br>
		<a id="a3" href="tandcLIN.php">Terms & Conditions</a>
	</div>
</body>
</html>
