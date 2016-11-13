<?php

function Articles_all(){

		$sel='select * from blod_tabel';
		$a=mysql_query($sel);
		$art=array();

			while ($row=mysql_fetch_assoc($a))
				{
					$art[]=$row;
				}
			return $art;

}

function Articles_get($id){

	$sel_id='select * from blod_tabel WHERE id="'.$id.'"';
	$a_id=mysql_query($sel_id);
	$cont=mysql_fetch_assoc($a_id);

	return $cont;

}

function Articles_new($title,$date,$content){
	
}

function Articles_delete($id,$title,$date,$content){
	
}


  ?>