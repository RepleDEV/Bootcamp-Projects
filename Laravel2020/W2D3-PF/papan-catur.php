<?php

function papan_catur($angka) {
    $res = [];
    for ($i = 0;$i < $angka;$i++){
        for($j=0;$j<$angka;$j++){
            if ($i%2==0)array_push($res,($j%2==0?"#":"-"));
            else array_push($res,($j%2==0?"-":"#"));
        }
        array_push($res,"<br>");
    }
    return "<pre>" . str_replace("-"," ",implode("",$res)) . "<pre><br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>