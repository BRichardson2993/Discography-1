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
			<div id="news">
				<p> Want to be updated on what is going on with Bring Me the Horizon? Fill out the form below to subscribe to our newsletter and reveive updates on new albums, tracks, tour dates, and more!</p>
				<form>
					<div class="span6 left">
						* First name:
						<br>
						<input type="text" name="firstname" placeholder="Your First Name" required>
						<br> * Last name:
						<br>
						<input type="text" name="lastname" placeholder="Your Last Name" required>
						<br> * Address:
						<br>
						<input type="text" name="address" placeholder="Address" required>
						<br> * City:
						<br>
						<input type="text" name="city" placeholder="City" required>
						<br> * State:
						<br>
						<input type="text" name="state" placeholder="State" required>
					</div>
					<!-- span6 left-->
					<div class="span6 right">
						* Zip Code:
						<br>
						<input type="text" name="zipcode" placeholder="Zip Code" required>
						<br> * Birthday:
						<br>
						<input type="text" name="birthday" placeholder="Birthday" required>
						<br> * E-mail Address:
						<br>
						<input type="text" name="email" placeholder="E-mail Address" required>
						<br> * Additional Comments:
						<br>
						<textarea name="Additional Comments" placeholder="Send us a nice message!"></textarea>
						<br>
						<input type="checkbox" class="checkbox" required> I agree to the terms and conditions of this website.
						<br>
						<button type="submit" value="submit">Subscribe!</button>
					</div>
					<!-- span6 left-->
				</form>
			</div>
			<!--news-->
			<h4 class="hidden"><a href="news.html">Back to Top</a></h4>
		</div>
		<!--COL2-->
		<?php include './includes/footer.php'; ?>

</html>