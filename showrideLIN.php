<html>
<title>
Roadtrips Available
</title>
<link rel="stylesheet" type="text/css" href="css/showride.css">
<link rel="stylesheet" type="text/css" href="css/fixedbar.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<style type="text/css">

</style>


<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.9.3/typeahead.min.js"></script>
<script src="js/fixedbar.js"></script>
<body>
<strong>
<h1 align="center">Roadtrips</h1></strong>
</br></br></br>
<center>
<?php
session_start();
include 'config.php'; 
$username=$_SESSION["username"];

$sql=("select * from ride,destination,userinfo where  userinfo.user =ride.ruser and ride.rideid=destination.drideid AND ride.depart='$_POST[depart]' AND destination.arrival='$_POST[arrival]';");

$retval = mysql_query( $sql, $conn );

$rows = mysql_num_rows($retval);

//var_dump($rows);
   
if(! $retval )
{
 die('Could Not Query ! ' . mysql_error());
}


if ($rows > 0) 
{
    // yes
    // print them one after another
echo "<table style=\"width:60%\" align=\"center\" class=\"hovertable\">";
echo "<tr>";
echo "<th>"."Date"."</th>";
echo  "<th>"."Time"."</th>";
echo   "<th>"."First Name"."</th>";
echo  "<th>"."Last Name"."</th>";
echo "<th>"."Price"."</th>";
echo "<th>"."depart"."</th>";
echo "<th>"."Arrival"."</th>";
echo "<th>"."Car Name"."</th>";
echo "<th>"."Mobile number"."</th>";
echo "<th>"."Email"."</th>";
echo "<th>"."Luggage"."</th>";
echo "<th>"."Detour"."</th>";
echo "  </tr>";
	while($row=mysql_fetch_array($retval,MYSQL_ASSOC)) 
    {
$depart=$row['depart'];
$fname=$row['fname'];
$lname=$row['sname'];
$email=$row['email'];
$time=$row['time'];
$date=$row['date'];
$car=$row['car'];
$luggage=$row['luggage'];
$detour=$row['detour'];
$mobilenum=$row['mobilenum'];
$arrival=$row['arrival'];
$price="Rs-".$row['price'];       



echo "<tr  ><td height=\"50\">$date</td><td>$time</td><td>$fname</td><td>$lname</td><td>$price</td><td>$depart</td><td>$arrival</td><td>$car</td><td>$mobilenum</td><td>$email</td><td>$luggage</td><td>$detour</td></tr>\n";

    }
    echo "</table>";
}

else 
{

mysql_free_result($retval);
echo "<center>";
echo "<h1>"."No Results Found !"."</h1>";
mysql_close($conn);
echo "</center>";
}
?>
</center>
<div id="fixedbar">
		<span id="company">
		<a href="findrideLIN.php"><span id="cname" >Taxi</span><span id="cnamecolor" >Share</span></a>
		<img id="cicon" src="http://s2.postimg.org/na0idpbkp/cicon.png">
	  	<a href="findrideLIN.php" id="greenb" class="action-button shadow animate green">Find a ride</a>
	  	<a href="findrideErr2.php" id="redb" class="action-button shadow animate red">Offer a ride</a>
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
<div id="foot">
		<br><p id="fom">Find Out More</p><br>
		<a id="a1" href="howitworksLIN.php">How It Works</a><br><br>
		<a id="a2" href="faqLIN.php">Frequently Asked Questions</a><br><br>
		<a id="a3" href="tandcLIN.php">Terms & Conditions</a>
	</div>

</body>
</html>


