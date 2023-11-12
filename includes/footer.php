<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="footer">
        <div class="hours">
            <h3>Åbningstider</h3>
            <p>Man-fre: 9:30-17:30</p>
            <p>Lørdag: 9:00-17:30</p>
            <p>Søndag: Lukket</p>
        </div>
        <div class="contact">
            <h3>Kontakt</h3>
            <p>Adresse:</p>
            <p>Mobil:</p>
            <p>E-mail:</p>
        </div>
        <div class="mapping">
            <h3>Site mapping</h3>
            <a href="/dwp/index"><p>Forside</p></a>
            <a href="/dwp/flowers"><p>Blomster</p></a>
            <a href="/dwp/wine"><p>Vin</p></a>
            <a href="/dwp/snacks"><p>Snacks</p></a>
            <a href="/dwp/contact"><p>Kontakt</p></a>
            <a href="/dwp/cart"><p>Kurv</p></a>
            <a href="/dwp/login"><p>Login</p></a>
            <a href="/dwp/signup"><p>Registrer</p></a>
        </div>
    </section>
</body>
</html>

<style>

    a {
        color: white;
        font-family: sans;
        font-size: 15px;
    }

    h3 {
        font-size: 30px;
        font-family: sans-serif;
        font-weight: bold;
    }

    p {
        font-size: 20px;
    }

    .footer {
        height: 300px;
        width: 100vw;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
        background-color: #5B0025;
        color: white;
    }


    .hours {
        width: 33%;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .contact {
        width: 33%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .mapping {
        width: 33%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>