<?php
    $values = ['first_name' => null, 'last_name' => null, 'age' => null];
    $string = '';

    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['age']) && $_POST['age'] >= 0) {
        foreach ($values as $key => $value) {
           $values[$key] = htmlentities($_POST[$key]);
        }

        if ($values['age'] > 50) {
            $string = "God dag, " . $values['first_name'] . " " . $values['last_name'] . ", du er " . $values['age'] . " år gammel og like sprek.";
        } else {
            $string = "God dag, " . $values['first_name'] . " " . $values['last_name'] . ", du er " . $values['age'] . " år gammel.";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>God dag</title>
    <meta charset="utf-8">
</head>
<body>
    <p><?php echo $string; ?></p>
</body>
</html>