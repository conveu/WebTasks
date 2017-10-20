<?php

function checkDatabase($file_path)
{
	if(!file_exists($file_path)){
		file_put_contents($file_path, NULL);
			if(!file_exists($file_path)){
				return false;
			}
	}
	return true;
}

function getMessage($file_path)
{
	$file_content = file_get_contents($file_path);

	$message_array = explode(PHP_EOL, $file_content); //типо сплит 

	// echo json_encode($message_array);
	$messages = array();

	foreach ($message_array as $key => $value) {
		$string_data = explode("|", $value);
		$messages[] = array(
			'name' => $string_data[0], 
			'email' => $string_data[1], 
			'message' => $string_data[2], 
			'date' => $string_data[3], 
		);
	}


	return $messages;
}

function storemessage($file_path, $name, $email, $text){
	$message = PHP_EOL.$name."|".$email."|".$text."|".date("Y-m-d H:i:s");
	return file_put_contents($file_path, $message,FILE_APPEND);
}