<?php
    $weight = $_POST['weight'] ?? null;
    $length = $_POST['length'] ?? null;
    $height = $_POST['height'] ?? null;

if (!$weight || !$length || !$height) {
    echo 'Błąd! Nie wszystkie dane zostały przesłane.';
    exit;
}

if (strlen($weight) > 1 && strlen($height) > 1 && strlen($length) > 1) {
    $result = (int)$weight * (int)$height * (int)$length;
    if (($result / 112000) >= 1) {
        echo 'Twoja klatka pomieści ';
        $cage = round($result / 112000);
        echo $cage;
        if ($cage > 3) {
            echo ' szynszyli';
        } else {
            echo ' szynszyle';
        }
        echo ' i powinna mieć nie mniej niż ';
        $shelf = 1 + (round($result / 112000));
        echo $shelf;
        if ($shelf > 4) {
            echo ' półek';
        } else {
            echo ' półki';
        }
    } else {
        echo 'Twoja klatka nie nadaje się dla szynszyli';
    }
}
