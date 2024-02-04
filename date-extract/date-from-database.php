<?php
include("connect.php");
//this is the date extracted from the database adnd the day date evaluated
$sql = "SELECT `date`
        FROM `try`";

$respo = mysqli_query($conn, $sql);

if($respo){
    $num = mysqli_num_rows($respo);

    if($num>0 && $num<2){
        $row = mysqli_fetch_assoc($respo);

        $date = $row["date"];

        echo $date;
    }else{
        while($row = mysqli_fetch_assoc($respo)){
            $date = $row["date"];
            
            // echo $date;
            $inputValue = $date;

            // Split the value after the 15th character
            $part1 = substr($inputValue, 0, 10);
            $part2 = substr($inputValue, 10);

            // Print the separate parts
            echo "Part 1: $part1<br>";
            
                    
        
        }

        // echo count($dateArray);
    }
}