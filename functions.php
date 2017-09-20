
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



function displayPicName($p, $i){
   // echo "<img src='img/$p[$i][1].png' />";
    echo $p[$i][2];
}

function playerToll(){
    global $playerscore;
     $pics = array("pic1","pic2","pic3", "pic4");
     $names = array("name1", "name2", "name3", "name4");
     $winner = array();

     $ar = array(0,1,2,3);
     shuffle($ar);
    for($i = 1;$i<=4;$i++) {
                $k=$ar[$i-1];  
                echo "<img src='img/$pics[$k].png' width='70'>" . $names[$k];
                ${"player" . $i } = player();
                echo " ${'player' . $i } ";
                $playerScore[] = ${'player' . $i};
                print_r($playerScore);
                if(${'player' . $i } == 42) {
                    echo "<h3>Player ". $i . " Wins!</h3>";
                }
                echo "<br>";
                
        }
        echo "  ";
        print_r($player1);
        displayWinner($playerScore);
}

function displayWinner($playerScore) {
   // if($playerScore ==)
   $winner=array();
    $max = 0;
    $index = 0;
    $tie = 0;
    for($i=0;$i<4;$i++) {
        if($playerScore[$i] > $max && $playerScore[$i] <= 42  ) {
            
             $max = $playerScore[$i];
             $index = $i+1;
            //echo $max;
           
        }
       
    }
  
    for($j=0;$j<4;$j++) {
          if($playerScore[$j] == $max){
              array_push($winner, $j+1);
              print_r($winner);
          }
        if($j == $index-1)
        continue;
        else { //&& $playerScore[$index-1] != $playerScore[$j]
             if($playerScore[$j] == $max ) {
                 $tie+=1;
             }
        }
    }
    
    $points = array_sum($playerScore) - $playerScore[$index-1];
    if($tie > 0 || $index == 0) {
        echo "Tie!<br>";
        for($i=0;$i<count($winner);$i++){
            echo "Player ". $winner[$i] . " wins " . $points . " points!<br>";
        }
    }
    else {
        echo "Player ". $index . " wins " . $points . " points!";
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
        