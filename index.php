<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Stress Test</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="js/jscript.js" type="text/javascript"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>The Stress Test</h1>
			<p>What stresses you out? How do you wind down? We want to know!</p>
			<br>
			<p>First, tell us about yourself before we get started.</p>
		</div>

		<div class="content">
			<form method="post" id="infoForm" action="">
				<label for="name">Name</label>
				<input name="name" id="name" placeholder="Tell us your name">
				<label for="email">E-mail</label>
				<input name="email" type="email" placeholder="Your e-mail address">
				<label for="age">Age Range (in years)</label>
				<select name="age" id="age">
					<option value="">--Select--</option>
					<option value="<20">Less than 20</option>
					<option value="20-30">20-30</option>
					<option value="31-40">31-40</option>
					<option value="41-50">41-50</option>
					<option value="51-60">51-60</option>
					<option value=">60">More than 60</option>
				</select>
				<label for="region">Region</label>
				<select name="region" id="region">
					<option value="">--Select--</option>
					<option value="APAC">APAC</option>
					<option value="EMEA">EMEA</option>
					<option value="NA">NA</option>
				</select>
				<label for="location">Location</label>
				<select name="location" id="location">
					<option value="">--Select--</option>
				</select>
				<label for="position">Position</label>
				<input name="position" id="position" placeholder="Tell us your position">
				<br>
				<input id="submit" name="submit" type="submit" value="NEXT">
			</form>
		</div>
	</div>

	<div class="footer">
		<p>Copyright© 2013 Text100</p>
		<p>All images from Corbis. For internal user only. Not for distribution.</p>
	</div>

</body>
</html>