<?php

$notes=[];
$entree=null;

while ($entree != "fin") {
    $entree = readline("Entrez une note ou 'fin' pour terminer : ");
    if ($entree=="fin"){
        break;
    } else{
    $notes[] = $entree;}
    
}

foreach ($notes as $note){
    echo $note . "\n";
}

?>