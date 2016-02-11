<footer class="span5">
	<p>&copy;
		<?php 
		$startYear = 2015;
		$thisYear = date('Y');
		if ($startYear == $thisYear) {
			echo $startYear;
		} else {
			echo "{$startYear}&ndash;{$thisYear}";
		}
	?>
			<br>Made by Sarah Persechino</p>
</footer>