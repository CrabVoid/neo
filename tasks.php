<?php
$tasks = ["build a house", "create the universe", "bet on a horse"];
 while (true) {
    $input = readline("Ievade> ");
    if ($input === "kys") {
        break;
 } 
     switch ($input) {
    case 0:
        echo $tasks[0], "\n";
        break;
    case 1:
        echo $tasks[1], "\n";
        break;
    case 2:
        echo $tasks[2], "\n";
        break;
    }
}
#print_r($tasks);
?>
