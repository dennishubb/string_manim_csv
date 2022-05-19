<?php
    include('fileManager.php');
    include('stringManipulation.php');
    include('csv.php');

    $fileManager        = new fileManager();
    $stringManipulation = new stringManipulation();
    $csv                = new csv();
    
    $string = $fileManager->readFile();

    
    fwrite(STDOUT, $stringManipulation->capitalizeString($string));
    fwrite(STDOUT, PHP_EOL);
    fwrite(STDOUT, $stringManipulation->capitalizeCharacter($string, 2));
    fwrite(STDOUT, PHP_EOL);
    fwrite(STDOUT, $csv->createCSVFromString($string));
    fwrite(STDOUT, PHP_EOL);
    

?>