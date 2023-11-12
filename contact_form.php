<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
    <form method="post" action="contact.php">
        <div class="section1">
            <div class="mini">
                <input class="forminput" type="hidden" name="action" value="validate">
                Name: <input class="forminput" type="text" name="name">
                Lastname: <input class="forminput" type="text" name="lastname">
                Email: <input class="forminput" type="text" name="email">
            </div>
            <div class="message">
                Subject: <input class="forminput" type="text" name="subject">
                Message: <textarea class="msgdesign" name="message" cols="40" rows="15"></textarea>
            </div>
            <div class="btn1">
                <input class="btn2" type="submit" name="submit" value="Submit">
            </div>
        </div>
    </form>
    

    <!-- fejl og success der er defineret i filen "contact_pro.php", bliver eksikveret her, og vist på kontaktsiden -->
    <?php
    include 'contact_pro.php';

    if (isset($errorMessages) && count($errorMessages) > 0) {
        echo '<div class="error-messages">';
        foreach ($errorMessages as $error) {
            echo '<p>' . $error . '</p>';
        }
        echo '</div>';
    }

    if (isset($successMessage)) {
        echo '<p class="success-message">' . $successMessage . '</p>';
    }
    ?>
</body>
</html>

<style>
    body{
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 100vw;
    }

    .section1 {
        width: 30vw;
        

    }

    .mini {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
        gap: 10px;
    }

    .email {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
    }
    
    .message {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
        gap: 10px;
    }

    .btn1{
        display: flex;
        justify-content: center;
        margin-top: 20px;
        
    }

    .btn2 {
        background-color: #311465;
        width: 150px;
        height: 70px;
        color: white;
        font-size: 15px;
        font-weight: bold
    }

    .forminput {
        height: 30px;
        border-radius: 20px;
        border-style: solid;
        border-width: 5px;
        border-image: linear-gradient(to bottom right, #d34dd2, #8b008b , #311465) 1;
    }

    .msgdesign {
        border-radius: 20px;
        border: solid 5px;
        border-image: linear-gradient(to bottom right, #d34dd2, #8b008b , #311465) 1;

    }



</style>
