<?php
require 'ybo-sdfsdfbtd/src/Exception.php';
require 'ybo-sdfsdfbtd/src/PHPMailer.php';
require 'ybo-sdfsdfbtd/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["sendMailBtn"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = "Message from " . $name;
    $msg = $_POST['message'];

    // Prepare the email message in HTML format
    $message = "
    <html>
        <head>
            <title>" . $subject . "</title>
        </head>
        <body>
            <table width='90%' cellpadding='10' cellspacing='0' style='border:1px solid #aaa;text-align:left;font-size:15px;margin:2em; background-color:#ffffff; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th colspan='2' style='border:1px solid #aaa; text-align: center;background-color:#ffffff;'>
                            <img src='https://www.iprintu.ca/assets/img/logo.webp' style='max-height: 100px;' alt='IprintU logo'>
                        </th>
                    </tr>
                    <tr>
                        <th colspan='2' style='border:1px solid #aaa; text-align: center;'>CONTACT US FORM</th>
                    </tr>
                    <tr>
                        <th colspan='2' style='border:1px solid #aaa; color:maroon;'>" . $subject . "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style='border:1px solid #aaa'>Name:</th>
                        <td width='80%' style='border:1px solid #aaa'>" . $name . "</td>
                    </tr>
                    <tr>
                        <th style='border:1px solid #aaa'>E-mail:</th>
                        <td width='80%' style='border:1px solid #aaa'>" . $email . "</td>
                    </tr>
                    <tr>
                        <th style='border:1px solid #aaa'>Phone:</th>
                        <td width='80%' style='border:1px solid #aaa'>" . $phone . "</td>
                    </tr>
                    <tr>
                        <th style='border:1px solid #aaa'>Message:</th>
                        <td width='80%' style='border:1px solid #aaa'>" . $msg . "</td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>";

    // Set up PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0; // Disable debug output
        $mail->isSMTP(); // Use SMTP
        $mail->Host = 'localhost'; // SMTP server (use correct SMTP server if needed)
        $mail->SMTPAuth = false; // SMTP authentication (set to true if required)
        $mail->Username = 'info@c4solution.ca'; // Your email username
        $mail->Password = 'Biogenic123!'; // Your email password
        $mail->Port = 25; // SMTP port (use correct port if needed)
        $mail->IsSendmail();

        // Sender and recipient email addresses
        $mail->setFrom('info@c4solution.ca', 'c4 Solution');
        $mail->addAddress('info@c4solution.ca'); // Send to info@c4solution.ca
        $mail->addReplyTo($email, $name); // Reply-to address

        // Email subject and body
        $mail->isHTML(true);
        $mail->Subject = 'c4 Solution Contact Form - ' . $name;
        $mail->Body = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Send the email
        $mail->send();

        echo "<script>
            window.alert('Your Message has been sent successfully! Thank you.');
            window.location.href='contact-us.php';
        </script>";
    } catch (Exception $e) {
        echo "<script>
            window.alert('Your Message failed to send. Please try again later. Mailer Error: {$mail->ErrorInfo}');
            window.location.href='contact-us.php';
        </script>";
    }
}
?>
