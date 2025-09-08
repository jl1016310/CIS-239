<?php


$symbols = ['A', 'B', 'C'];
$totalWinnings = 0;
$spinCount = 0;
$spinHistory = [];


while ($totalWinnings < 500 && $spinCount < 20) {


    $currentSpin = '';

    for ($i = 0; $i < 3; $i++) {

        $currentSpin .= $symbols[array_rand($symbols)];
    }


    $payout = match ($currentSpin) {

        'AAA', 'BBB', 'CCC' => 100,


        'AAB', 'ABA', 'BAA', 
        'BBA', 'BAB', 'ABB', 
        'CCA', 'CAC', 'ACC', 
        'CCB', 'CBC', 'BCC'
        => 50,


        default => 0,
    };


    $totalWinnings += $payout;


    $spinHistory[] = "$currentSpin payoff $payout";

    $spinCount++;
}


foreach ($spinHistory as $result) {
    echo $result;
}


echo "Game over. Total winnings: $totalWinnings dollars";
