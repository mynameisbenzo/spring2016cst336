<?php 


    $card = ["image" => "", 
            "score" => "",
            "suit" => "",
            "rank" => "" ];
    
    //indexed array
    $deck = ["ClubA","Club1","Club2","Club3","Club4","Club5","Club6","Club7","Club8","Club9","Club10","Club11","Club12","Club13",
             "DiamondA","Diamond1","Diamond2","Diamond3","Diamond4","Diamond5","Diamond6","Diamond7","Diamond8","Diamond9","Diamond10","Diamond11","Diamond12","Diamond13",
             "HeartA","Heart1","Heart2","Heart3","Heart4","Heart5","Heart6","Heart7","Heart8","Heart9","Heart10","Heart11","Heart12","Heart13",
             "SpadeA","Spade1","Spade2","Spade3","Spade4","Spade5","Spade6","Spade7","Spade8","Spade9","Spade10","Spade11","Spade12","Spade13"];
    
    
    
    shuffle($deck);
    
    var_dump($deck);
    
    
    
    /*
    for($i = 0; $i < 52; $i++)
    {
        if($i < 13)
        {
            
        }
        if()
        if()
        if()
    }
    */
    
    //associative array
    $player1 = ["imageName" => "",
                "name" => $_POST["p1"] ];
    $player2 = ["imageName" => "",
                "name" => $_POST["p2"] ];
    $player3 = ["imageName" => "",
                "name" => $_POST["p3"] ];
    $player4 = ["imageName" => "",
                "name" => $_POST["p4"] ];
                
    $table = [$player1, $player2, $player3, $player4];
    
    var_dump($table);
              
    $hand = ["player" => null, 
             "cards" => [],
             "score" => "" ];
    
    $game = ["location" => $table, 
             "hands"=> $hand];
    
    ?>
    
<html>

<head>
    <title> </title>
</head>

<body>
    
    <?php
    function shuffle(){
        //shuffle($deck); comment1 comment2
    }
    
    
    ?>

    <form action  = "game.php" method = "POST">
        <input type = "hidden" value = "<?= $_POST["p1"] ?>" />
        <input type = "hidden" value = "<?= $_POST["p2"] ?>" />
        <input type = "hidden" value = "<?= $_POST["p3"] ?>" />
        <input type = "hidden" value = "<?= $_POST["p4"] ?>" />
        <input type = "submit" value = "Play again!" />
    </form>

</body>

</html>
