<?php

function Articles_all(){

		$sel='select * from blod_tabel';
		$art=mysql_query($sel);
		$art=mysql_fetch_array($art, MYSQL_ASSOC);

		return $art;

}

function Articles_get($id){

	return array("id" => 3, "title" => "Садик", "date" => "26.08.1987", "content" => "SMS от жены: «Милый, короче. В саду надо быть 8.10-8.15, Значит — Машу надо будить в 7.30. Одеть колготки, джинсы, футболку из второго ящика, кофточку фиолетовую (ящик второй снизу). Взять с собой платье розовое, висит в шкафу, носочки белые, сандалики, садике переодеть. Попробуй сделать хвостики, резинки в комоде в коробке из-под обуви. Проверь и приготовь все сейчас, если что, звони спрашивай.

Ответ от мужа: Я не поведу её в садик)))");
}

function Articles_new($title,$date,$content){
	
}

function Articles_delete($id,$title,$date,$content){
	
}


  ?>