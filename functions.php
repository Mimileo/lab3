
<?php

    $deck = array();
    $suits = array("clubs","spades","hearts","diamonds");

for ($i = 0; $i < 4; $i++) {
    for ($j = 1; $j <= 13; $j++) {
    
        $deck[] = $suits[$i] . "_" . $j;
    }
    
}

foreach ($deck as $card) {
    echo $card . "<br />";
}

foreach ($deck as $card) {
    $stringParts = explode("_", $card);

$firstPart  = $stringParts[0]; 
$secondPart = $stringParts[1]; 
echo "<img src='../lab3/cards/$firstPart/$secondPart.png' alt='$firstPart'/>";
}

        
?>
        