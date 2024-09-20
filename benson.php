<?php

// Define captured information
$name = "AKANDINDA BENSON";
$dob = "1st May,2000";
$address = "MBARARA, PLOT 123, MBAGUTA STREET";

// Function to parse date of birth
function parseDob($dob) {
    $parts = explode(" ", $dob);
    $day = intval($parts[0]);
    $month = intval(explode(",")[1]);
    $year = intval(explode(",", 2)[1]);
    
    return mktime(0, 0, 0, $month, $day, $year);
}

// Calculate age
$dobTimestamp = parseDob($dob);
$currentDate = strtotime("today");
$age = floor(($currentDate - $dobTimestamp) / (365 * 24 * 60 * 60));

// Format welcome message
$message = "
You are welcome home, Mr. Benson! 
Settle down and relax!

Today is your birthday: " . date("j/m/Y", $dobTimestamp);

// Print the formatted welcome message
echo $message;
?>



