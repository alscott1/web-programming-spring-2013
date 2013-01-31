<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Amber Scott - Web Programming 2013</title>

<link href="css/index.css" rel="stylesheet" type="text/css">
</head>

<body>


<header>
<h1>Web Programming 2013 - Amber Scott</h1>

<nav>
<ul>
<li><a id="current" href="index.php">Home (Lesson 1)</a></li>
<li><a href="#">Lesson 2</a></li>
<li><a href="#">Lesson 3</a></li>
<li><a href="#">Lesson 4</a></li>
</ul>
</nav>

</header>

<section>


<p>Hello fellow classmates, my name is Amber, I've been at the JC for several years now, working on a degree in Interactive Multimedia.  This semester other than this web programming class I have my first Illustrator and Indesign class and my second Photoshop class. I learned so much in the first Dreamweaver class, and I'm looking forward to learning how to code PHP and MySQL. It seems like both programming languages take web design to a whole new dynamic/interactive level!
</p>

<div>
 <img class="Centerimg" src="img/amber.jpg" alt="Picture Of Amber at The Beach">
 <div style="clear:both"></div>
 </div>
 
<p>
I'm taking this class because I want to become a decent programmer, and I know that learning both PHP and MySQL will help me add to my skill level and will hopefully help me be more employable. This class is also required for me to get my degree in multimedia.
</p> 

 
<p>So....Here it goes...my first attempt at learning how to use PHP!</p>

<?php
	$units = 90;
	$bookcost = ($units / 3) * 60.00;
?>

<h3>Amber's SRJC Expenses Over the Last 3.5 years calculated with PHP! </h3>

<p>
This is how much I've spent on books at SRJC: <span style="color:#970000;">$<?php  echo $bookcost; ?></span><br />
Thank Goodness there weren't book charges for this class!
</p>

<?php
$years = 3.5;
$weeksPerYear = 34;
$tripsPerWeek = 4;
$milesPerTrip = 20;
$costPerGallon = 3.50;
$milesPerGallon = 20.0;

$gasExpense = ($years * $weeksPerYear * $tripsPerWeek * $milesPerTrip * $costPerGallon) / $milesPerGallon;
?>

<p>
This is how much I've spent on gas going to school: <span style="color:#970000;">$<?php  echo $gasExpense; ?></span> 
</p>
</section>

<footer>
 <p>
 Amber Scott -Web Programming Spring 2013
 </p>
 
<a id="current" href="index.php">Home (Lesson 1)</a> | <a href="#">Lesson 2</a> | <a href="#">Lesson 3</a> | <a href="#">Lesson 4</a>

</footer>

</body>
</html>
