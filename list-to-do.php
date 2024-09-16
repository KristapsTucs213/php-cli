<?php

$taskList = ["Izpildit majasdarbu", "Iet laicigi gulet"];

$continue = y;
do {
    echo "Uzdevumu parvaldnieks";
    echo "Ievadit jaunu uzdevumu => 2:\n";
    echo "Apskatit visus uzdevumu => 1:\n";
    echo "Apskatit vienu uzdevumu => 3: \n ";
    echo "Iziet => 4 \n";

    $choice = readline("Izvelies darbibu: ");

    switch ($choice) {
        case '1':
            // foreach ($taskList as $task){
            //     echo "$tasklist";
            // }

            for($i = 0; $i < count($taskList); $i++){
                $id = $i + 1;
                echo "$id" . ". $taskList[$i] \n" ;
            }
          echo "\n";  
          break;
        case '2':
            echo "nothing yet";
          break;
        case '3':
            echo "nothing yet";
            break;
        case '4':
            $continue == null;
            echo "Goodbye";
            break;    
        default:
          echo "Invalid option!\n";
      }

    $continue = readline("Vai velies turpinat");
}
while ($continue == "y");








