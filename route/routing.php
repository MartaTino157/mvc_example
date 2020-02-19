<?php 
/*
проверка URL адреса и перенаправление в соответствующую функцию
контроллера: start_site, news, contact, error
*/
$host=explode('?',$_SERVER['REQUEST_URI'])[0];
// подсчитаем символы /, т.е. сколько вложений от корня
$num = substr_count($host, '/');

$way = explode('/',$host)[$num];
//var_dump($way.'<br>');
//var_dump($host.'<br>');
//var_dump($num);
//echo $num.'<br>';
//echo $way.'<br>';


if($way=='' || $way=='index.php'){
	$response=Controller::StartSite();
} 
elseif($way=='artists'){
	$response=Controller::ArtistsList();
}
elseif($way=='art') {
	if (isset($_GET['title'])) {
		$title=$_GET['title'];
	}
	$response=Controller::ArtOne($title);
}
else{
	//функция в контроллере - загрузка файла ошибок
	$response=Controller::error404();
}