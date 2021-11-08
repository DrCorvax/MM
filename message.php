<?php

 $from=$_POST["from"];
 $email=$_POST["email"];
 $subject='[Message from www.myamaria.com] '.$_POST["subject"];
 $message=$_POST["message"];
 $header='From: '.$from.' <'.$email.'>\r\n'
        .'Reply-To: '.$from.' <'.$email.'>\r\n'
        .'Date: '.date("Y-m-d (H:i:s)", time()).'\r\n';

 mail('mya@myamaria.com', $subject, $message, $header);

 header("HTTP/1.1 301 Moved Permanently");
 $dir=dirname( $_SERVER['PHP_SELF']);
 if ($dir=="/") $dir="";
 header("Location: http://".$_SERVER['HTTP_HOST'].$dir."/"."contact.html");
 exit ();

?>