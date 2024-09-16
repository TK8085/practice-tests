<?php


function funfacts() {
    $data = array(
    "Hello" => "Aloha",
    "Mahalo" => "Thank You",
    "Lua" => "Bathroom"
    
);
    foreach ($data as $word => $element) {
        echo  "$word means $element<br>";
    }
    return "There are " . count($data) . " Hawaiian words in this array";
}




function interestPaid($rate, $principal, $term){

    // Calculate total interest
    $totalInterest = (($principal * $rate * $term) / 100);
    $strPaid = "For a loan amount of $$principal at a rate of $rate% for a term of $time years the total interest would be: $$totalInterest";


    return $strPaid;
}
?>
