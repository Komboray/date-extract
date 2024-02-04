<?php

// Input date
$inputDate = '2024-02-29';

// Create a DateTime object
$dateObject = new DateTime($inputDate);

// Extract the day
$day = $dateObject->format('d');

// Print the result
echo "Day extracted from the date {$inputDate}: {$day}";
?>
