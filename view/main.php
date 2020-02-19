<?php
ob_start();
?>
<h2>Проект MVC технологии: <b>Художники</b></h2>
<article>
	<p>Известные художники и их картины</p>
</article>

<?php $content = ob_get_clean();?>
<?php include "view/templates/layout.php";