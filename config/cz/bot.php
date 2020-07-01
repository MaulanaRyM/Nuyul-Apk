<?php
system('clear');




include('config.php');
$info = $datinfo;

while(true){
  $ch = curl_init();
  
  $a="\031[1;35m";
  $b="\033[1;35m";
  
 

  curl_setopt($ch, CURLOPT_URL, "https://gateway.cashzine.net/app-http/api");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"$info");
  curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
  curl_setopt($ch, CURLOPT_PORT,"443");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 1000); 
  curl_setopt($ch, CURLOPT_ENCODING, '');
  $headers = array();
  
 
 

$headers[] = 'Content-Type:application/json';
$headers[] = 'content-pwd: 1';
$headers[] = 'Host:gateway.cashzine.net';
$headers[] = 'Connection: Keep-Alive';
$headers[] = 'User-Agent:Android/samsung/Android/8.0.0/guaguazhuan/3.56/cashzineOnline/842475600340659/192.168.1.139/com.sky.sea.cashzine/4C:66:41:9E:FC:BD/0/C8:38:70:86:A3:47///WIFI/0C2BF306536B4465D7F7A23C08A7090C69FEEE1A/86e49680af93a606/0ce160de502ba2d056/7aea39a0782f068b82ee678150a07733';
$headers[] = 'Accept-Encoding: gzip';
  
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
  $result = curl_exec($ch);
  $msg = json_decode($result,true)['msg'];
  
  
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
curl_close($ch);  


for ($time=30;$time>-1;$time--)
{
  
  if ($msg2 == -1)
  {
     
       echo "\r                                         \r";
     
	   
	 
       echo "\033[92m||\033[1;31m You reached limit earned today \033[1;37m come back tomorrow\n";
       echo "Enjoy Channel Earning Premium";
	   exit;
  }
  else
  {
	 
	  echo "\r                                         \r";
      echo "\r\033[1;32mWait [".$time." Seconds\033[0;37m] & [ ==> +\033[1;33m50 GOLD\033[1;33m] \r";
	  
	  
  }
 
  if ($time == 34 or $time == 29 or $time == 24 or $time == 19 or $time == 14 or $time == 9 or $time == 4){echo ".";}
  if ($time == 33 or $time == 28 or $time == 23 or $time == 18 or $time == 13 or $time == 8 or $time == 3){echo "**";}
  if ($time == 32 or $time == 27 or $time == 22 or $time == 17 or $time == 12 or $time == 7 or $time == 2){echo "...";}
  if ($time == 31 or $time == 26 or $time == 21 or $time == 16 or $time == 11 or $time == 6 or $time == 1){echo "****";}
  if ($time == 30 or $time == 25 or $time == 20 or $time == 15 or $time == 10 or $time == 5 or $time == 0){echo "....\r";}
  sleep(1);
  flush();
}
echo "\n";

}
