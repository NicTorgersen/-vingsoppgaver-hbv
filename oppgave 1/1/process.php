<?php
    $fornavn = htmlentities($_POST['fornavn']);
    $etternavn = htmlentities($_POST['etternavn']);

    echo "God dag, " . $fornavn . ' ' . $etternavn;