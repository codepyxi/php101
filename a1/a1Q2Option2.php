<?php
$sourceText = 'This is your input string';
$length = strlen($sourceText);
$versa = "";

for ($i = $length - 1; $i >= 0; $i--){
    $versa = $versa . $sourceText[$i];
}

echo $versa;
?>