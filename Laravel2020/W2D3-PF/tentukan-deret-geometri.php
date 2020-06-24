<?php
function tentukan_deret_geometri($arr) {
    $sum = 0;
    foreach ($arr as $x)$sum+=$x;
    $r = $arr[1]/$arr[0];
    return $sum == ($arr[0] * (1-pow($r,count($arr))) / (1-$r)) ? "true\n":"false\n";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>