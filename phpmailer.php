<?php
  
   require 'PHPMailer/PHPMailerAutoload.php';
  
    if(isset($_POST['submit'])){
        $name=$_POST['name']; // Get Name value from HTML Form
        $phone=$_POST['phone'];  // Get phone No
        $email=$_POST['email'];  // Get Email Value
        $query=$_POST['query']; // Get query Value
          
          
        $mail = new PHPMailer();  

        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com"; // Your Domain Name
        $mail->SMTPAuth = true;
        $mail->Username = "example@gmail.com"; // Your Email ID
        $mail->Password = "secret"; // Password of your email id
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 

        $mail->setFrom = "$email,$name";
        $mail->AddAddress ("example@gmail.com", "Your name"); // On which email id you want to get the query
        
          
        $mail->IsHTML(true);
          
        $mail->Subject = "Query from user " .$name; // This is your subject
          
        // HTML query Starts here
          
        $mail->Body = "
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Phone No: </strong></td>
                            <td style='width:400px'>$phone</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Query: </strong></td>
                            <td style='width:400px'>$query</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML query Ends here
              
        if(!$mail->send()) {
            // query if mail has been sent
            echo "<script>
                alert('Submission failed.');
            </script>";
        }
        else {
            // query if mail has been not sent
            echo "<script>
                alert('Email has been sent successfully.
                       Thankyou for contacting with us');
            </script>";
            ?>
            <meta http-equiv="refresh" content="1;url=index.php"/>
            <?php
        }
    }
?>
