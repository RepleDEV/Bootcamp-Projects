<?php
function pasangan_terbesar($angka){
    $biggestNum = 0;

    for($i = 0;$i < strlen(strval($angka));$i++){
        $numstr = strval($angka);
        $numpair = intval(substr($numstr,$i,1).substr($numstr,$i+1,1));
        if ($numpair > $biggestNum)$biggestNum = $numpair;
    }
    return "$biggestNum<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>