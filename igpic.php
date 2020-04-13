<?php
$url=$_POST['url'];
if(strpos($url,"/?utm_source=ig_web_copy_link")!== true){
$fixed=str_replace("/?utm_source=ig_web_copy_link","",$url);
}
$api=file_get_contents($fixed.'/?__a=1');
preg_match('/"display_url":"([^"]+)"/msu',$api,$matcher);
print_r($matcher[1]);
//echo $fix;
//echo $code;
?>