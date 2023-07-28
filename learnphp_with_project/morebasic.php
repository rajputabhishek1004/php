<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box ;
    }
    .container{
        max-width: 80%;
        background-color: pink;
        margin: auto;
        padding: 22px;
    }
</style>
<body>
    <div class="container">
        <h1>lets learn</h1>
 <?php
  // if else / elseif
     $age = 3;
     if($age>18){
         echo "lets go";
         echo "<br>";
     }
     else{
         echo "No way";
         echo"<br>";
     }

    //loops
    $a=0; 
    while ($a <= 10) {
        echo " value of a is = ";
        echo $a;
        $a++;
        echo "<br>";
    }

    // iteration of array with loops 
    $b=0;
    $languages = array("python","c++","java","javascript");
    while ($b < count($languages)) {
        echo " value of language is = ";
        echo $languages[$b];
        $b++;
        echo "<br>";
    }
// do while   -- pahli iteration execute hoti hi hai bhale hi false condition lagi ho baad mai
    $c=0; 
    do {
        echo " value of c from do while is = ";
        echo $c;
        $c++;
        echo "<br>";
    }while ($c <= 10) 

    //for loop

//   for ($i=0; $i < 10; $i++){ 
// echo " value from for loop = ";
//       echo $i;
//   }

 //for each 

//  foreach($languages as $value){
//      echo "<br>value from for each  is = ";
//      echo $value;
//  }
   
  // function without argument
  
//   funtion print5(){
//       echo " five ";
//   }
// print5();
 
// with argument 
//   function print_number($number){
//     echo "<br>your number =";
//     echo $number;
//     }
//     print_number(45)
//     print_number(4576)
//     print_number(47643)
 
  
 ?>
    </div>
</body>
</html>










