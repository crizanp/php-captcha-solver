<?php

session_start(); //to store the code that's generated randomly as words 
function getRandomWord($len =8) {
    $rand_word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($rand_word);
    return substr(implode($rand_word), 0, $len);
}

$random_word= getRandomWord();

$_SESSION['CODE']=$random_word; //will not be case sensitive if you want to make it more strict just include $_SESSION['CODE']=$random_word;

$dimension=imagecreatetruecolor(95, 30); //box width and height
$bgColor=imagecolorallocate($dimension,22,29,10);
imagefill($dimension,0,0,$bgColor);
$textColor=imagecolorallocate($dimension,150,200,0);
imagestring($dimension,50,10,6,$random_word,$textColor); //set where you wanna place text
header('Content-Type:image/jpeg'); //for jpeg type
imagejpeg($dimension); 
?>
<!-- ** Created by Crizan 
    https://github.com/crizanpokhrel ** -->