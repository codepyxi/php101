<?php

// METHOD: Generate Current Date
function generateCurrentDate(){
    $currentDate = date("Ymd");
    return $currentDate;
}

// METHOD: Display Current Date in HTML
// Source: https://php.net/manual/en/function.date.php
function displayCurrentDate(){
    $displayCurrentDate = date("Y-m-d g:i a");
    return $displayCurrentDate;
}

// METHOD : Generate Ticket Number
function generateTicketNum(){
 $ticketNum = generateCurrentDate() . "-" . rand();
 return $ticketNum;
}

// METHOD : Validate input information fields
// Source: https://www.w3schools.com/php7/php7_form_validation.asp
$a_name = $a_requestTitle = $a_request = "";
$a_ticket = $_POST["ticket"];
$a_severity = $_POST["severity"];
$a_colour = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST ["name"])){
        $a_name = $_POST["name"];
    }

    if (!empty($_POST ["requestTitle"]) && strlen($_POST["requestTitle"]) >= 10) {
        $a_requestTitle = $_POST["requestTitle"];
    }

    if (!empty($_POST ["request"]) && strlen($_POST["request"]) >= 100){
        $a_request = $_POST["request"];
    }
}

switch ($a_severity){
    case 1:
        $a_colour = "red";
        break;
    case 2:
        $a_colour = "green";
        break;
    case 3:
        $a_colour ="yellow";
        break;
    case 4:
        $a_colour = "black";
        break;
}

?>