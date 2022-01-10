<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container">
        this is my first website
        <?php
        define('PI', 3.1416);
        echo"Hello dil, whatsupp??";
        echo"<br>";

        //these are comments
        $variable1=6;
        $variable2=3;
                //both echo and Echo supports . not case senstitive

        echo"the numbers are:";
        
        echo $variable1;
        Echo $variable2;

        //operators in php
        
        //arithmetic operators
        echo"<br>";
        echo"The value of variable1 + variable2 is ";
        echo $variable2+$variable2;
        echo"<br>";
        
        echo"The value of variable1 - variable2 is ";
        echo $variable2-$variable2;

        echo"<br>";


        echo"The value of variable1 * variable2 is ";
        echo $variable2*$variable2;
        echo"<br>";

        echo"The value of variable1 / variable2 is ";
        echo $variable2/$variable2;
        echo"<br>";

    //assignment operators

    $newVar=$variable1;
    $newVar+=1;                                 //can be/=,-=,*= and so on.
    echo "The value of new variable is ";
    echo $newVar;
    echo"<br>";

    //comaparison operators
    echo "the value of 1==4 is ";
    echo var_dump(1==4);
    echo"<br>";

    echo "the value of 1!=4 is ";
    echo var_dump(1!=4);
    echo"<br>";

    echo "the value of 1>=4 is ";
    echo var_dump(1>=4);
    echo"<br>";

    echo "the value of 1<=4 is ";
    echo var_dump(1<=4);
    echo"<br>";


    //increment operators

    echo $variable1++;
    echo"<br>";
    echo $variable2--;
    echo"<br>";
    echo ++$variable2;
    echo"<br>";
    echo --$variable1;
    echo"<br>";


    //logical operators
    //and(&&)
    $myVar= (true) and (true);
    echo"<br>";
    echo var_dump ($myVar);

    $myVar= (false) and (true);
    echo"<br>";
    echo var_dump ($myVar);

    $myVar= (false) and (false);
    echo"<br>";
    echo var_dump ($myVar);

    $myVar= (true) or (false);
    echo"<br>";
    echo var_dump ($myVar);

    $myVar= (true) xor (true);
    echo"<br>";
    echo var_dump ($myVar);
    echo"<br>";
    //Data types in PHP

    //string
    echo"<br> Data type <br>";
    $var="this is a string";
    echo var_dump($var);

    echo"<br> Data type <br>";
    $var=45;
    echo var_dump($var);

    echo"<br> Data type <br>";
    $var=4.65;
    echo var_dump($var);

    echo"<br> Data types <br>";
    $var=true;
    echo var_dump($var);

    echo"<br>";
    echo PI;

        ?>       
    </div>
</body>
</html>