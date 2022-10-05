<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Frequently Asked Questions</title>
<link rel="stylesheet" type="text/css" href="css/fixedbar.css">
<link rel="stylesheet" type="text/css" href="css/offerride_successful.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
	#foot{
		top:459px;
	}
    </style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/fixedbar.js"></script>

</head>
<body>
	<?php
		session_start();
		$username=$_SESSION["username"];
		$depart=$_POST["depart"];
		$arrival=$_POST["arrival"];
		$date=$_POST["dateforride"];
		$time=$_POST["timeofride"];
		$car=$_POST["carname"];
		$numofseats=$_POST["numofseats"];
		$luggage=$_POST["luggage"];
		$timewindow=$_POST["timewindow"];
		$detour=$_POST["detour"];
		$ruser=$_SESSION["username"];
		$rideid;
		$arr=explode(",",$_POST["fcount"]);
		echo $_POST["fcount"]."<br />";
		$numofsp=count($arr)-1;
		echo $numofsp."<br />";
		$conn = mysql_connect("localhost","root","ltw23");
		if(!$conn) {
			echo "Could not connect : ".mysql_error();
		}
		else {		
			mysql_select_db("taxi");
			mysql_query("INSERT INTO ride(ruser,date,time,car,numofseats,luggage,timewindow,detour,depart) VALUES('$ruser','$date','$time','$car','$numofseats','$luggage','$timewindow','$detour','$depart');",$conn);
			$result=mysql_query("SELECT rideid FROM ride WHERE ruser='$ruser' AND date='$date' AND time='$time' AND car='$car' AND numofseats='$numofseats' AND luggage='$luggage' AND timewindow='$timewindow' AND detour='$detour' AND depart='$depart';",$conn);
			$row=mysql_fetch_assoc($result);
			$rideid=$row['rideid'];
		}
		$tmp1=substr($_POST["arrival"],0,strpos($_POST["arrival"],":"));
		$tmp2=substr($_POST["arrival"],strpos($_POST["arrival"],":")+1);
		mysql_query("INSERT INTO destination(drideid,arrival,price) VALUES('$rideid','$tmp1','$tmp2');",$conn);
		$i;
		for($i=0;$i<$numofsp;$i=$i+1){
			$tmp1=substr($_POST["field".$arr[$i]],0,strpos($_POST["field".$arr[$i]],":"));
			$tmp2=substr($_POST["field".$arr[$i]],strpos($_POST["field".$arr[$i]],":")+1);
			mysql_query("INSERT INTO destination(drideid,arrival,price) VALUES('$rideid','$tmp1','$tmp2');",$conn);
		}
		mysql_close($conn);
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
	<div id="content">
		<h2>Success!</h2>
		<h3>Your ride is successfully added. View your profile for further details.</h3>
	</div>
	<div id="foot">
		<br><br><p id="fom">Find Out More</p><br>
		<a id="a1" href="howitworksLIN.php">How It Works</a><br><br>
		<a id="a2" href="faqLIN.php">Frequently Asked Questions</a><br><br>
		<a id="a3" href="tandcLIN.php">Terms & Conditions</a>
	</div>
</body>
</html>

