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
			<div id="members">
				<img src="images/olisykes.jpeg" alt="Oliver Sykes" class="span10">
				<h2>Oliver Sykes</h2>
				<p>Oliver is the lead vocalist of Bring Me the Horizon. Oliver was born on November 20th, 1986, and goes by the nickname "Oli". Aside from being a member of the band he also founded an apparel company called Drop Dead Clothing. His mother is Carol Sykes and his father is Ian Sykes. Oli also has a brother names Tom Sykes who is a motorcycle racer. </p>
				<img src="images/jordanfish.jpeg" alt="" class="span10">
				<h2>Jordan Fish</h2>
				<p>Jordan serves as the keyboardist as well as backing vocalist for BMTH. He previously played keyboard in a baned names Warship. He joined BMTH as a part time musician and later became a full member of Bring Me the Horizon in January 2013. Jordan was born on June 26th, 1986 and is married to Emma Fish. </p>
				<img src="images/leemalia.jpeg" alt="" class="span10">
				<h2>Lee Malia</h2>
				<p>Lee is the lead guitarist for Bring Me the Horizon as well as a backing vocalist. He is a founding member of the band in 2004. Lee was born on June 4th, 1984. Lee is dating a woman named Deni McGonigle but is not yet married to anyone. </p>
				<img src="images/mattnicholls.jpeg" alt="" class="span10">
				<h2>Mattew Nicholls</h2>
				<p>Mattew is the drummer and percussionist for Bring Me the Horizon. He was born on March 22nd, 1986.</p>
				<img src="images/mattkean.jpeg" alt="" class="span10">
				<h2>Matt Kean</h2>
				<p>Matt is the bassist of the group. He was born on June 2nd, 1986 and lives in Sheffiels, South Yorkshire, England. He is the only vegan in BMTH, and the others have given him the nickname of Vegan. </p>
				<img src="images/curtisward.png" alt="" class="span10">
				<h2>Curtis Ward</h2>
				<p>Curtis was in the band from 2004 to 2009, he left the group duting the Taste of Chaos tour. He was a guitarist for BMTH when he was a part of it. Curtis was born on June 26th, 1986.</p>
				<img src="images/jona.jpeg" alt="" class="span10">
				<h2>Jona Weinhofen</h2>
				<p>Jona was a guitarist for Bring Me the Horizon until he left the band in 2013. He was also a guitarist in an Australian band named I Killed the Prom Queen. Jona was born on January 1st, 1983.</p>
			</div>
			<!--Members-->
			<h4 class="hidden"><a href="members.html">Back to Top</a></h4>
		</div>
		<!--COL2-->
		<?php include './includes/footer.php'; ?>
</body>

</html>