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
        <th>Cards<br><br></th></tr>
        <tr>
            <br>
            <br>
            <td>
        <div class="player" id="player1"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
</div>
        </td>
        
        <td> <?php
        include 'functions.php';
        playerToll(0);
        ?>
        </tr>
        <tr>
            <td>
        <div class="player" id="player2"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
</div>
        </td>
        
        </tr>
        
        <tr>
            <td>
        <div class="player" id="player3"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
</div>
        </td>
        
       
        </tr>
        <tr>
            <td>
        <div class="player" id="player4"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
</div>
        </td>
        
        </td>
        </tr>
        </table>
        
        
        
        
        
    </body>
</html>