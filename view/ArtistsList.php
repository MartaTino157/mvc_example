<?php 

ob_start();
?>
<h2>Известные художники</h2>
<?php
foreach ($ArtistsList as $artistOne) {
	echo '<article>';
	echo '<h3>';
	echo '<a href="art?title='.$artistOne['artistname'].'">'.$artistOne['artistname'].' ('.$artistOne['years'].')</a>';
	echo '</h3>';
	echo '<img src="public/images/'.$artistOne['image'].'">';
	echo '<p>'.$artistOne['description'].'</p>';
	echo '<p style="text-align:right;"><a href="art?title='.$artistOne['artistname'].'" role="button"> Известная картина &raquo;</a></p>';
	echo '</article>';
	echo '<div style="clear:both;"></div>';
}
?>
<?php
$content = ob_get_clean();
include 'view/templates/layout.php';