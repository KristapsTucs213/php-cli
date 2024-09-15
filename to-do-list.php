<?php

$taskList = ["first task", "Second task", $izvele];
function showAllTask($inputTasks){
    foreach($inputTasks as $task){
        echo $task . "\n";
    }
}

function addTask($taskList){
    $izvele = readline("Ievadi uzdevumu ");
    $taskList[] = $izvele;
}

function viewTask($taskList){
    $kursuzd = readline("ievadiet kuru uzdevumu ciparu velaties redzet")
    $index = $taskNumber - 1; 

    if(isset($taskList[$index])){
        echo "Uzdevums #$taskNumber: " . $taskList[$index] . "\n";
    }
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