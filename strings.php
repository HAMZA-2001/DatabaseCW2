<?php
    $str = "This is a string <br>";
    echo $str;
    $lenn = strlen($str);
    echo "The length of this string is ".$lenn; // . is the string concatenation operator
    echo "<br>";
    echo "The number of words in this string is ". str_word_count($str); 
    echo "<br>";
    echo "The reverse of this string is ". strrev($str); 
    echo "<br>";
    echo "The position of is in this string is ". strpos($str, "is");
    echo "<br>";
    echo "The replaced string is ". str_replace("is", "at" , $str);
?>