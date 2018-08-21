<?php
require('textlocal.class.php');

$textlocal = new Textlocal(false,false,'8HSpJT5RoPg-ljqFepX5oxHwuFcJXae4K7ortIw8mw');

$numbers = array(8498891703);
$sender = 'TXTLCL';
$otp=mt_rand(10000,99999);
$message = "hello your otp is:".$otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
	setcookie('otp',$otp);
	echo 'otp successsfully sent';
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}

?>