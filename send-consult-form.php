<?php

if(isset($_POST['name']) && !empty($_POST['name']) &&
   isset($_POST['tel']) && !empty($_POST['tel']))
{
	

$headers = "From: energostok@gmail.com\r\n"; 
	
	$body = "Заказ консультации\n
------------------------------------------\n
\n
Имя: ".$_POST['name']."\n
Телефон: ".$_POST['tel']."\n
\n";
	
	mail("energostok@gmail.com", "Заказ консультации", $body, $headers);
}

?>