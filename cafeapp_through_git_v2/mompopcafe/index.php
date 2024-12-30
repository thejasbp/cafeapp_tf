<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to Mom &amp; Pop Caf&eacute;!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center">Mom &amp; Pop Caf&eacute;</div>
	</div>
	<br>
	<?php
		// Get the application environment parameters from the Parameter Store.
		include ('getAppParameters.php');

		// Display the server metadata information if the showServerInfo parameter is true.
		//include('serverInfo.php');
	?>
	<hr>
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="#aboutUs">About Us</a>
		<a href="#contactUs">Contact Us</a>
		<a href="menu.php">Menu</a>
		<a href="orderHistory.php">Order History</a>
	</div>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			<table>
				<tr>
					<td><img src="images/Coffee-and-Pastries.png" height=auto width="490"></td>
					<td><img src="images/Cake-Vitrine.png" height=auto width="450"></td>
				</tr>
			</table>
			<hr>
			<p>Mom &amp; Pop Caf&eacute; offers an assortment of delicious and delectable pastries and coffees that will put a smile on your face. From cookies to croissants, tarts and cakes, each treat is especially prepared to excite your tastebuds and brighten your day!</p>
			<br>
			<table>
				<tr>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Pop bakes a rich variety of cookies. Try them all!</div>
						<table>
							<tr>
								<td><img src="images/Cookies.png" height=auto width="300"></td>
							</tr>
						</table>
					</td>
					<td bgcolor="orange">
						<table>
							<tr>
								<td><img src="images/Cup-of-Hot-Chocolate.png" height=auto width="200"></td>
								<td class="cursiveText">Tea<br>Coffee<br>Latte<br>Hot Chocolate<br>Yes, we have it!</td>
							</tr>
						</table>
					</td>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Our tarts are always a customer favorite!<br><br>
					  </div>
						<table>
							<tr>
								<td><img src="images/Strawberry-Tarts.png" height=auto width="170"></td>
								<td><img src="images/Strawberry-&-Blueberry-Tarts.png" height=auto width="170"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>

	<div id="aboutUs" class="center">
		<hr>
		<div>
			<h2>About Us</h2>
		</div>
			<table>
				<tr>
					<td><img src="images/Mom-&-Pop.png" height=auto width="400"></td>
					<td><p>Mom and Pop have been adding sweetness to their customers' lives since 2016.  Pop's recipes have been passed down from his mother and use simple and fresh ingredients to produce delightful flavors.  Both of them will personally greet you with a welcoming smile when you visit us!</p></td>
				</tr>
			</table>
			<hr>
		</div>

	<div id="contactUs" align="center">
		<hr>
		<div>
			<h2>Contact Us</h2>
		</div>
		<table>
			<tr>
				<td><img src="images/Mom-&-Pop-Coffee-Shop.png" height=auto width="120"></td>
			</tr>
		</table>
		<div><p>123 Sweet Tooth St.<br>London SW1A 0AA, UK5<br>Tel: +44-12-12345678</p></div>
		<div>
			<h3>Hours</h3>
		</div>
		<div>Weekdays: 6:00am - 6:00pm<br>Saturday: 7:00am - 7:00pm<br>Closed on Sundays</div>
	</div>

	<div id="Copyright" class="center">
		<h5>&copy; 2019, Amazon Web Services, Inc. or its Affiliates. All rights reserved.</h5>
	</div>
</body>
</html>
