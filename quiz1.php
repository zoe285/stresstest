<!-- 
Title: Quiz Page 1
Description: First part to find out what stresses users out 
-->
<?php
session_start();
?>

<?php include 'header.php'; ?>

<div class="header">
	<h1>The Stress Test</h1>
	<p>What stresses you out? How do you wind down? We want to know!</p>
	<br>
	<p>Thanks for the details! Take the test below!</p>
</div>

<div class="content">
	<div id="main">
		<div class="part">PART 1</div>
		<div class="desc">Click on the scenarios that stresses you out</div>

		<div class="image-tile right"><img src="images/commute-normal.jpg" /></div>
		<div class="image-tile"><img src="images/parent-normal.jpg" /></div>
		<div class="image-tile right"><img src="images/work-normal.jpg" /></div>
		<div class="image-tile"><img src="images/finance-normal.jpg" /></div>
		<div class="image-tile right"><img src="images/relationship-normal.jpg" /></div>
		<div class="image-tile"><img src="images/health-normal.jpg" /></div>
		<div class="image-tile right"><img src="images/news-normal.jpg" /></div>
		<div class="image-tile"><img src="images/pollution-normal.jpg" /></div>
	</div>

	<div id="sidebar">
		<div id="stressometer">STRESSOMETER</div>
		<br><br>
	</div>
</div>

<script src="js/quiz1.js" type="text/javascript"></script>
<?php include 'footer.php'; ?>