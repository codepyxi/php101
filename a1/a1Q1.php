<?php
$i = 1;

while ($i <= 10){
    $randNum = rand(0, 999);
    if($randNum % 2 == 0){
        echo '<span style="color:#00FF00">' . $randNum . '</span></br>';
    }
    else {
        echo '<span style="color:#FF0000">' . $randNum . '</span></br>';
    }
    $i++;
}
?>