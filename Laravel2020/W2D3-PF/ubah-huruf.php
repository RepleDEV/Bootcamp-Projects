<?php
function ubah_huruf($string){
    $aph = "abcdefghijklmnopqrstuvwxyza";
    $res = [];
    for ($i = 0;$i < strlen($string);$i++){
        $letter = substr($string,$i,1);
        $index = strpos($aph,$letter);
        array_push($res,substr($aph,$index+1,1));
    }
    return implode("",$res) . "\n";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>