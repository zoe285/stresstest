<!-- 
Title: Form Page (First)
Description: Collect personal information and save to database 
-->
<?php

include 'database.php';

$errormsg = '';

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$region = $_POST['region'];
	$location = $_POST['location'];
	$position = $_POST['position'];

	$formok = true;
	$errors = array();

	if(empty($name)) {
		$formok = false;
		$errors[] = "Please enter your name.";
	}
	if(empty($email)) {
		$formok = false;
		$errors[] = "Please enter your email.";
	}
	if(empty($age)) {
		$formok = false;
		$errors[] = "Please select your age range.";
	}
	if(empty($region)) {
		$formok = false;
		$errors[] = "Please select your region.";
	}
	if(empty($location)) {
		$formok = false;
		$errors[] = "Please select your location.";
	}
	if(empty($position)) {
		$formok = false;
		$errors[] = "Please enter your job title/position.";
	}

	if($formok) {
		$sql = "INSERT INTO users (name, email, age, region, location, position) VALUES ('".$name."','".$email."','".$age."','".$region."','".$location."','".$position."')";
		$result = mysqli_query($connection, $sql);
		if($result) {
			header('Location:quiz1.php');
		} else {
			$errormsg = 'There was an error with your information. Please try again.';
		}
	} else {
		if(isset($errors) && count($errors) > 0) {
			$errormsg = '<div class="error wrap">';
			$errormsg .= implode('<br>', $errors);
			$errormsg .= '</div>';
		}
	}
}
?>

<?php include 'header.php'; ?>

<div class="header">
	<h1>The Stress Test</h1>
	<p>What stresses you out? How do you wind down? We want to know!</p>
	<br>
	<p>First, tell us about yourself before we get started.</p>
</div>

<div class="content">
	<div class="wrap">
		<?php
		if($errormsg) {
			echo $errormsg;
		}
		?>
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
			<label for="position">Job Title/Position</label>
			<input name="position" id="position" placeholder="Tell us your job title/position">
			<br>
			<input id="submit" name="submit" type="submit" value="NEXT">
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>