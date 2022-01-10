<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width: 80%;
        background-color:grey;
        margin: auto;
        padding:23px;

    }
</style>
<body>
    
    <div class="container">
    <h1> Lets Learn PHP</h1>
    <p>Here is your status: </p>
        <?php
    $age=17;
    if($age>18){
    echo" You can go to party";
    }
    else if($age==7){
    echo "Your age is 7";
    }
    else{
    echo" You can not go to the party";
    }

    //Array In PHP

    $languages=array("php","C++","Python");
    echo"<br>";
    echo $languages[2];
    echo"<br>";
    //if i want items
    echo" Items: ";
    echo count($languages);
    echo"<br>";


    // Loop in PHP
 
    $a=0;
    while($a<=10){
        echo" <br>The value is: ";
        echo $a;
        $a++;
    }
    // Loop in PHP
 
    $a=0;
    while($a< count($languages)){
     echo" <br>The value of languages: ";
     echo $languages[$a];
     $a++;
    }

     // do while loop in PHP
 
     $a=0;
     do{
         echo" <br>The value is: ";
         echo $a;
         $a++;
     }
     while($a<10);

     echo"<br>";

     //for loop
    
    for ($a=0; $a < 10; $a++) { 
        echo" <br>The value from the for loop are: ";
        echo $a;
    }
    echo"<br>";

    //for each loop

    foreach($languages as $value){
        echo " <br> the value form for each loop is: ";
        echo $value;
    }

    echo"<br>";

    function print5(){
        echo"FIVE";
    }
    print5();


    function print_number($number){
        echo"<br> Your number is : ";
        echo $number;
    }
     print_number(56);
     print_number(88);

        ?>

    </div>
</body>
</html>