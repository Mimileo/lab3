
<?php

    $deck = array();
    $suits = array("clubs","spades","hearts","diamonds");

for ($i = 0; $i < 4; $i++) {
    for ($j = 1; $j <= 13; $j++) {
    
        $deck[] = $suits[$i] . "_" . $j;
    }
    
}
function drawCard(){
    global $deck;
    $chosen;
    shuffle($deck);
    $chosen = array_pop($deck);
    return $chosen;
}

function play($chosen){
    $stringParts = explode("_", $chosen);

    $firstPart  = $stringParts[0]; 
    $secondPart = $stringParts[1];
    echo "<img src='../lab3/cards/$firstPart/$secondPart.png' alt='$firstPart'>";
    return $stringParts[1];
}

function player(){
    $total=0;
    while($total < 42 ){
        $total += play(drawCard()); //still draws past 42 :c
    }
    return $total;
}
function playerToll(){
   for($i =1;$i<=4;$i++){
            ${"player" . $i } = player();
            echo "${'player' . $i }";
            echo "<br>";
        }
}
/*foreach ($deck as $card) {
$stringParts = explode("_", $card);

$firstPart  = $stringParts[0]; 
$secondPart = $stringParts[1]; 
}*/





        
?>
        