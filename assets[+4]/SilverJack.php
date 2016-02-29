<?php
    //indexed
    $deck = ["Club1", "Club2", "Club3", "Club4", "Club5", "Club6", "Club7", "Club8", "Club9", "Club10", "Club11", "Club12", "Club13", 
            "Heart1", "Heart2", "Heart3", "Heart4", "Heart5", "Heart6", "Heart7", "Heart8", "Heart9", "Heart10", "Heart11", "Heart12", "Heart13",
            "Diamond1", "Diamond2", "Diamond3", "Diamond4", "Diamond5", "Diamond6", "Diamond7", "Diamond8", "Diamond9", "Diamond10", "Diamond11", "Diamond12", "Diamond13", 
            "Spade1", "Spade2", "Spade3", "Spade4", "Spade5", "Spade6", "Spade7", "Spade8", "Spade9", "Spade10", "Spade11", "Spade12", "Spade13"];
            
    shuffle($deck);
    
    
    $player_Image =["<img src=\"assets/players/Punisher.jpg\" height=\"96\" width=\"72\">", 
                  "<img src=\"assets/players/DareDevilLogo.jpg\" height=\"96\" width=\"72\">",
                  "<img src=\"assets/players/Mystery.png\" height=\"96\" width=\"72\">",
                  "<img src=\"assets/players/suspicious_person.jpg\" height=\"96\" width=\"72\">"];
                  
    $player_Name = ["Jason", "Lorenzo", "Random", "Stranger"];
    
    $boolean = false;
    
    $p1_score = 0;
    
    $p2_score = 0;
    
    $p3_score = 0;
    
    $p4_score = 0;
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
    <link rel="stylesheet" type="css" href="css/main.css">
    <title>Jason Lumicao & Lorenzo Hernandez SilverJack</title>
</head>

<body style="background-color:lightgrey;">

