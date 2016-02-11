<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="BMTH Band Website">
	<meta name="viewport" content="width=device-width">

	<link href='https://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Overlock' rel='stylesheet' type='text/css'>
	<title>Bring Me The Horizon</title>
	<link rel="stylesheet" href="base.css">
</head>

<body>
	<header>
		<h1>Bring Me The Horizon</h1>
	</header>
	<div id="col1" class="span5">
		<img src="images/bandmembers.jpeg" alt="Band Members">
		<p>Bring Me the Horizon was formed in 2004. They are from in Sheffield, Yourshire. Bring Me the Horizon consists of five band members, their lead vocalist Oliver Sykes, their lead guitarists is Lee Malia, their bassist is Matt Kean, their drummer is Matt Nicholls, and their keyboardist is Jordan Fish. The band also has two former members who have resigned from the group these two members are Curtis Ward and Jona Weinhofen. Curtis Ward and Jona Weinhofen were both gutarists in this band, Curtis resigned from the band in 2009, and Jona parted ways more recently in 2013. The group released their first album, Count Your Blessings, in October, 2006. Their music style is often described as metalcore, but have also been considered a deathcore band. Bring Me the Horizon now has five albums; That's The Spirit, Sempiternal, There Is A Hell Believe Me I've Seen It, There Is A Heaven Let's Keep It A Secret, Suicide Season, and Count Your Blessings. </p>
	</div>
	<!--COL1-->
	<nav class="right span7">
		<?php $file = './includes/menu.php';
			if (file_exists($file) && is_readable($file)) {
					require $file;
			} else {
					throw new Exception("$file can't be found");
			}
			?>
	</nav>
	<div id="col2" class="span7">
		<div class="album">
			<img src="images/spirit.jpeg" alt="That's The Spirit cover art" class="span4 left">
			<p class="span8 right">That's The Spirit
				<br> Released September 2015. Consists of 11 tracks.</p>
		</div>
		<!--Album-->
		<div class="album"><img src="images/sempiternal.jpeg" alt="Sempiternal cover art" class="span4 left">
			<p class="span8 right">Sempiternal
				<br> Released March 2013. Consists of 14 tracks.</p>
		</div>
		<!--Album-->
		<div class="album"><img src="images/heavenhell.jpeg" alt="Heaven and Hell cover art" class="span4 left">
			<p class="span8 right">
				There Is A Hell Believe Me I've Seen It, There Is A Heaven Let's Keep It A Secret
				<br> Released October 2010. Consists of 12 tracks.</p>
		</div>
		<!--Album-->
		<div class="album"><img src="images/suicide.jpeg" alt="Suicide Silence cover art" class="span4 left">
			<p class="span8 right">Suicide Season
				<br> Released September 2008. Consists of 24 tracks.</p>
		</div>
		<!--Album-->
		<div class="album"><img src="images/blessings.jpeg" alt="Count Your Blessings cover art" class="span4 left">
			<p class="span8 right">Count Your Blessings
				<br> Released October 2006. Consists of 10 tracks.</p>
		</div>
		<!--Album-->
		<h4 class="hidden"><a href="albums.html">Back to Top</a></h4>
	</div>
	<!--COL2-->
	<footer class="span5">
		&copy; 2015
		<br> Made by Sarah Persechino
	</footer>
</body>

</html>