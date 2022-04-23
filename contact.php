<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
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
            
            <form method="post" action="contact.php">
                <textarea name="message"></textarea>
                <input type="submit">
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