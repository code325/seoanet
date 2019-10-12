<?php

$ip = '127.0.0.1';
$port = '9051';
$auth = 'PASSWORD';
$command = 'signal NEWNYM';
$fp = fsockopen($ip,$port,$error_number,$err_string,10);
if(!$fp) { echo "ERROR: $error_number : $err_string";
    return false;
          } else {
                     fwrite($fp,"AUTHENTICATE \"".$auth."\"\n");
                     $received = fread($fp,512);
                     fwrite($fp,$command."\n");
                     $received = fread($fp,512);
                 }
 fclose($fp);
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "http://whatismyip.org"); //ipimg.php
 curl_setopt($ch, CURLOPT_PROXY, "127.0.0.1:9050");
 curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_VERBOSE, 0);
 $response = curl_exec($ch);
 curl_close($ch);
 echo $response;
?>
