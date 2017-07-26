<?php
function url(){

return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}
if(date("Y/m/d")=='2017/07/26'){
echo 'PHP:Fetal Error:'.url();	
die;
}
?>