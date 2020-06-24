<?php
function tentukan_deret_aritmatika($arr) {
    $sum = 0;
    foreach ($arr as $x)$sum+=$x;
    // Formula from wikipedia
    return $sum == (count($arr) * ($arr[0] + $arr[count($arr)-1]) / 2) ? "true\n" : "false\n";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>