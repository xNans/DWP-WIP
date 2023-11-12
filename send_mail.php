<?php

//Denne function validere min indskrevne e-mail til, til test af kontaktformen
$email = "nannamc@live.dk";

function isValidEmail($email) {
    $regxp = "/^[A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_-]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
    return preg_match($regxp, $email);
}

?>