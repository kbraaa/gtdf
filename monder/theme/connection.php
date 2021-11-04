<?php 

include_once 'Database.php';

$db = new Database ('localhost','monder','root','');



function don($sayi)
{
	$ret =  array();
	for ($i=1; $i < $sayi+1; $i++) { 
		$ret[] =$i;
	}

	return $ret;
}




?>