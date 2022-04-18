<?php
if(!empty($_POST))
{
 
$name = 'Name: '.$_POST[name]."\n";
$email = 'E-mail: '.$_POST[mobile]."\n";
$guest = "Guest's Name: ".$_POST[query]."\n";
 
$ip = getRealIpAddr();
$message = "$name$mobile$query\n\nFrom page: ".urldecode($_SERVER['HTTP_REFERER'])."\nIP: $ip\nBrowser: ".$_SERVER['HTTP_USER_AGENT']."\n";
$error = array();

 
if(empty($error))
{ 
$mail =
mail("hemantsahu36@gmail.com", "$title", $message,
 "From: hemantsahu36@gmail.com\r\n"
."Reply-To: hemantsahu36@gmail.com\r\n"
."Content-type:text/plain;charset=utf-8\r\n"
."X-Mailer: PHP/" . phpversion());

}
}
 
function getRealIpAddr() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip=$_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
                $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
}
 
 ?>
