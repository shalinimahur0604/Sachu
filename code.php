<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>hii</h1>
    <?php
    echo"Sachu Love Shalu <br>";
    $we="Sachu Love Shalu";
    //hiiacd
   // echo strlen($W);
    $a=12;
    $b=11;
    $W="hii i am here";
    echo strlen($W),"<br>";
    echo str_word_count($W),"<br>";
    echo strrev($W),"<br>";
    echo strpos($W,'i'),"<br>";
    echo str_replace('Love','weds',$we);
    echo "<br>";
    echo $W," <br>",$b;
    echo "<br>";
    var_dump($W);
    echo "<br>";
    $count = array('one','two','three');
    echo $count[0]."<br>".$count[1]."<br>" .$count[2] ;
    $var1 = null;
    echo $var1;
    var_dump($var1);
    define("PI", 3.14); //for good practice add on top
    echo PI,"<br>"; 
    //operators
    echo "the value of 3+4=",3+4,"<br>";
    echo "the value of 3-4=",3-4,"<br>";
    echo "the value of 3**4=",3**4,"<br>";
    echo "the value of 3/4=",3/4,"<br>";
    //assignment operators
    $x=3;
    echo $x,"<br>";
    $x=$x+1;
    echo $x,"<br>";
    $x++;
    echo $x,"<br>";
    $x--;
    echo $x,"<br>";
    //if-else
    $t = date("H");
    if($t < "20")
     echo $t . "is a good";
    else
     echo "is a bad";
    echo date_default_timezone_get();//check default time
    ?>
</body>
</html>