<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>


<?php

$player1 = $_POST["playername1"];
$player2 = $_POST["playername2"];

$playerTurn = 1;
if(!empty($_POST['turn'])) {
    if($_POST['turn'] == 1) {
        $playerTurn = 2;
    }
    else {
        $playerTurn = 1;
    }
}

$sticks = 21;
if(!empty($_POST['numSticks'])) {
$sticks = $_POST['numSticks'];
}
if(!empty($_POST['player1'])) {
    $player1 = $_POST['player1'];
    }
    if(!empty($_POST['player2'])) {
        $player2 = $_POST['player2'];
        }
        if ($playerTurn == 1) {
            echo "<br> <h1>It`s $player1's' turn </h1>";
            }
            else {
            echo "<br> <h1>It`s $player2's' turn </h1>";
            }

$sticks = $sticks - $_POST['sticksToDraw'];
if ($sticks < 1){   
    if ($playerTurn == 1) {
        echo " <h1> $player1 WON!!!! </h1> 
        <form action='playernames.php' method='POST'>
        Do you want to play another game? <br> 
        <input type='submit' value='New game'>
        </form>"; 
    }
    else{
        echo " <h1> $player2 WON!!!! </h1> 
        <form action='playernames.php' method='POST'>
        Do you want to play another game? <br> 
        <input type='submit' value='New game'>
        </form>";  
    }   
        
}
?>
<h2>Sticks left: <?=$sticks?></h2>
<form method="POST" action="nim.php">
<select name="sticksToDraw">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option> 
</select>
<input type="submit" value="Take" />
<input type="hidden" name="numSticks" value="<?php echo $sticks; ?>" />
<input type="hidden" name="turn" value="<?php echo $playerTurn; ?>"/>
<input type="hidden" name="player1" value="<?php echo $player1; ?>"/>
<input type="hidden" name="player2" value="<?php echo $player2; ?>"/>

</form>


</body>
</html>