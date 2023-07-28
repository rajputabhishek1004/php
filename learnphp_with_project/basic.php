<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
          this is my first php website <br>
          <?php
              echo "hello world this is inside php ";
              echo "<br>";
          ?>
          <?php
           echo "hello world again";
           echo "<br>";
           ?>
           <?php
           // not a case sensitive
        $variable1 =3;
        $variable2 =2;
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";
        echo $variable1+$variable2;
        echo "<br>";

    // operators

    //arithmatic
     echo "the value of variable1 + variable2 = ";
    echo $variable1+$variable2;
     echo"<br>";
    echo "the value of variable1 - variable2 = ";
    echo $variable1-$variable2;
    echo"<br>";
    echo "the value of variable1 * variable2 = ";
    echo $variable1*$variable2;
    echo"<br>";
    echo "the value of variable1 / variable2 = ";
    echo $variable1/$variable2;
    echo"<br>";

    //assingment 

    $newvar = $variable1 ;
    echo "the value of newvar is variable1 = " ;
    echo $newvar ;
echo "<br>" ;
    $newvar += 1 ;
    echo "the value of newvar is 1 incremented from variable1 = " ;
    echo $newvar ;
    echo "<br>";

    //comprarison operater
    echo "<h1>hello this also works</h1>";
     echo "the vale 1==4 is ";
     echo var_dump(1==4);
     echo"<br>"; 
     echo "the vale 1!=4 is ";
     echo var_dump(1!=4);
     echo"<br>";
     echo "the vale 1>=4 is ";
     echo var_dump(1>=4);
     echo"<br>";
     echo "the vale 1<=4 is ";
     echo var_dump(1<=4);
   echo "<br>";
     //inrement and decrement
     echo $variable1++;
     echo $variable1;
     echo "<br>";
     echo $variable1--;
     echo $variable1;
     echo "<br>";
     echo ++$variable1;
     echo $variable1;
     echo "<br>";
     echo --$variable1;
     echo $variable1;
     echo "<br>";

     //logical operator 
      //and (&&)
      //or (||)
      //xor 
      //not (!)
        
      $myvar = (true and true);
      echo var_dump($myvar);
      echo "<br>";
      $myvar = (false and true);
      echo var_dump($myvar);
      echo "<br>";
      $myvar = (false or true);
      echo var_dump($myvar);
      echo "<br>";
      $myvar = (true xor true);
      echo var_dump($myvar);
      echo "<br>";
      $myvar = (false xor true);
      echo var_dump($myvar);
      echo "<br>";

      //datatypes 

      //1.string

    $datatype1="this is a string";
    echo var_dump($datatype1);
    echo "<br>";
      //2.integer
      $datatype1=5;
    echo var_dump($datatype1);
    echo "<br>";
      //3.float
      $datatype1=5.3;
    echo var_dump($datatype1);
    echo "<br>";
      //4.boolean
      $datatype1=true;
    echo var_dump($datatype1);
    echo "<br>";
      //5.array

      $languages = array("python","c++","java","javascript");
      // echo $languages;   -- error dega
      echo $languages[0];
      echo (" ");
      echo $languages[1];
      echo (" ");
      echo $languages[2];
      echo (" ");
      echo $languages[3];
      echo (" ");
      echo "<br>";
      echo count($languages);
      //6.object

      //constent
      echo "<br>";
      define('pi' , 3.14);
      echo pi;
      echo"<br>;"


?>
    </div>
</body>
</html>







