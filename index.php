<?php // spoofing headers with cURL

$url = 'https://search.naver.com/search.naver?ie=UTF-8&query=%EB%82%B4%EC%95%84%EC%9D%B4%ED%94%BC&sm=chr_hty';
$ip  = '1.1.1.1'; // trying to spoof ip..

$header[0]  = "Accept: text/xml,application/xml,application/xhtml+xml,"; 
$header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";

$header[] = "Cache-Control: max-age=0"; 
$header[] = "Connection: keep-alive"; 
$header[] = "Keep-Alive: 300"; 
$header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7"; 
$header[] = "Accept-Language: en-us,en;q=0.5"; 
$header[] = "Pragma: "; // browsers = blank
$header[] = "X_FORWARDED_FOR: " . $ip;
$header[] = "REMOTE_ADDR: " . $ip;
$header[] = "Host: example.com";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_USERAGENT, 'Googlebot/2.1 (+http://www.google.com/bot.html)'); 
curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
curl_setopt($curl, CURLOPT_REFERER, 'http://www.google.com'); 
curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate'); 
curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_TIMEOUT, 10); 
curl_setopt($curl, CURLOPT_VERBOSE, 1); 
  
/* alt testing..

$curl = curl_init();
curl_setopt_array(
	$curl, array(
		CURLOPT_URL => $url,
		// CURLOPT_TIMEOUT => 15,
		// CURLOPT_HEADER => true,
		// CURLOPT_NOBODY => true,
		// CURLOPT_VERBOSE => true,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_REFERER => $url,
		CURLOPT_HTTPHEADER, array('REMOTE_ADDR: '.$ip, 'X_FORWARDED_FOR: '.$ip, 'Host: subdomain.hostname.com'),
		CURLOPT_USERAGENT, 'Mozilla Batman 3.0',
		CURLOPT_INTERFACE, $ip,
	)
);

*/

$response = curl_exec($curl);

if ($response === false) {
	
	die('Error '. curl_errno($curl) .': '. curl_error($curl));
	
} else {
	
	echo '<div>';
	print_r($response);	
	echo '</div>';
	echo '<br><br>';
	echo '<div>' . urldecode($url) . '</div>';
	
}

curl_close($curl);
exit;
?>
