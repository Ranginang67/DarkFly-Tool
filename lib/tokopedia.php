<?php
include 'func.php';

/*
    https://github.com/nee48/BomTelpSmsTokped
    Made by Handika Pratama
*/

$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 100x/Jam)

echo "Nomor Target : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2; //Type 2 untuk telpon, Type 1 untuk sms
//$init->no = "0895371761108"; //Nomer Hp tujuan

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
