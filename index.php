<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Welcome to TaxiShare</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    
    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

    </style>

  </head>
  <body>
	<div class="body"></div>
	<div class="grad"></div>
	<div class="header">
		<div id="cname" >Taxi<span>Share</span></div><br>
		<img id="cicon" src="http://s2.postimg.org/na0idpbkp/cicon.png">
	</div>
	<br>
	<form class="login" onsubmit="return isvalidated()" action="asd.php" method="post">
			<div id="headerror"></div>
			<input id="userID" type="text" onblur="usercheckLv()" placeholder="username" name="user"><br><span class="errors" id="usererror"></span><br>
			<input id="passwordID" type="password" onblur="passwordcheckLv()" placeholder="password" name="password"><br><span class="errors" id="passworderror"></span><br>
			<input type="submit" value="Login">
	<div class="signup"><br /><a href="signup.php">Sign Up ?</a></div>
	</form>
    
  </body>
  <script src="js/index.js"></script>
</html>
