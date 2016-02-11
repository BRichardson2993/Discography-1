<nav class="right span7">
	<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
		<ul id="nav">
			<li><a href="index.php" <?php if ($currentPage=='index.php' ) { echo 'id="here"';} ?>>Home</a></li>
			<li><a href="albums.php" <?php if ($currentPage=='albums.php' ) { echo 'id="here"';} ?>>Albums</a></li>
			<li><a href="tracks.php" <?php if ($currentPage=='tracks.php' ) { echo 'id="here"';} ?>>Tracks</a></li>
			<li><a href="members.php" <?php if ($currentPage=='members.php' ) { echo 'id="here"';} ?>>Members</a></li>
			<li><a href="news.php" <?php if ($currentPage=='news.php' ) { echo 'id="here"';} ?>>News</a></li>
			<li><a href="sources.php" <?php if ($currentPage=='sources.php' ) { echo 'id="here"';} ?>>Sources</a></li>
		</ul>
</nav>