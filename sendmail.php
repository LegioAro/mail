<?php
$text = $_POST['text'];

$text = htmlspecialchars($text);

$text = urldecode($text);

$text = trim($text);

if(mail("legionaro1020@gmail.com",
"Test",
"It is test? : ".$test."\n",
"From: test.gmail.com \r\n")

){
    echo ('ok');
} 
else {
    echo('no');
}

?>