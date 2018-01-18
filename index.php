<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];


$message = "Описание бота";
		file_get_contents("https://api.telegram.org/bot533453416:AAGBIiJdD39SoJYwV2_dasSFGCOHyNg5TtM/sendMessage?chat_id=".$id."&text=".$message.KeyboardMenu());
	function KeyboardMenu(){
	$buttons = [['hi'],['hihi']];
	$keyboard = json_encode($keyboard = ['keyboard' => $buttons,       //кнопки 
										  'resize_keyboard' => true,   //размер кнопок норм, если true
										  'one_time_keyboard' => true, //убирается сама, если true
										  'selective' => true]);
										  
	$reply_markup = '&reply_markup='.$keyboard.'';
	return $reply_markup; 
}

?>