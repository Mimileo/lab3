
<?php

    $deck = array();
    $suits = array("clubs","spades","hearts","diamonds");
    
    $player1 = array();
    $player2 = array();
    $player3 = array();
    $player4 = array();

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
    $total = 0;
    while($total <= 35 ) {
        $val = play(drawCard());
        //if($val + $total > 42){
          //  break;
        //}
        $total+= $val; //still draws past 42 :c
    }
    return $total;
}

 $playerScore = array();
function playerToll(){
    global $playerscore;
   
  
   for($i = 1;$i<=4;$i++) {
            ${"player" . $i } = player();
            echo "${'player' . $i }";
            $playerScore[] = ${'player' . $i};
            print_r($playerScore);
            if(${'player' . $i } == 42) {
                echo "<h3>Player ". $i . " Wins!</h3>";
            }
            echo "<br>";
        }
        displayWinner($playerScore);
}

function displayWinner($playerScore) {
    
   
    $max = 0;
    $index = 0;
    $tie = 0;
    for($i=0;$i<4;$i++) {
        if($playerScore[$i] > $max && $playerScore[$i] <= 42  ) {
            $max = $playerScore[$i];
            //echo $max;
            $index = $i+1;
        }
       
    }
    for($j=0;$j<4;$j++) {
        if($j == $index-1)
        continue;
        else { //&& $playerScore[$index-1] != $playerScore[$j]
             if($playerScore[$j] == $max ) {
                 $tie+=1;
             }
        }
    }
    
    if($tie > 0 || $index == 0) {
        echo "Tie!";
    }
    else {
        echo "Player ". $index . " wins";
    }
    /*$min = array_search(min($playerScore), $playerScore);
    $max = array_search(max($playerScore), $playerScore);
    $minKey = min($playerScore);
    
    echo $min;
    echo $playerscore;
    echo $max;*/
}
/*foreach ($deck as $card) {
$stringParts = explode("_", $card);

$firstPart  = $stringParts[0]; 
$secondPart = $stringParts[1]; 
}*/





        
?>
        