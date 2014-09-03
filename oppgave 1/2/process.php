<?php
    // Array som lister opp felter som finnes i html dokument
    $values = ['first_name' => null, 'last_name' => null, 'age' => null];
    $string = '';

    // sjekker om alle verdiene finnes i den globale variabelen, samt sjekker om alder er mer enn eller lik 0
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['age']) && $_POST['age'] >= 0) {
        foreach ($values as $key => $value) {
           $values[$key] = htmlentities($_POST[$key]); // sanitèr input og legg til i relevant array element
        }

        if ($values['age'] > 50) { // gjør noe annet hvis alder er over 50
            $string = "God dag, " . $values['first_name'] . " " . $values['last_name'] . ", du er " . $values['age'] . " år gammel og like sprek.";
        } else {
            $string = "God dag, " . $values['first_name'] . " " . $values['last_name'] . ", du er " . $values['age'] . " år gammel.";
        }
    }
