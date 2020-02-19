<?php 
/*

*/
ob_start();
	echo '<article>';
	echo '<h3>'.$artist['artname'].'</h3>';
	echo '<img src="public/images/'.$artist['picture'].'">';
	echo '<p>Содержание: '.$artist['description1'].'</p>';
	echo '<p style="text-align:right;"><a href="artists" role="button">Back &raquo;</a></p>';
	echo '</article>';
	echo '<div style="clear:both;"></div>';

$content = ob_get_clean();
include 'view/templates/layout.php';