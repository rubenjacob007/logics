<?php

/*$array=array('2','4','8','5','1','7','6','9','10','3');

echo "Unsorted array is: ";
echo "<br />";
echo "<br>";
echo "<br>";
print_r($array);


for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}
echo "<br>";
echo "<br>";
echo "<br>";

echo "Sorted Array is: ";
echo "<br />";
print_r($array);
*/

$a=234;  
$b=345;  
//using arithmetic operation  
$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  
?>