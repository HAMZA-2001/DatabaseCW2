<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<style>
.container{
    max-width: 80%;
    background-color: green;
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
    <h1> Lets learn about PHP </h1>
    <p>Your party status is here:</p>
    <?php
    $age = 7;
    if($age>18){
        echo "You can go to the party";
    }    
    else if ($age == 7){
        echo "You are 7 years old";
    }
    else{
        echo "You can not go to the party";
    }
    echo "<br>";

    // Arrays
    $languages = array("Python", "C++", "php", "NodeJs");
    echo $languages[1];
    echo " , ";
    echo $languages[3];
    echo "<br>";
    echo count($languages);

    // Loops
    // while
    $a = 0;
    while ($a <= 10){   
        echo " The value of a is: ";
        echo $a;
        $a++;
        echo "<br>";
    }

    // do while
    $a = 0;
    do{
        echo "<br> The value of language is: ";
        echo $languages[$a];
        $a++;
    } while($a < count($languages));

    // do while always run for the first iteration and the checks the condition 

    // For Loop
    echo "<br>";
    $a = 0;
    for ($a=0; $a < 10 ; $a++) { 
        echo "<br> The value of a is: ";
        echo $a;
    }

    echo "<br>";
    foreach ($languages as $value){
        echo "<br> The value is ";
        echo $value;
    }

    function print5(){
        echo "FIVE";
    }
    echo "<br>";
    print5();

    function print_number($number){
        echo " <br> Your Number Is ";
        echo $number;
    }

    print_number(45);
    ?>

    </div>
    
</body>
</html>