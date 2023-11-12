<?php require("includes/header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="section1">
        <div class="trigger">
            <div class="text1">
                <h1>Velkommen til blomsterbiksen!</h1>
            </div>
            <div class="text2">
                <p>Kan mærkedagene også smutte for dig? Vi hjælper dig! Tilmeld dig og få påmindelser</p>
            </div>
            <div class="fbutton">
                <a class="frontbutton" href="/signup.php">Tilmeld</a>
            </div>
        </div>

    </section>
    <section class="section2">
        <div class="news"></div>
        <div class="daily"></div>
    </section>
    <section class="section3">
        <div class="presentation"></div>
    </section>
    <section class="section4"></section>
</body>
</html>
<?php require("includes/footer.php") ?>



<style>

h1 {
    font-family:sans-serif;
    color: #FFF9FC;
}

/* Billeder er lagt ind i CSS og ikke HTML, da billederne er lettere at integrere og redigere i CSS*/

/*Styling af section 1.*/
.section1 {
    height: 85vh;
    width: 100vw;
    display: flex;
    background-image: url("img/blomster_givning.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    justify-content:center;
    flex-direction: column;
    
}

.cover_pic {
    height: 90vh;
    width: 100vw;
}


.trigger {
    height: 80%;
    width: 70%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}


.text1 {
    height: 15%;
    width: 60%;
    display: flex;
    justify-content: center;
    font-size: 30px;
}

.text2 {
    height: 15%;
    width: 60%;
    display: flex;
    justify-content: center;
    font-size: 20px;
    font-weight: bold;
    color:white;
}

.fbutton {
    height: 15%;
    width: 60%;
    display: flex;
    justify-content: center;
}

.frontbutton {
    background-color: #5B0025;
    color: white;
    font-weight: bold;
    width: 100px;
    height: 75px;
    border:none;
    transition: 1s;
    display: flex;
    justify-content: center;
    align-items: center;
}

.frontbutton:hover {
    transform: scale(1.2);
    transition: 1s;
    background-color: white;
    color: black;
}

/*PHP trigger for inline CSS*/
<?php

$activateAnimation = true;
// følgende definere effect af elementerne, samt tidspunkt effekten sker

if ($activateAnimation) {
    echo '.text1 {
        animation: slideInBounce 1.4s ease-in-out;
    }';
    echo '.text2 {
        animation: slideInBounce 1.2s ease-in-out;
    }';
    echo '.fbutton {
        animation: slideInBounce 1s ease-in-out;
    }';
}


?>

/*Keyframes definere hvor på siden elementerne skal være*/

@keyframes slideInBounce {
    0% {
        transform: translateY(-600%);
    }
    60% {
        transform: translateY(0);
    }
    75% {
        transform: translateY(-15px); /* Adjust the bounce height as needed */
    }
    100% {
        transform: translateY(0);
    }
}

</style>
