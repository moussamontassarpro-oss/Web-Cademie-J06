<?php

require_once 'ex_03.php';


$testArray1 = ["un", 2, "trois", 4.0];
echo "--- Test 1 (Valide) ---" . "\n";
printAll($testArray1); 


$testArray2 = [];
echo "\n--- Test 2 (Erreur) ---" . "\n";
printAll($testArray2);
?>