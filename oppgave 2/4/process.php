<?php

    $married = strtolower($_POST['married']);
    $kids = strtolower($_POST['kids']);
    $title = '';
    $string = '';
    $strParts = [
        0 => '',
        1 => ''
    ];

    if (($married == 'y' || $married == 'j') && ($kids == 'y' || $kids == 'j')) {

        $string = 'Du er '
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