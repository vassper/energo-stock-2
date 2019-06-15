<?php

if(isset($_POST['name']) && !empty($_POST['name']) &&
	isset($_POST['order']) && !empty($_POST['order']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
   isset($_POST['tel']) && !empty($_POST['tel']))
{
	

$headers = "From: energostok@gmail.com\r\n"; 
	
	$body = "Заказ с сайта\n
------------------------------------------\n
\n
Заказ: ".$_POST['order']."\n
Имя: ".$_POST['name']."\n
Телефон: ".$_POST['tel']."\n
E-Mail: ".$_POST['email']."\n
\n";
	
	mail("energostok@gmail.com", "Заказ с сайта", $body, $headers);
}

?>