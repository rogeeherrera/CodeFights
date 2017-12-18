<?php

function highschoolThrowback($coefficients) {
$a = $coefficients[0];
$b = $coefficients[1];
$c = $coefficients[2];
if($a<0){
    $a=$a*(-1);$b=($b)*(-1);$c=($c)*(-1);
}
$discriminant = ($b*$b - 4*$a*$c);
$d[0] = round((-$b - sqrt($discriminant))/(2*$a),2);
$d[1] = round((-$b + sqrt($discriminant))/(2*$a),2);
return array_unique($d);
}

?>
