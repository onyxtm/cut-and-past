<?php 

$cut = $_GET["cut"];
$past = $_GET["past"];
$text = $_GET["text"];

$newtext = strreplace($cut,$past,$text);

echo ($newtext);
echo ("<br />");
echo ("http://api.bridge-ads.ir");
echo ("<br />");
echo ("http://githib.com/onyxtm/cut-and-past");
