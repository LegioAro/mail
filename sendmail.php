<?php
$text = $_POST['text'];

$text = htmlspecialchars($text);

$text = urldecode($text);

$text = trim($text);

if(mail("legionaro1020@gmail.com",
"Test",
"It is text? : ".$text,
"From: legionaro2@gmail.com \r\n")

){
    echo ('ok');
} 
else {
    echo('no');
}

?>