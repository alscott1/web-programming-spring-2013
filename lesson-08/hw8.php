<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Music Database</title>
</head>


<body style="background-color:#F8F8F8">
<h1>Master Detail Database Structure</h1>
 <ul class="nav">
        <li style="list-style:none"><a href="index.html">Home (Week 3) (CSS3 & Grid-based Responsive Layout)</a></li>
        <li style="list-style:none"><a href="old-home.php">PHP Calculations (Week 1)</a></li>
        <li style="list-style:none"><a href="hw2.php">PHP Form Input (Week 2)</a></li>
        <li style="list-style:none"><a href="contact-us/index.html">Refining Web Forms with PHP(Week 5)</a></li>
        <li style="list-style:none"><a style="text-decoration:none:color:#6F0037" href="hw8.php">Creating a CRUD Application I</a></li>
            </ul>

<h2 style="color:#6F0037">Artists &nbsp; &nbsp; &nbsp;  Albums &nbsp; &nbsp; &nbsp; Songs</h2>
<p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">My First attempt at using MySQL & PHP Together!</p>

<div style="width:500px"/>
<hr style="color:#408080"/>
</div>
<?php
require('connection.php');

$sql = <<<SQL
SELECT artist, album, track
FROM artists, albums, tracks
WHERE ((artists.idartists = albums.artists_idartists) and 
(albums.idalbums = tracks.albums_idalbums))
SQL;


		$any = $dataconnection->query($sql);
		echo "<p>";
		

		while ($row = $any->fetch_assoc()) 
		{
			
	 		echo $row['artist'] .  ' = = = = ' . $row['album'] . ' = = = = ' . $row['track'] . '<br />';
		}
		echo "</p>";
		

		$dataconnection->close();
	?>
    
 

</div>
</body>
</html>