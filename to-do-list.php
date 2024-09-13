<?php

$taskList = ["first task", "Second task"];
function showAllTask($inputTasks){
    foreach($inputTasks as $task){
        echo $task . "\n";
    }
}

function addTask(){
    echo "To be implemented";
}


do {
    echo "Uzdevumu parvaldnieks";
    echo "Ievadit jaunu uzdevumu => 2:\n";
    echo "Apskatit visus uzdevumu => 1:\n";
    echo "Apskatit vienu uzdevumu => 3: \n ";
    $choice = readline("Izvelies darbibu: ");

    switch ($choice) {
        case '1':
          showAllTask($taskList);
          break;
        case '2':
          addTask($taskList);
          break;
        default:
          echo "Invalid option!\n";
      }

    $continue = readline("Vai velies turpinat");
  } while ($continue != 'N');