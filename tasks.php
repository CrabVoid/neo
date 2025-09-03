<?php
$tasks = ["build a house", "create the universe", "bet on a horse"];

function obtainTheTasks($tasks) {
    foreach ($tasks as $task =>$nr) {
        echo $task+1, " " ."$nr\n";
    }
}

echo "var apskatīties visus uzdevumus ar 'all'\n";
echo "var iziet ar 'exit'\n";
echo "var apskatīties individuālus objektus ievadot ciparu'\n";
echo "var pievienot uzdevumu ar 'add'\n";
echo "var dzest uzdevumu ar 'delete'\n";


 while (true) {
    $input = readline("Ievade> ");
    if ($input === "exit") {
        break;
 } 
     switch ($input) {
    case "all":
        (obtainTheTasks($tasks));
        break;
    case "add":
        $newTask = readline("jauns uzdevumu> ");
        array_push($tasks, $newTask);
        echo "Uzdevums pievienots\n";
        break;
    case "delete":
        $delTask = readline("kuru uzdevumu dzest? ievadi nr> ");
        if (isset($tasks[$delTask])) {
            unset($tasks[$delTask]);
            echo "Uzdevums dzests\n";
        }
        break;    
    case $input:
        echo $tasks[$input], "\n";
        break;
    }
    
}
#print_r($tasks);
?>
