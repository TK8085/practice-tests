<?php

function funFacts(){
    $stuff = [
        "Human"=> "person",
         "animal"=> "dogo",
         "plant"=> "tree"
    ];

foreach ($stuff as $facts => $element){
    echo ("$facts is $element <br>");
}
return ("there are " . count($stuff). "random facts in this array");
}



function interestPaid($rate, $principal, $term){

    
    $totalInterest = (($principal * $rate * $term) / 100);
    $strPaid = "For a loan amount of $$principal at a rate of $rate% for a term of $term years the total interest would be: $$totalInterest";


    return $strPaid;
}
?>