




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="contactinfo">
        <?php require("includes/header.php") ?>
        <div class="contactdiv">
            <div class="contact_info">
                <div class="heading">
                    <h1>Kontakt</h1>
                    <p>Blomsterhuset Ribe</p>
                </div>
                <div class="content">
                    <h3>Kontakt</h3>
                    Adresse:
                    Mobil:
                    E-mail:

                    <h3>Åbningstider</h3>
                    <p>Mandag-Fredag:</p>
                    <p>Lørdag:</p>
                    <p>Søndag</p>

                </div>
                
                <p>Mobil</p>
            </div>
            <div class="contact_form">
            <?php require("contact_form.php")?>        
            <?php require("contact_pro.php")?>
            <?php require("send_mail.php")?>
            </div>
        </div>
        <?php require("includes/footer.php") ?>
    </section>
    

    
    
</body>
</html>

<style>
.contactinfo {
    height: 85vh;
    width: 100vw;
}


.contactdiv {
    height: 85vh;
    width: 100vw;
    display: flex;
    flex-direction: row;

}

.contact_info, .contact_form {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}



</style>