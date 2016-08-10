<?php
$fileName = 'log.txt';
$log = "This is a line about log.\n";
function appendLogToFile($fileName,$log){
    $handle = fopen($fileName,'a');
    fwrite($handle,$log);
}

for($i=0;$i<10;$i++){
    appendLogToFile($fileName,$log);
}
