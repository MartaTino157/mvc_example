<?php
class Controller {
	//функция запускает проект 
	public function StartSite() {
		include 'view/main.php';
	}

//-------------------list
	public function ArtistsList(){
		//получить массив books для вывода данных
		//$bookList - хранит массив books
		$ArtistsList = Model::getArtistsList();
		//делвем вывод на страницу списка
		include 'view/ArtistsList.php';
	}
	//-------------------first
	public function artOne($title){
		//$title - название книги в адресной строке
		$test = Model::getArt($title);
		//делаем вывод на страницу одной книги
		if($test[0]==true){
			$artist=$test[1];
			include 'view/artOne.php';
		}else{
			include 'view/error404.php';
		}
	}
	//--------------------error
	public function error404(){
		include 'view/error404.php';
	}
}