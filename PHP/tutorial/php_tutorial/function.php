<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/30/18
 * Time: 10:48 AM
 */
$x;

function newCalc($x)
{
    $newnr = $x * 0.75;
    echo "here is 75% of what you wrote: " . $newnr;
}


function something($x) {
    $y = 10;
    $x = $y +1;
    return $x;
}

$blue = something($x);
echo $blue;
