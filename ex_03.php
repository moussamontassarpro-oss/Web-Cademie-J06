<?php

function printAll(array $tab): void
{
    $errorMessage = "Erreur tableau vide";
    
    if (count($tab) === 0) {
        
        echo $errorMessage . "\n";
        
        return; 
    }

    foreach ($tab as $value) {
         echo $value;
    }
}

