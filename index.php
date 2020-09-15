<?php
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam impedit quia dolor quis temporibus praesentium veniam magnam, inventore, 
beatae molestiae sint nihil natus saepe id dolore tempore corporis dolorem odit.';

$length = strlen($text);
echo 'Il paragrafo è lungo: ' . $length . ' caratteri'; 

$search = $_GET['badword'];

$safe_txt = str_replace($search, '***', $text);

echo '<br>' . $safe_txt;

?> 