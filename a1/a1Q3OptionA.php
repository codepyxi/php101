<?php
// $check is a varibable that keeps track if value b entered the IF LOOP
$check = true;

// The first FOR LOOP iterates from 1 to 100
for ($a = 1; $a <= 100; $a ++){
//  Any prime number is divisible by one and itself.
//  The second FOR LOOP will check the divisibility of that number by itself and all the numbers until 2.
    for ($b = $a - 1; $b >= 2; $b--){
        $check = true;
        if ($a % $b == 0){
            echo "Value A: " . $a . " is not a prime number</br>";
            $check = false;
            break;
        }
        else{
            continue;
        }
    }
    if ($check){
        echo "Value A: " . $a . " is a prime number</br>";
    }
}

?>