<?php
function telephoneGame($m) {
    $a = -1;
    for($i=1;$i<=(count($m)-1);$i++)
    {
        if ($m[$i]!==($m[0])){
        $a = $i;
        break;
        }
    }
    return $a;
}
?>
