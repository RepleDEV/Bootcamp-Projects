<?php
function skor_terbesar($arr){
    $res = array();
    $classes = array();

    // This lists the classes
    foreach ($arr as $st) {
        $class = $st["kelas"];
        array_push($classes,$class);
    }
    
    // This removes any duplicates in the array $class
    $classes = array_values(array_unique($classes));

    // Sorts the students according to their classes
    for($i = 0;$i < count($classes);$i++){
        $cname = $classes[$i];
        array_push($res,array());
        foreach ($arr as $st){
            $cs = $st["kelas"];
            if($cs == $cname) {
                array_push($res[$i],$st);
            }
        }
    }

    // Initiate new array
    $newarr = [];

    // Get each value of res as st
    foreach ($res as $cl => $st) {
        // Highest Score student
        $hss = [];
        // Highest Score
        $hs = 0;

        // Get each student
        foreach ($st as $su) { 
            $score = $su["nilai"];
            // If score is bigger than the highest score
            if($score > $hs) {
                // Update both variables
                $hs = $score; 
                $hss = $su;
            }
        }

        // Init new arr
        $rs = [$classes[$cl]=>$hss];
        // Merge newarr with new arr lol
        $newarr = array_merge($newarr,$rs);
    }

    // Return said newarr
    return $newarr;
}
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

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