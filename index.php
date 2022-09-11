<?php 

for ($i=1; $i <= 100; $i++) { 
   echo "$i = ";
   if($i%3 == 0 && $i%5 == 0){
      echo areaSquare($i/3, $i/5);
   }else if($i%3 == 0){
      echo areaCircle($i/3);
   } else if($i%5 == 0){
      echo circumferenceCircle($i/5);
   } else {
      echo $i;
   }
   echo PHP_EOL;
}

function areaSquare($length, $width){
   return $length * $width;
}

function areaCircle($r){
   return 3.14 * pow($r,2);
}

function circumferenceCircle($r){
   return 3.14 * $r * 2; 
}

?>