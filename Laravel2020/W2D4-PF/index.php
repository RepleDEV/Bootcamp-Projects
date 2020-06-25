<?php 
    include 'animal.php';

    $sheep = new Animal("Shaun");

    echo $sheep->get_name();
    echo "<br>";
    echo $sheep->get_cold_blooded();
    echo "<br>";
    echo $sheep->get_leg_amount();
    echo "<br>";

    $kermit = new Frog("Kermit");
    $kermit->jump();

    $george = new Ape("George");
    echo "<br>";
    $george->yell();
?>