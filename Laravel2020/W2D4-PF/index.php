<?php 
    include 'animal.php';

    $sheep = new Animal("shaun");

    echo $sheep->name; // "shaun"
    echo $sheep->legs; // 2
    echo $sheep->cold_blooded; // false
    echo $sheep->get_cold_blooded();

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump() ; // "hop hop"
?>