<?php

$dayOfWeek = date("w");

switch ($dayOfWeek) {
    case 1:
        if ($dayOfWeek == 1) {
            echo "It is Monday";
            break;
        }
    case 2:
        echo "It is Tues";
        break;
    case 3:
        echo "It is Wed";
        break;
    case 4:
        echo "It is Thurs";
        break;
    case 5:
        echo "It is Fri";
        break;
    case 6:
        echo "It is Sat";
        break;
    case 0:
        echo "It is Sun";
        break;
}

