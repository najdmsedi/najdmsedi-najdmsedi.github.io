<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '') {

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $username = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
            $file = $_POST['file'];
    
            $to = "najdmsedi22@gmail.com";
            $body = "";
    
            $body .= "Form: ".$username. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";
            $body .= "Fiile: ".$file. "\r\n";
    
            mail($to,$messageSubject,$body);

            $message_sent = true ;
        }
        
    }
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <form action="index.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">File</label>
                <input type="File" class="form-control" id="file" name="file" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
</body>

</html>