<?php

    $file = @file("counter.txt");

    $count = @implode('', $file);

    $count++;

    $file_counter = fopen("counter.txt", "w");
    
    fputs($file_counter, $count);

    fclose($file_counter);

    echo '<img src="https://www.royal-canin.ru/upload/iblock/c2e/glavnaya.jpg">'
?>