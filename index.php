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
      
        <div class="player" id="player1"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
        
</div>
    
        
        

        <div class="player" id="player2"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
</div>
      
        
    
        
      
           
        <div class="player" id="player3"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
</div>
      
        
       
       
       
          
        <div class="player" id="player4"> <img src="player1.jpg"  height="175" width="150" alt="Picture of a baby boy">
</div>
        
     <div class="work">
        <center>
        <?php
        include 'functions.php';
        playerToll();
        ?>
        </center>
        </div>
        
        
        
        
    </body>
</html>