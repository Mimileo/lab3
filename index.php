<?php
  function elapsedTime(){
global $start;
     echo "<hr>";
     $elapsedSecs = microtime(true) - $start;
     echo "This match elapsed time: " . $elapsedSecs . " secs <br /><br/>";

     echo "Matches played:"  . $_SESSION['matchCount'] . "<br />";

     $_SESSION['totalElapsedTime'] += $elapsedSecs;
     
     echo "Total elapsed time in all matches: " .  $_SESSION['totalElapsedTime'] . "<br /><br />";
     
     echo "Average time: " . ( $_SESSION['totalElapsedTime']  / $_SESSION['matchCount']);
     
     $_SESSION['matchCount']++;
} //elapsedTime
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Cards </title>
        <meta charset ="utf-8"/>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <h1>
        Computer Card Game
    </h1>
    <body>
        <h1>Silver Jack</h1>
        <table>
        <tr>
            <th>Player</th>
        <th>Cards</th></tr>
        <tr>
            <td>
        <div class="player" id="player1">test1</div>
        </td>
        
        <td> card goes here</td>
        </tr>
        <tr>
            <td>
        <div class="player" id="player2">test2</div>
        </td>
        <td> card goes here</td>
        </tr>
        
        <tr>
            <td>
        <div class="player" id="player3">test3</div>
        </td>
        
        <td> card goes here</td>
        </tr>
        <tr>
            <td>
        <div class="player" id="player4">test4</div>
        </td>
        
        <td> card goes here</td>
        </tr>
        </table>
        <?php
        include 'functions.php';
        playerToll();
        elapsedTime();
        ?>
        
          <?php elapsedTime() ?>
        
        
    </body>
</html>