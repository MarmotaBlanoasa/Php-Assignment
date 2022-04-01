<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Contact Us</h1>
        <form action="contact.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your Full Name">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your Email">
            <label for="details">DETAILS</label>
            <input type="text" id="details" name="details" placeholder="Enter your Project Details">
            <button type="submit" name="submit">SEND MESSAGE</button>
        </form>
        <div class="icons">
        <img src="./icons/instagram.png" alt="instagram">
        <img src="./icons/twitter.png" alt="twitter">
        <img src="./icons/youtube.png" alt="youtube">
        </div>
    </div>
</body>
</html>