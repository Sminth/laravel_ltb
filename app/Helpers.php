<?php


function getPrice($prixendecimal)
{
    $prix=floatval($prixendecimal)/1000;
    return number_format($prix,3,',','');
}
function getGoodPrix($prixendecimal)
{
    $prix= filter_var($prixendecimal, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    return $prix;
}
?>
