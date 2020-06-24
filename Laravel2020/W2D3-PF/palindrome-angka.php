<?php

function palindrome_angka($angka) {
    do {
        $angka++;
    } while(checkPalindrome(strval($angka)) == "false");
    return "$angka <br>";
}

// echo checkPalindrome(strval(118));

function checkPalindrome($str) {
    $arr1 = [];
    $arr2 = [];

    $ptr1 = 0;
    $ptr2 = strlen($str)-1;
    while ($ptr1 < $ptr2) {
        array_push($arr1,$str[$ptr1]);
        array_push($arr2,$str[$ptr2]);
        $ptr1++;
        $ptr2--;
    }
    return (implode("",$arr1) == implode("",$arr2) ? "true" : "false");
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>