<?php

    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])){
        $fname = $POST['fname'];
        $lname = $POST['lname'];
        $mail=$POST['email'];
        $message $_POST['message'];

        require_once ="PHPMailer/PHPMailer.php";
        require_once ="PHPMailer/SMTP.php"
        require_once ="PHPMailer/Exception.php"
    }

    $mail = new PHPMailer();

    $mail -> isSMTP();
    $mail -> Host = "smtp.gmail.com";
    $mail -> SMTPAith = true;
    $mail -> Username = "mmbalbuena90@gmail.com";
    $mail -> Password = 'asero09282322439'; 
    $mail -> PORT =465;
    $mail -> SMTPSecure = "ssl";


    $mail ->isHTML(true);
    $mail ->setFrom($email, $name);
    $mail ->addAddress("mmbalbuena90@gmail.com");
    $mail ->Body = $message;



    $email_from = 'manuelcbalbuena@yahoo.com';

    $email_subject = 'New Form Submission';


    $email_body = 'User Name: $fname.\n'.
                    'User Email: $visitor_email.\n'
                        'User Message: $message.\n';

    $to = "mmbalbuena@up.edu.ph";

    $headers = "From: $email_from \r\n"

    $headers .= "Reply-To: $visitor_email \r\n"

?>