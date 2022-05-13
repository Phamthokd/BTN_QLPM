<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'sendEmailv1/Exception.php';
    require 'sendEmailv1/PHPMailer.php';
    require 'sendEmailv1/SMTP.php';
    // echo '<pre>';
    // echo print_r($_POST);
    // echo '</pre>';
    // Nhận giá trị từ FORM register gửi sang:
    $firstname  = $_POST['firstName'];
    $phone      = $_POST['phone'];
    $address      = $_POST['address'];
    $email      = $_POST['email'];
    $pass1      = $_POST['pass1'];
    $pass2      = $_POST['pass2'];
    // Kiểm tra pass1 === pass2 (Javascript kiểm tra luôn)
    // QUY TRÌNH 4 (3) bước
    // Bước 01:
    include('../config/db.php');

    // Bước 02: Thực hiện các truy vấn
    // 2.1 - Kiểm tra Email này đã tồn tại chưa?
    $sql_1 = "SELECT * FROM user WHERE email='$email'";
    $result_1 = mysqli_query($conn,$sql_1);

    if(mysqli_num_rows($result_1) > 0){
        $value='existed';
        header("Location:logup.php?response=$value");
    }else{
        // 2.2 - Nếu ko tồn tại thì mới LƯU
        // Băm mật khẩu
        $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
        $sql_2 = "INSERT INTO user(fisrt_name, phone, address, email, pass) VALUES ('$firstname', '$phone', '$address', '$email','$pass_hash')";
        $result_2 = mysqli_query($conn,$sql_2); //Vì lệnh thực hiện là INSERT: kết quả trả về của $result_2 là SỐ BẢN GHI CHÈN THÀNH CÔNG (SỐ NGUYÊN)
        // Instantiation and passing `true` enables exceptions

        $mail = new PHPMailer(true);

                    try {
                    //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
                        $mail->isSMTP();// gửi mail SMTP
                        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
                        $mail->SMTPAuth = true;// Enable SMTP authentication
                        $mail->Username = 'transinh1642001@gmail.com';// SMTP username
                        $mail->Password = '0904790860tranvansinh'; // SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                        $mail->Port = 587; // TCP port to connect to
                        $mail->CharSet = 'UTF-8';
                        //Recipients
                        $mail->setFrom('transinh1642001@gmail.com', 'Kích hoạt tài khoản');
                    
                        $mail->addReplyTo('transinh1642001@gmail.com', 'Kích hoạt tài khoản');
                        
                        $mail->addAddress('transinh1642001@gmail.com'); // địa chỉ người nhận
                        
                        // Attachments
                        // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
                        //$mail->addAttachment('pdf/Giay_bao_mat_sau.pdf'); // Optional name
                    
                        // C0ontent
                        $mail->isHTML(true);   // Set email format to HTML
                        $tieude = '[Đăng kí tài khoản] kích hoạt tài khoản người sử dụng';
                        $mail->Subject = $tieude;
                        
                        // Mail body content 
                        $bodyContent = '<p>Chào mừng bạn</b></h1>'; 
                        $bodyContent .= '<p>bạn vui lòng nhấp vào đây để kích hoạt tk</p>';
                        $bodyContent .= '<p><a href="http://localhost:88/BTL_CSE/register/create_infor.php?accout='.$email.'&code='.$code.'">click</a></p>';
                        
                        $mail->Body = $bodyContent;
                        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        if($mail->send()){
                            echo 'Thư đã được gửi đi';
                        }else{
                            echo 'Lỗi. Thư chưa gửi được';
                        }  
                
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }

        if($result_2 > 0){
            $value='successfully';
            header("Location:logup.php?response=$value");
        }
    }
    

?>