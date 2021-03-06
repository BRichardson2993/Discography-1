<?php ; 
	include './includes/title.php'; ?>

	<!doctype html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="description" content="BMTH Band Website">
		<meta name="viewport" content="width=device-width">
		<link href='https://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Overlock' rel='stylesheet' type='text/css'>
		<title>Bring Me The Horizon
			<?php if (isset($title)) echo "&#8212;{$title}";
			?>
		</title>
		<link rel="stylesheet" href="base.css">
	</head>

	<body>
		<header>
			<h1>Bring Me The Horizon</h1>
		</header>
		<div id="col1" class="span5">
			<img src="images/bandmembers.jpeg" alt="Band members">
			<p>Bring Me the Horizon was formed in 2004. They are from in Sheffield, Yourshire. Bring Me the Horizon consists of five band members, their lead vocalist Oliver Sykes, their lead guitarists is Lee Malia, their bassist is Matt Kean, their drummer is Matt Nicholls, and their keyboardist is Jordan Fish. The band also has two former members who have resigned from the group these two members are Curtis Ward and Jona Weinhofen. Curtis Ward and Jona Weinhofen were both gutarists in this band, Curtis resigned from the band in 2009, and Jona parted ways more recently in 2013. The group released their first album, Count Your Blessings, in October, 2006. Their music style is often described as metalcore, but have also been considered a deathcore band. Bring Me the Horizon now has five albums; That's The Spirit, Sempiternal, There Is A Hell Believe Me I've Seen It, There Is A Heaven Let's Keep It A Secret, Suicide Season, and Count Your Blessings. </p>
		</div>
		<!--COL1-->
		<?php $file = './includes/menu.php';
			if (file_exists($file) && is_readable($file)) {
					require $file;
			} else {
					throw new Exception("$file can't be found");
			}
			?>
			<div id="col2" class="span7">
				<div id="sources">
					<h2> Sources</h2>
					<p>For this website I gathered information and images from the following sources.</p>
					<p>
						<h3><a href="http://rhapsody.com/">http://rhapsody.com/</a></h3>
						<br>
						<p>I got a list of their albums, tracks, and some information about the band from this website. I also got the album art from this website. </p>
						<br>
						<h3><a href="http://www.bmthofficial.com/">http://www.bmthofficial.com/</a></h3>
						<br>
						<p>This is Bring Me the Horizon's official website. I used this to gather more information about them.</p>
						<br>
						<h3><a href="https://www.pinterest.com/">https://www.pinterest.com/</a></h3>
						<br>
						<p>I used pinterest for most of the band member's pictures.</p>
				</div>
				<!--Sources-->
				<h4 class="hidden"><a href="sources.html">Back to Top</a></h4>
			</div>
			<!--COL2-->
			<?php include './includes/footer.php'; ?>
	</body>

	</html>