<?php
    $values = ['num1' => null, 'num2' => null];

    if (isset($_POST['num1'], $_POST['num2']) && is_numeric($_POST['num1'] + $_POST['num2'])) { // sjekker om det er faktiske tall som er input
        foreach ($values as $key => $value) {
            $values[$key] = htmlentities($_POST[$key]);
        }

        if ($values['num1'] > $values['num2']) {
            $difference = $values['num1'] - $values['num2'];
        } else {
            $difference = $values['num2'] - $values['num1'];
        }
        
        $sum = $values['num1'] + $values['num2'];

        echo 'Tall 1 er ' . $values['num1'] . "<br />";
        echo 'Tall 2 er ' . $values['num2'] . "<br />";
        echo 'Summen er ' . $sum . "<br />";
        echo "Differansen er " . $difference . ".<br />";
    }