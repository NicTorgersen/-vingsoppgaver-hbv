<?php
    // htmlentities så vi ikke møter noen scripts
    $first_name = htmlentities($_POST['first_name']);
    $last_name = htmlentities($_POST['last_name']);

    echo "God dag, " . $first_name . ' ' . $last_name;