<center><table class="gameboard"><td>    
<?php
//var_dump($deck);
for($p=0; $p<=4; $p++){
    if($p == 1){
        echo "<table>";
        echo "<center><h1 class=\"gameboard\">Silver Jack</h1></center>";    
          $player_Hand = rand(4,6);
          echo "<tr><td class=\"streamline\">";
          echo $player_Image[0];
          echo "<br>";
          echo "<center>".$player_Name[0]."</center></td>";
        //  echo "<td>".$player_Hand."</td>";
          if($player_Hand == 4){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p1_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p1_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p1_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p1_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p1_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p1_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p1_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p1_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p1_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p1_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p1_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p1_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p1_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p1_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p1_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p1_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p1_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p1_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p1_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p1_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p1_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p1_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p1_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p1_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p1_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p1_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p1_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p1_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p1_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p1_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p1_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p1_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p1_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p1_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p1_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p1_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p1_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p1_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p1_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p1_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p1_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p1_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p1_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p1_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p1_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p1_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p1_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p1_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p1_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 5){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p1_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p1_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p1_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p1_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p1_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p1_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p1_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p1_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p1_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p1_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p1_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p1_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p1_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p1_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p1_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p1_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p1_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p1_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p1_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p1_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p1_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p1_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p1_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p1_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p1_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p1_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p1_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p1_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p1_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p1_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p1_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p1_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p1_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p1_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p1_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p1_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p1_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p1_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p1_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p1_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p1_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p1_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p1_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p1_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p1_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p1_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p1_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p1_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p1_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 6){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p1_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p1_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p1_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p1_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p1_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p1_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p1_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p1_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p1_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p1_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p1_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p1_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p1_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p1_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p1_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p1_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p1_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p1_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p1_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p1_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p1_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p1_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p1_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p1_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p1_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p1_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p1_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p1_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p1_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p1_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p1_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p1_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p1_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p1_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p1_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p1_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p1_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p1_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p1_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p1_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p1_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p1_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p1_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p1_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p1_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p1_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p1_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p1_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p1_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p1_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          echo "<td>$p1_score</td>";
          if($p1_score == 42){
              echo "<td class=\"bigwinner\"><h3>".$player_Name[0]." WINS!!!</h3></td>";
              $boolean = true;
          }
          if($p1_score > 42){
              $p1_score = 0;
          }
         echo "</td></tr>";
        echo "</table>";
    }
    if($p == 2){
        echo "<table>";
          $player_Hand = rand(4,6);
          echo "<tr><td class=\"streamline\">";
          echo $player_Image[1];
          echo "<br>";
          echo "<center>".$player_Name[1]."</center></td>";
         // echo "<td>".$player_Hand."</td>";
          if($player_Hand == 4){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p2_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p2_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p2_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p2_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p2_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p2_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p2_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p2_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p2_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p2_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p2_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p2_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p2_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p2_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p2_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p2_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p2_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p2_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p2_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p2_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p2_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p2_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p2_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p2_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p2_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p2_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p2_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p2_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p2_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p2_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p2_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p2_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p2_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p2_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p2_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p2_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p2_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p2_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p2_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p2_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p2_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p2_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p2_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p2_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p2_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p2_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p2_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p2_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p2_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 5){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p2_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p2_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p2_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p2_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p2_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p2_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p2_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p2_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p2_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p2_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p2_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p2_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p2_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p2_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p2_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p2_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p2_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p2_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p2_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p2_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p2_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p2_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p2_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p2_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p2_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p2_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p2_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p2_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p2_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p2_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p2_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p2_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p2_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p2_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p2_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p2_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p2_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p2_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p2_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p2_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p2_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p2_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p2_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p2_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p2_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p2_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p2_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p2_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p2_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 6){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p2_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p2_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p2_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p2_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p2_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p2_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p2_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p2_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p2_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p2_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p2_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p2_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p2_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p2_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p2_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p2_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p2_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p2_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p2_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p2_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p2_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p2_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p2_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p2_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p2_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p2_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p2_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p2_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p2_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p2_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p2_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p2_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p2_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p2_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p2_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p2_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p2_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p2_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p2_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p2_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p2_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p2_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p2_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p2_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p2_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p2_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p2_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p2_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p2_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p2_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          echo "<td>$p2_score</td>";
          if($p2_score == 42){
              echo "<td class=\"bigwinner\"><h3>".$player_Name[1]." WINS!!!</h3></td>";
              $boolean = true;
          }
          if($p2_score > 42){
              $p2_score = 0;
          }
         echo "</td></tr>";
        echo "</table>";
    }
    if($p == 3){
        echo "<table>";
          $player_Hand = rand(4,6);
          echo "<tr><td class=\"streamline\">";
          echo $player_Image[2];
          echo "<br>";
          echo "<center>".$player_Name[2]."</center></td>";
         // echo "<td>".$player_Hand."</td>";
          if($player_Hand == 4){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p3_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p3_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p3_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p3_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p3_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p3_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p3_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p3_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p3_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p3_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p3_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p3_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p3_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p3_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p3_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p3_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p3_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p3_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p3_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p3_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p3_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p3_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p3_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p3_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p3_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p3_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p3_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p3_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p3_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p3_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p3_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p3_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p3_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p3_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p3_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p3_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p3_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p3_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p3_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p3_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p3_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p3_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p3_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p3_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p3_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p3_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p3_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p3_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p3_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 5){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p3_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p3_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p3_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p3_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p3_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p3_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p3_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p3_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p3_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p3_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p3_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p3_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p3_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p3_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p3_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p3_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p3_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p3_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p3_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p3_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p3_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p3_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p3_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p3_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p3_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p3_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p3_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p3_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p3_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p3_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p3_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p3_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p3_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p3_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p3_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p3_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p3_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p3_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p3_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p3_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p3_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p3_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p3_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p3_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p3_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p3_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p3_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p3_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p3_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 6){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p3_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p3_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p3_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p3_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p3_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p3_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p3_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p3_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p3_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p3_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p3_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p3_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p3_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p3_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p3_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p3_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p3_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p3_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p3_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p3_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p3_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p3_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p3_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p3_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p3_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p3_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p3_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p3_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p3_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p3_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p3_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p3_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p3_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p3_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p3_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p3_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p3_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p3_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p3_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p3_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p3_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p3_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p3_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p3_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p3_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p3_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p3_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p3_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p3_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p3_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          echo "<td>$p3_score</td>";
          if($p3_score == 42){
              echo "<td class=\"bigwinner\"><h3>".$player_Name[2]." WINS!!!</h3></td>";
              $boolean = true;
          }
          if($p3_score > 42){
              $p3_score = 0;
          }
         echo "</td></tr>";
        echo "</table>";
    }
    if($p == 4){
        echo "<table>";
          $player_Hand = rand(4,6);
          echo "<tr><td class=\"streamline\">";
          echo $player_Image[3];
          echo "<br>";
          echo "<center>".$player_Name[3]."</center></td>";
          //echo "<td>".$player_Hand."</td>";
          if($player_Hand == 4){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p4_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p4_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p4_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p4_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p4_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p4_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p4_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p4_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p4_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p4_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p4_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p4_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p4_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p4_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p4_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p4_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p4_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p4_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p4_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p4_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p4_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p4_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p4_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p4_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p4_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p4_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p4_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p4_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p4_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p4_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p4_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p4_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p4_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p4_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p4_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p4_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p4_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p4_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p4_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p4_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p4_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p4_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p4_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p4_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p4_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p4_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p4_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p4_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p4_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 5){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p4_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p4_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p4_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p4_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p4_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p4_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p4_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p4_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p4_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p4_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p4_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p4_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p4_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p4_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p4_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p4_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p4_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p4_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p4_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p4_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p4_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p4_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p4_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p4_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p4_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p4_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p4_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p4_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p4_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p4_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p4_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p4_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p4_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p4_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p4_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p4_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p4_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p4_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p4_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p4_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p4_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p4_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p4_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p4_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p4_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p4_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p4_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p4_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p4_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          if($player_Hand == 6){
            for($i=0; $i<$player_Hand; $i++){
              for($j=1; $j<14; $j++){
                 if($deck[$i] == "Club".$j){
                    echo "<td><img src=\"assets/clubs/$j.png\"></td>";
                    if("Club".$j == "Club1"){
                        $p4_score += 1;
                    }
                    if("Club".$j == "Club2"){
                        $p4_score += 2;
                    }
                    if("Club".$j == "Club3"){
                        $p4_score += 3;
                    }
                    if("Club".$j == "Club4"){
                        $p4_score += 4;
                    }
                    if("Club".$j == "Club5"){
                        $p4_score += 5;
                    }
                    if("Club".$j == "Club6"){
                        $p4_score += 6;
                    }
                    if("Club".$j == "Club7"){
                        $p4_score += 7;
                    }
                    if("Club".$j == "Club8"){
                        $p4_score += 8;
                    }
                    if("Club".$j == "Club9"){
                        $p4_score += 9;
                    }
                    if("Club".$j == "Club10"){
                        $p4_score += 10;
                    }
                    if("Club".$j == "Club11"){
                        $p4_score += 11;
                    }
                    if("Club".$j == "Club12"){
                        $p4_score += 12;
                    }
                    if("Club".$j == "Club13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Heart".$j){
                    echo "<td><img src=\"assets/hearts/$j.png\"></td>";
                    if("Heart".$j == "Heart1"){
                        $p4_score += 1;
                    }
                    if("Heart".$j == "Heart2"){
                        $p4_score += 2;
                    }
                    if("Heart".$j == "Heart3"){
                        $p4_score += 3;
                    }
                    if("Heart".$j == "Heart4"){
                        $p4_score += 4;
                    }
                    if("Heart".$j == "Heart5"){
                        $p4_score += 5;
                    }
                    if("Heart".$j == "Heart6"){
                        $p4_score += 6;
                    }
                    if("Heart".$j == "Heart7"){
                        $p4_score += 7;
                    }
                    if("Heart".$j == "Heart8"){
                        $p4_score += 8;
                    }
                    if("Heart".$j == "Heart9"){
                        $p4_score += 9;
                    }
                    if("Heart".$j == "Heart10"){
                        $p4_score += 10;
                    }
                    if("Heart".$j == "Heart11"){
                        $p4_score += 11;
                    }
                    if("Heart".$j == "Heart12"){
                        $p4_score += 12;
                    }
                    if("Heart".$j == "Heart13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Diamond".$j){
                    echo "<td><img src=\"assets/diamonds/$j.png\"></td>";
                    if("Diamond".$j == "Diamond1"){
                        $p4_score += 1;
                    }
                    if("Diamond".$j == "Diamond2"){
                        $p4_score += 2;
                    }
                    if("Diamond".$j == "Diamond3"){
                        $p4_score += 3;
                    }
                    if("Diamond".$j == "Diamond4"){
                        $p4_score += 4;
                    }
                    if("Diamond".$j == "Diamond5"){
                        $p4_score += 5;
                    }
                    if("Diamond".$j == "Diamond6"){
                        $p4_score += 6;
                    }
                    if("Diamond".$j == "Diamond7"){
                        $p4_score += 7;
                    }
                    if("Diamond".$j == "Diamond8"){
                        $p4_score += 8;
                    }
                    if("Diamond".$j == "Diamond9"){
                        $p4_score += 9;
                    }
                    if("Diamond".$j == "Diamond10"){
                        $p4_score += 10;
                    }
                    if("Diamond".$j == "Diamond11"){
                        $p4_score += 11;
                    }
                    if("Diamond".$j == "Diamond12"){
                        $p4_score += 12;
                    }
                    if("Diamond".$j == "Diamond13"){
                        $p4_score += 13;
                    }
                }
                if($deck[$i] == "Spade".$j){
                    echo "<td><img src=\"assets/spades/$j.png\"></td>";
                    if("Spade".$j == "Spade1"){
                        $p4_score += 1;
                    }
                    if("Spade".$j == "Spade2"){
                        $p4_score += 2;
                    }
                    if("Spade".$j == "Spade3"){
                        $p4_score += 3;
                    }
                    if("Spade".$j == "Spade4"){
                        $p4_score += 4;
                    }
                    if("Spade".$j == "Spade5"){
                        $p4_score += 5;
                    }
                    if("Spade".$j == "Spade6"){
                        $p4_score += 6;
                    }
                    if("Spade".$j == "Spade7"){
                        $p4_score += 7;
                    }
                    if("Spade".$j == "Spade8"){
                        $p4_score += 8;
                    }
                    if("Spade".$j == "Spade9"){
                        $p4_score += 9;
                    }
                    if("Spade".$j == "Spade10"){
                        $p4_score += 10;
                    }
                    if("Spade".$j == "Spade11"){
                        $p4_score += 11;
                    }
                    if("Spade".$j == "Spade12"){
                        $p4_score += 12;
                    }
                    if("Spade".$j == "Spade13"){
                        $p4_score += 13;
                    }
                }
              }
              array_shift($deck);
            }
          }
          echo "<td>$p4_score</td>";
          if($p4_score == 42){
              echo "<td class=\"bigwinner\"><h3>".$player_Name[3]." WINS!!!</h3></td>";
              $boolean = true;
          }
          if($p4_score > 42){
              $p4_score = 0;
          }
         echo "</td></tr>";
        echo "</table>";
    }
}
    $score = [$p1_score,$p2_score,$p3_score,$p4_score];
    sort($score);
    
    echo"<center><table><tr>";
    if($boolean == false){
        if(($p1_score == 0)&&($p2_score == 0)&&($p3_score == 0)&&($p4_score == 0)){
            echo "<td class=\"winner\"><h3>NO ONE WINS!!!</h3></td>";  
        }
        else{
             if($p1_score == $score[3]){
                echo "<td class=\"winner\"><h3>".$player_Name[0]." WINS!!!</h3></td>"; 
             }
             if($p2_score == $score[3]){
                echo "<td class=\"winner\"><h3>".$player_Name[1]." WINS!!!</h3></td>"; 
             }
             if($p3_score == $score[3]){
                echo "<td class=\"winner\"><h3>".$player_Name[2]." WINS!!!</h3></td>"; 
             }
             if($p4_score == $score[3]){
               echo "<td class=\"winner\"><h3>".$player_Name[3]." WINS!!!</h3></td>";  
             }
        }
    }
    echo"</tr></table></center>";
?>
</td></table></center>
<center><a href="https://lab1a-mynameisbenzo.c9users.io/Labs/Lab3/SilverJack.php">Play Again?</a></center>
</body>

</html>