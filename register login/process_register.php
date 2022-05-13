<?php

include "./PHPMailer-master/src/PHPMailer.php";
include "./PHPMailer-master/src/Exception.php";
include "./PHPMailer-master/src/OAuth.php";
include "./PHPMailer-master/src/POP3.php";
include "./PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['checkbox'])) {
    if (isset($_POST['btn_account'])) {
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        //B1: kết nối
        if ($pass == $repass) {


            include('../configs/database.php');
            //B2 truy cập
            $sql_1 = "SELECT * FROM user WHERE email = '$email'";
            $res_1 = mysqli_query($conn, $sql_1);
            //email đã tồn tại
            if (mysqli_num_rows($res_1) > 0) {
                $values = "existed";
                header("location:register.php?response=$values");
            } else {
                //email chưa tồn tại
                // $std = rand();
                // $code = md5($std);
                // $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql_2 = "INSERT INTO `user`(`fisrt_name`, `last_name`, `username`, `email`, `phone`, `address`, `pass`) VALUES ('$firstname','$lastname','$username','$email','$phone','$address','$pass')";
                $result_2 = mysqli_query($conn, $sql_2);

                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'phamthokd19@gmail.com';                 // SMTP username
                    $mail->Password = 'Nghia12345';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                    //Recipients
                    $mail->setFrom('phamthokd19@gmail.com', 'Kích hoạt tài khoản');
                    
                        $mail->addReplyTo('phamthokd19@gmail.com', 'Kích hoạt tài khoản');
                        
                        $mail->addAddress($email); // địa chỉ người nhận

                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                    //Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Here is the subject';
                    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
                if ($result_2 > 0) {
                    $values = "success";
                    header("Location:register.php?response=$values");
                }
            }
        } else {
            $values = "fail";
            header("location:register.php?response=$values");
        }
    }
} else {
    $values = "error";
    header("location:register.php?response=$values");
}
