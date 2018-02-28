<?php



function easterReverse($path){
    //open a file
    $openedFile = fopen($path, "r+");
    
    //read all of the content 
    $readedContent = fread($openedFile, filesize($path));
    rewind($openedFile); //cursor back to the begining
    
    //Calcul half of the length
    $halfLength = floor(strlen($readedContent) / 2);
    
    //Position the cursor on half way
    //fseek($openedFile, $halfLength, SEEK_SET);
    
    //read the content from this point to have the first part
    $firstPart = fread($openedFile, $halfLength);
    
    
    //second half
    $secondPart = fread($openedFile, filesize($path));
    
    //Reverse this half content
    $reversedString = strrev($secondPart);
    
    //New content
    $finalText = $firstPart.$reversedString;
    
    //write to the file
    fwrite($openedFile, $finalText);
    
    //Close the file
    fclose($openedFile);
};