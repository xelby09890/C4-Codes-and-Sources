<?php

if (isset($_POST["sendMailBtn"])) {
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $to = "info@.com";
     $domain = "com";

     $name = $_POST['fullname'];
     $phone = $_POST['phone'];
     $location = $_POST['location'];
     $destination = $_POST['destination'];
     $availbleDate = $_POST['availble-date'];
     $availbleTime = $_POST['availble-time'];
     $messages = $_POST['msg'];
     $subject = "Message from ". $name;

     $message = "
     <html>
          <head>
          <title>".$subject."</title>
          </head>
          <body>
               <table width='90%' cellpadding='10' cellspacing='0' style='border:1px solid #aaa;text-align:left;font-size:15px;margin:2em; background-color:#e8fdfb; border-collapse: collapse;'>
                    <thead>
                         <tr>
                              <th colspan='2' style='border:1px solid #aaa; text-align: center; background-color: #85cdfd;'>
                                   <img src='https://www.com/images/logo/-logo.png' style='max-width: 250px;' alt=' logo'>
                              </th>
                         </tr>                      
                         <tr>
                              <th colspan='2' style='border:1px solid #aaa; text-align: center;'>Contact Us Form</th>
                         </tr>                    
                         <tr>
                              <th colspan='2' style='border:1px solid #aaa; color:maroon;'>".$subject."</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <th style='border:1px solid #aaa'>Name:</th>
                              <td width='80%' style='border:1px solid #aaa'>".$name."</td>
                         </tr>
                         <tr>
                              <th style='border:1px solid #aaa'>Phone:</th>
                              <td width='80%' style='border:1px solid #aaa'>".$phone."</td>
                         </tr>
                         <tr>
                              <th style='border:1px solid #aaa'>Location:</th>
                              <td width='80%' style='border:1px solid #aaa'>".$location."</td>
                         </tr>          
                         <tr>
                              <th style='border:1px solid #aaa'>Destination:</th>
                              <td width='80%' style='border:1px solid #aaa'>".$destination."</td>
                         </tr>                     
                         <tr>
                              <th style='border:1px solid #aaa'>availble Date:</th>
                              <td width='80%' style='border:1px solid #aaa'>".$availbleDate."</td>
                         </tr>
                         <tr>
                              <th style='border:1px solid #aaa'>availble Time:</th>
                              <td width='80%' style='border:1px solid #aaa'>".$availbleTime."</td>
                         </tr>
                         <tr>
                              <th style='border:1px solid #aaa'>Message:</th>
                              <td width='80%' style='border:1px solid #aaa'>".$messages."</td>
                         </tr>
                    </tbody>
               </table>
          </body>
     </html>
     ";
     

     $headers .= 'From: ' . $name . '<' . $domain . '>' . "\r\n".
    $headers .='Reply-To: '. $email . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    // Always set content-type when sending HTML email
    $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   

     // $headers .= "X-Mailer: PHP/" . phpversion();
     // $headers .= 'Cc: nicebutfirm01@gmail.com' . "\r\n";

     $mail = mail($to, $subject, $message, $headers);

     if ($mail){
          echo "<script>
                    window.alert('Your Message has been sent successfuly! Thank you.');
                    window.location.href='index.php';
              </script>";
     //    echo '<script>window.location.href="contact-us.php?msgsent=0";</script>';
     } else {
          echo "<script>
                    window.alert('Your Message failed to send. Please try again later.');
                    window.location.href='index.php';
              </script>";
     //    echo '<script>window.location.href="contact-us.php?msgsent=Message Sending Failed.<br/>' . $mail->ErrorInfo . '";</script>';
     }
}
?>
