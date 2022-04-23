<?php

if($_POST["submit"]) {
    $recipient="alexischambers.dev@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="topBar">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="intro">
            <h1 class="bigText">Interested in working with me? </h1>
            <p class="smallText">Don't be shy! Feel free to reach out by filling out the form below.</p>
        </div>
        <div class="contactBody">
            <div class="profileImg">
                <img src="">
            </div>
            
            <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
            
        </div>
        <div class="footer">
            <div class = "footerContent">
                <div class = "footText">Alexis Chambers</div>
                <div class = "socialIcons">
                    <a href="#"><img class = "icon" src = "#"></a>
                    <a href="#"><img class = "icon" src = "#"></a>
                    <a href="#"><img class = "icon" src = "#"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>