<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];

if(stripos($text,"/start") !== false){
	$key = substr($text, 7);
	file_get_contents("http://ggsite.ru/bot/toptlgrm/index.php?pass=76898428&id=".$id."&key=".$key); 
}
else{
	$message = "Описание бота.";
	file_get_contents("https://api.telegram.org/bot533453416:AAGBIiJdD39SoJYwV2_dasSFGCOHyNg5TtM/sendMessage?chat_id=".$id."&text=".$message.KeyboardMenu1()."");
	
	file_get_contents("http://ggsite.ru/bot/toptlgrm/index.php?pass=76898428&id=".$id."&text=".urlencode($text));
}



function KeyboardMenu1(){
	$buttons = ['Получить доступ к сигналам'];
	$keyboard = json_encode($keyboard = ['keyboard' => $buttons,       //кнопки 
										  'resize_keyboard' => true,   //размер кнопок норм, если true
										  'one_time_keyboard' => true, //убирается сама, если true
										  'selective' => false]);
										  
	$reply_markup = '&reply_markup='.$keyboard.'';
	return $reply_markup; 
}

?>