<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];

if(stripos($text,"/start") !== false){
	$key = substr($text, 7);
	file_get_contents("http://ggsite.ru/bot/toptlgrm/index.php?pass=76898428&id=".$id."&key=".$key); 
}
else{
	file_get_contents("http://ggsite.ru/bot/toptlgrm/index.php?pass=76898428&id=".$id."&text=".$text);
}

?>