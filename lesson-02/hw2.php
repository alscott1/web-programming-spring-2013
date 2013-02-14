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
<li><a href="index.html">Home (Homework 3 Responsive Layout)</a></li>
<li><a href="old-home.php">Homework 1 (PHP Calculations)</a></li>
<li><a id="current" href="hw2.php">Homework 2 (PHP Form)</a></li>
</ul>
</nav>

</header>

<section>

    <div>
     <img class="Centerimg" src="img/amber.jpg" alt="Picture Of Amber at The Beach">
     <div style="clear:both"></div>
    </div>
    
    
<?php
 
	//check to see if the page is loading from a POST request
	if ($_SERVER['REQUEST_METHOD'] === 'POST' ) 
	{
		function age($birthdate) 
		{
			return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
		}	

		$age = age($_POST['birthdate']);
		
		$myBirthday = strtotime( $_POST['birthdate']);
		$month = date('m', $myBirthday );
		if ($month == 1)
		{
			?>
  <p>You have the same birthday month as Martin Luther King, Jr.</p>
            <img class="fltlft" src="img/MLK.jpg" alt="Martin Luther King Jr.">
<?php 
		}
		else if ($month == 2)
		{
			?>
  <p>You have the same birthday month as John Travolta!</p>
   <img class="fltlft" src="img/Travolta.jpg" alt="Martin Luther King Jr.">
            <?php 
		}
		else if ($month == 3)
		{
			?>
  <p>You have the same birthday month as Rosie O'Donnell!</p>
 <img class="fltlft" src="img/rosie-odonnell.jpg" alt="Rosie ODonnell">
<?php 
		}
		else if ($month == 4)
		{
			?>
  <p>You have the same birthday month as Ella Jane Fitzgerald!</p>
  <img class="fltlft" src="img/ella.jpg" alt="Ella Jane Fitzgerald">
            <?php 
		}
		else if ($month == 5)
		{
			?>
  <p>You have the same birthday as Tina Fey!</p>
  <img class="fltlft" src="img/tina-fey-125004.jpg" alt="Tina Fey">
<?php 
		}
		else if ($month == 6)
		{
			?>
  <p>You have the same birthday month as Marilyn Monroe!</p>
  <img class="fltlft" src="img/monroe.jpg" alt="Marilyn Monroe">
            <?php 
		}
		else if ($month == 7)
		{
			?>
            <p>You have the same birthday month as Tom Hanks!</p>
  <img class="fltlft" src="img/Hanks.jpg" alt="Tom Hanks">
            <?php 
		}
		else if ($month == 8)
		{
			?>
            <p>You have the same birthday month as Julia Child!</p>
  <img class="fltlft" src="img/child.jpg" alt="Julia Child">
            <?php 
		}
		else if ($month == 9)
		{
			?>
           <p>You have the same birthday month as Gloria Estefan!</p>
  <img class="fltlft" src="img/estefan.jpg" alt="Gloria Estefan">
            <?php 
		}
		else if ($month == 10)
		{
			?>
            <p>You have the same birthday month as Paul Simon!</p>
  <img class="fltlft" src="img/simon.jpg" alt="Paul Simon">
            <?php 
		}
		else if ($month == 11)
		{
			?>
           <p>You have the same birthday month as Marie Antoinette!</p>
  <img class="fltlft" src="img/marie.jpg" alt="Marie Antoinette">
            <?php 
		}
		else if ($month == 12)
		{
			?>
            <p>You have the same birthday month as Frank Sinatra!</p>
  <img class="fltlft" src="img/sinatra.jpg" alt="Frank Sinatra">
            <?php 
		}

?> 
<p>This is the month you were born: <span style="color:#C00"> <?php echo $month;?> </span> </p>
 <p>Congratulations you are: <span style="color:#C00"><?php echo $age;?> </span></p> 
 <div style="clear:both"></div>
     
<?php   
     }
     else
     {  
?>
        
        <form action="" method="post">
        <p> **  Date format is: mm/dd/yyyy </p>
        <span>Input your birthday:</span> <input name="birthdate" type="date"><br />
        <br />
        <input name="" type="submit">
        </form> 
<?php 
	 }
?>

</section>

<footer>
 <p>
 Amber Scott -Web Programming Spring 2013
 </p>
 
<a href="index.html">Home (Week 3) (CSS3 & Grid-based Responsive Layout)</a> | <a href="old-home.php">PHP Calculations (Week 1)</a>| <a id="current" href="hw2.php">PHP Form Input (Week 2)</a>

</footer>

</body>
</html>
