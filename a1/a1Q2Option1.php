<?php
$sourceText = 'This is your input string';
$length = strlen($sourceText);
$versa = "";

for ($i = $length - 1; $i >= 0; $i--){
    $versa = $versa . substr($sourceText, $i, 1);
}

echo $versa;
?>