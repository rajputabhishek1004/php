<?php
$str = "this is a a string";
echo $str;
echo "<br>";

$lenn = strlen($str);
// dot . is a string ko jodne wala usme variable bi daal sakte h conkinate keke
// echo $lenn;
echo "lenghth is = ".$lenn . " thank you <br> " ; 
echo "number of words is = ". str_word_count($str) . " thank you <br> " ; 
echo "reversed string = " .strrev($str) ;
echo "<br>searching word -a- position in string = " .strpos($str , "a");
echo "<br>replace word in  string = " .str_replace("a" , "replaced" ,$str);


?>