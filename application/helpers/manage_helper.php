<?php

/* Permalink */
function permalink($url){
      $url = trim($url);
      $find = array('<b>', '</b>');
      $url = str_replace ($find, '', $url);
      $url = preg_replace('/<(\/{0,1})img(.*?)(\/{0,1})\>/', 'image', $url);
      $find = array(' ', '&amp;amp;amp;quot;', '&amp;amp;amp;amp;', '&amp;amp;amp;', '\r\n', '\n', '/', '\\', '+', '<', '>');
      $url = str_replace ($find, '-', $url);
      $find = array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ë', 'Ê');
      $url = str_replace ($find, 'e', $url);
      $find = array('í', 'ý', 'ì', 'î', 'ï', 'I', 'Ý', 'Í', 'Ì', 'Î', 'Ï','İ','ı');
      $url = str_replace ($find, 'i', $url);
      $find = array('ó', 'ö', 'Ö', 'ò', 'ô', 'Ó', 'Ò', 'Ô');
      $url = str_replace ($find, 'o', $url);
      $find = array('á', 'ä', 'â', 'à', 'â', 'Ä', 'Â', 'Á', 'À', 'Â');
      $url = str_replace ($find, 'a', $url);
      $find = array('ú', 'ü', 'Ü', 'ù', 'û', 'Ú', 'Ù', 'Û');
      $url = str_replace ($find, 'u', $url);
      $find = array('ç', 'Ç');
      $url = str_replace ($find, 'c', $url);
      $find = array('þ', 'Þ','ş','Ş');
      $url = str_replace ($find, 's', $url);
      $find = array('ð', 'Ð','ğ','Ğ');
      $url = str_replace ($find, 'g', $url);
      $find = array('/[^A-Za-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
      $repl = array('', '-', '');
      $url = preg_replace ($find, $repl, $url);
      $url = str_replace ('--', '-', $url);
      $url = strtolower($url);
      return $url;
}

/* Rastgele Sayı ve Harf Üret */
function rastgeleuret($kackarakter){ 
      $char = "abcdefghijklmnoprstuwvyzqx1234567890"; /// İzin verilen karakterler ? 
      $s = '';
      for ($k=1;$k<=$kackarakter;$k++){ 
            $h=substr($char,mt_rand(0,strlen($char)-1),1); 
            $s.=$h; 
      }
      return $s; 
} 

// İp Adresi
function IP(){
      if(getenv("HTTP_CLIENT_IP")) {$ip = getenv("HTTP_CLIENT_IP");}elseif(getenv("HTTP_X_FORWARDED_FOR")) {$ip = getenv("HTTP_X_FORWARDED_FOR");
      if (strstr($ip, ',')) {$tmp = explode (',', $ip); $ip = trim($tmp[0]);}}else{$ip = getenv("REMOTE_ADDR");}
      return $ip;
}

?>