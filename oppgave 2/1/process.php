<?php

    $num1 = $_POST['num1'];
    $answer = 9;

    if ($num1 == $answer) {
        echo "Riktig. 3 ganger 3 er " . $answer . ".";
    } else {
        echo "Feil. 3 ganger 3 er ikke " . $num1 . ". 3 ganger 3 er " . $answer . ".";
    }