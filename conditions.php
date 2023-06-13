<?php
#** if condition used to
// $result = 25;

// if ($result < '20') {
//     echo 'Have good day.';
// } else {
//     echo 'Have good night.';
// }

// if ($result < 12) {
//     echo 'the first part of the day';
// } elseif ($result < 24) {
//     echo 'the second part of the day';
// } else {
//     echo "all the day";
// }

#switch case used to

$Month = "June";

switch ($Month) {
    case 'January':
        echo 'first month';
        break;
    case 'February':
        echo 'second month';
        break;
    case 'March':
        echo 'third month';
        break;
    case 'April':
        echo 'fourth month';
        break;
    case 'May':
        echo 'fifth month';
        break;
    default:
        echo 'last month';
}
