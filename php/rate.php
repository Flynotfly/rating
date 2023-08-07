<?php 

$yearidnex = 0;
$monthindex = 0;

$dbTeamrating = mysqli_connect('localhost', 'root', 'root', 'teamrating');
$queryRating = mysqli_query($dbTeamrating, "SELECT * FROM `280621`");
$queryDates = mysqli_query($dbTeamrating, "SELECT * FROM `dates`");

$ratingArray = [
    "logoid" => [],
    "name" => [],
    "score" => [],
    "player1" => [],
    "player2" => [],
    "player3" => [],
    "player4" => [],
    "player5" => [],
];

$i = 0;
while(($resultRating = mysqli_fetch_assoc($queryRating)) !== null):
    $i++;
    $ratingArray["logoid"][$i] = $resultRating["logoid"];
    $ratingArray["name"][$i] = $resultRating["name"];
    $ratingArray["score"][$i] = $resultRating["score"];
    $ratingArray["player1"][$i] = $resultRating["player1"];
    $ratingArray["player2"][$i] = $resultRating["player2"];
    $ratingArray["player3"][$i] = $resultRating["player3"];
    $ratingArray["player4"][$i] = $resultRating["player4"];
    $ratingArray["player5"][$i] = $resultRating["player5"];
endwhile;    
?>