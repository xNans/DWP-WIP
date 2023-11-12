<?php

$myemail = "nannamc@live.dk";
$errorMessages = [];
$successMessage = "";


// Jeg har brugt "REQUEST_METHOD" for at definere at formen skal behandling det skrevne tekst i felterne som POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Jeg har brugt htmlspecialchars for at undgå injection i min kontaktform. htmlspecialchar konvertere
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);


    //Jeg har brugt $regxp, for at sikre korrekt indtastning i min kontaktform. denne metode minimere fejlindtastninger, og er med til at -
    //sikre, at den korrekte information bliver sendt.

    // Dette stykke kode definere hvilke tegn der må bruges, ved indtastning af e-mail. 
    // Dette glælder både at der må bruges bogstaver,tal og tegn, men også at der skal bruges et "@" og få bogstaver efter "."
    $regxp = "/^[A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_-]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
    
    //Denne regxp definere hvad der må bruges til at skrive navne. Her må der bruges kapitalbogstaver, og kun bogstaver.
    $nameregxp = "/^[A-zøæå-]+$/";

    

    //Alle følgende beskeder bliver vist på kontaktsiden på min hjemmeside

    //Jeg har her defineret kriterier for indtastning i min kontaktformular. Dette er baseret på min $regxp, og hvorvidt et felt er tomt
    //eller tekst for kort. Dette hjælper brugeren til at rette mulige fejl ved sin indtastning af information

    if (!preg_match($regxp, $email)) {
        $errorMessages[] = "Wrong email";
    }

    if (empty($email) || empty($message) || empty($subject)) {
        $errorMessages[] = "Empty field";
    }

    if (strlen($message) <= 3) {
        $errorMessages[] = "Message too short";
    }

    //Når man indsendt informationen igennem min kontaktformular, får med feedback: er beskeden sendt korrekt, eller er der sket en fejl i processen

    if (count($errorMessages) == 0) {
        $body = "$message\n\nE-mail: $email";
        if (mail($myemail, $subject, $body, "from: $email\n")) {
            $successMessage = "Thanks for your email";
        } else {
            $errorMessages[] = "Error sending email. Please try again later.";
        }
    }
}

?>