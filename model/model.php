<?php 
/*
связать файлы массива книг booksArray.php
*/
class Model {
	//подготовка вывода всего списка
	public function getArtistsList(){
		include_once 'model/ArtistsArray.php';
		return $Artists;
	}
//-----------------------------------------
	//вывод одной записи
	public function getArt($title) {
		$allArtists=Model::getArtistsList();
		$i=0;
		$test=array(false);
		foreach($allArtists as $artistOne) {
			if($artistOne['artistname']==$title){
				$test=array(true,$allArtists[$i]);
				return $test;
			}
				$i++;
		}
		return $test;
	}
}//class