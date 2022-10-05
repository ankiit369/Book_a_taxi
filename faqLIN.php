<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Frequently Asked Questions</title>
<link rel="stylesheet" type="text/css" href="css/fixedbar.css">
<link rel="stylesheet" type="text/css" href="css/faq.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
	#foot{
		top:2250px;
	}
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
	<div id="pageheading">Frequently Asked Questions</div>
	<div id="pagecontent">
		<div class="contentheading">About ridesharing</div>
		<div class="contentsubheading">What is ridesharing?</div>
		<p class="maincontent">Ridesharing is when several people travel together by car and share the cost of the journey. You probably already rideshare very often with family and friends: every time you take the car together you share the cost of a journey with them. In much the same way, TaxiShare connects car owners and co-travellers to share city-to-city journeys, so that they can share a long distance trip together, and both save money.</p><br>
		<div class="contentsubheading">What's in it for me?</div>
		<p class="maincontent">For co-travellers, ridesharing is a cheap and convenient travel option. For example, a ride from Delhi - Chandigarh costs ₹700.<br><br>
For car owners, ridesharing helps offset really high vehicle costs (for example, the average car costs its owner more than ₹2000 when driving from Delhi to Chandigarh in fuel costs, tolls etc.).<br><br>
Of course, aside from the purely economic aspect, sharing a car is also environmentally friendly. Instead of using a car as an individual mode of transport, sharing with others allows you to use excess capacity efficiently and reduce the environmental impact of your journey.</p><br><br>
		<div class="contentheading">About TaxiShare</div>
		<div class="contentsubheading">What is TaxiShare?</div>
		<p class="maincontent">TaxiShare is a smart and popular European app that is now making city-to-city travel in India affordable and comfortable, even last minute.
TaxiShare allows you to share city-to-city car journeys with great people:
Car owners avoid heavy driving costs by sharing them with co-travellers
Co-travellers make an agreed contribution to driving costs and enjoy last-minute travel in the comfort of a car.
The TaxiShare community is safe and secure, and you choose your co-travellers so you know they will be people just like you.</p><br><br>
		<div class="contentsubheading">How does TaxiShare work?</div>
		<p class="maincontent">Car owners who are planning a long distance car journey offer their ride online, specifying itinerary and price. Co-travellers interested in this journey contact the driver by phone. They then travel together and co-travellers pay car owners a contribution to help offset their costs.</p><br><br>
		<div class="contentsubheading">Why do I need to sign up, and is it free?</div>
		<p class="maincontent">You do not need to sign-up as a member in order to search for a ride as a co-traveller. When you find a ride that you are interested in and you want to contact the car owner, you will then need to join TaxiShare (only registered members can contact other members).
If you are a car owner and you would like to offer a ride, you will need to join first.
It is completely free, quick and easy to join TaxiShare for both car owners and co-travellers.</p><br><br>
		<div class="contentsubheading">What about departure and arrival points?</div>
		<p class="maincontent">Planned departure, arrival and stopover points are given when a car owner offers a ride. They also indicate how much of a detour they are willing to make for a co-traveller (for example, a 15 or 30 minute detour, or none at all). Most car owners are happy to accommodate their co-travellers, within reason. Such details are agreed on a one-to-one basis when co-travellers get directly in touch with car owners to plan and confirm their ride.</p><br><br>
		<div class="contentheading">How to search for a ride</div>
		<div class="contentsubheading">How do I find a ride?</div>
		<p class="maincontent">Use our search engine on the home page: enter the city you wish to depart from and the one you wish to arrive at, you will see a list of rides available, in chronological order by time of departure, with number of seats left and price. </p><br><br>
		<div class="contentheading">How to pay for a ride?</div>
		<div class="contentsubheading">How do I pay?</div>
		<p class="maincontent">Payment is made in cash during the journey. We recommend that you arrange to have the payment ready for the journey in advance, preferably in the exact amount in cash if possible, as this will avoid the need to find a cash machine or to find change if the car owner doesn't have any.</p><br><br>
		<div class="contentheading">How to publish my ride</div>
		<div class="contentsubheading">How do I offer a ride?</div>
		<p class="maincontent">It’s easy. Just <a href="signup.php" style="text-decoration:underline;color:black;">sign up</a> to TaxiShare, and then all you need to do is complete the form <a href="offerride.php" style="text-decoration:underline;color:black;">here.</a> You’ll need to state departure and arrival cities, the number of available seats and the date and time of your departure. Once you’ve published your ride, it’s visible to all everyone who can then contact you if they are interested.</p><br><br>
		<div class="contentsubheading">What are stopover points?</div>
		<p class="maincontent">Stopover points are urban centres that you will or can pass through on your way to your final destination.
For example, you are travelling from Delhi to Chandigarh. If you propose a stopover at Ambala, passengers looking for a ride from Delhi to Ambala, would see your offer in their list of search results.
It is not obligatory to give stopover cities, but we recommend that you do, so that your offer appears in more co-traveller searches, increasing your chances of finding co-travellers.</p><br><br>
		<div class="contentheading">How do I get paid for a ride?</div>
		<div class="contentsubheading">How do I get paid?</div>
		<p class="maincontent">Payment is made in cash by co-travellers at the time of the trip. Each co-traveller will pay you the price per co-traveller that you selected when offering your ride. The co-traveller should bring the exact cash amount but it's always worth having a bit of change on you in case they haven't. We recommend that you ask the co-traveller for payment directly at the point of departure.</p><br><br>
	</div>
	<div id="foot">
		<br><br><p id="fom">Find Out More</p><br>
		<a id="a1" href="howitworksLIN.php">How It Works</a><br><br>
		<a id="a2" href="faqLIN.php">Frequently Asked Questions</a><br><br>
		<a id="a3" href="tandcLIN.php">Terms & Conditions</a>
	</div>
</body>
</html>

