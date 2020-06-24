<?php
function skor_terbesar($arr){
    $res = array();
    foreach ($arr as $cn => $cl) {
        array_push($res,$cn,array());

        $highestScore = 0;

        foreach ($cl as $sd) {
            $s_sn = $sd["nama"];
            $s_sk = $sd["kelas"];
            $s_sc = $sd["nilai"];
            if ($s_sc > $highestScore) {
                $highestScore = $s_sc;
                $res[$cn] = array(
                    "nama"=>$s_sn,
                    "kelas"=>$s_sk,
                    "nilai"=>$s_sc
                );
            }
        }
    }
    return $res["Laravel"];
}

$skor = array(
    "Laravel"=>array(
        array(
            "nama"=>"Aghnat",
            "kelas"=>"Laravel",
            "nilai"=>72
        ),
        array(
            "nama"=>"Agus",
            "kelas"=>"Laravel",
            "nilai"=>86
        )
    ),
    "React Native"=>array(
        array(
            "nama"=>"Budi",
            "kelas"=>"React Native",
            "nilai"=>78
        ),
        array(
            "nama"=>"Andra",
            "kelas"=>"React Native",
            "nilai"=>89
        )
    ),
    "React JS"=>array(
        array(
            "nama"=>"Tina",
            "kelas"=>"React JS",
            "nilai"=>91
        ),
        array(
            "nama"=>"Indra",
            "kelas"=>"ReactJS",
            "nilai"=>94
        )
    )
);

// TEST CASES
print_r(skor_terbesar($skor));

/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>