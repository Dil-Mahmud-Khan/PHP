<?php
    $str="DIL This this";
    echo"<br>";
    echo $str;
    $lenn= strlen($str);
    echo"<br>";
    echo "The length of the string is ".$lenn;
    echo"<br>";
    echo "The length of the string is ". str_word_count($str);
    echo"<br>";
    echo "The reversed of the string is ". strrev($str);
    echo"<br>";
    echo"The search for is in the string is :".strpos($str, "is");
    echo"<br>";
    echo"The replaced string is ". str_replace("is","at", $str);
    echo"<br>";














?>