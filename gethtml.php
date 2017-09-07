<?php
	$url = 'https://' . $_GET['locale'] . '.wikipedia.org/wiki/' . urlencode($_GET['word']);
	$html = file_get_contents($url);
	echo $html . $_GET['word'];
?>