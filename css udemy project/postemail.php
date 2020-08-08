<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Post Email</title>
</head>
<body>
    
    <?php
        $myEmailAddress = "muraligopal@gmail.com";
        $subject = "Question from Just Do It!";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $header = "from: $name <$email>";

        mail($myEmailAddress, $subject, $message, $header);

    ?>
    <p>Thanks for Sending.</p>
</body>
</html>