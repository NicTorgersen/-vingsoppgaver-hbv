<?php

    $answer = $_POST['answer'];
    $title = '';
    $string = '';

    if (empty($answer)) {
        $string = "Du har ikke svart på om du er student.";
        $title = "???";
    } else if ($answer == 'j') {
        $string = "Du har svart ja på om du er student.";
        $title = "JA!";
    } else if ($answer == 'n') {
        $string = "Du har svart nei på om du er student.";
        $title = "NEI!";
    } else {
        $string = "Du har hverken svart ja eller nei på om du er student.";
        $title = $answer;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
</head>
<body>
    <p><?php echo $string; ?></p>
</body>
</html>