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
<li><a href="index.html">Home (Week 3) (CSS3 & Grid-based Responsive Layout)</a></li>
   <li><a href="old-home.php">PHP Calculations (Week 1)</a></li>
  <li><a href="hw2.php">PHP Form Input (Week 2)</a></li> 
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

<h3>Amber's Birthday Calculated With PHP</h3>
 <?php
 // this is my age calculated with PHP
 function age($birthdate) {
	 return (strtotime('now') -strtotime($birthdate))/(60*60*24*365);
 }
 $age = age('1991-4-07');
 ?>
 
 <p>This is how old I am: <span style="color:#E0050B;"> <?php
 echo $age;
 ?></span>
 
<h3>Amber's SRJC Expenses Calculated With PHP</h3>
<?php
	$units = 90;
	$bookcost = ($units / 3) * 60.00;
?>

<p>
This is how much I've spent on books at SRJC: <span style="color:#E0050B;">$<?php  echo $bookcost; ?></span><br />
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
This is how much I've spent on gas going to school: <span style="color:#E0050B;">$<?php  echo $gasExpense; ?></span> 
</p>
</section>

<footer>
 <p>
 Amber Scott -Web Programming Spring 2013
 </p>
 
<a href="index.html">Home (Week 3) (CSS3 & Grid-based Responsive Layout)</a> | <a id="current" href="old-home.php">PHP Calculations (Week 1)</a> | <a href="hw2.php">PHP Form Input (Week 2)</a>

</footer>

</body>
</html>
