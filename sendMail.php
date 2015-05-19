<?php
session_start();
require 'components/PHPMailer/PHPMailerAutoload.php';
$message;
function sendMail($mailbody){
    $mail = new PHPMailer;
    // $mail->SMTPDebug = 1;
    $mail->isSMTP();
    $mail->Host = "smtp.163.com";
    $mail->SMTPAuth = true;
    $mail->Username = "whitewebsite@163.com";
    $mail->Password = "1e2e3e1e2e3e";
    $mail->Port=25;
    // $mail->SMTPSecure = "ssl";
    $mail->From = "whitewebsite@163.com";
    $mail->FromName = "CITY_OSTRICH";
    $mail->isHTML(true);
    $mail->addAddress("magichongru@126.com");
    $mail->Subject = "website message";
    $mail->Body = $mailbody;
    if(!$mail->Send()){
        return false;
    } else {
        return true;
    }
    // return true;
}
if(isset($_POST['code'])){
    $code = $_POST['code'];
    if(strtolower($_SESSION['authnum_session']) != $code){
        $message = array('code'=>1,'msg'=>'验证码错误');
    } else {
        session_destroy();
        $message = $_POST['message'];
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $phone = $_POST['phone'];
        $mailmessage = 'name: '.$name.'<br />email: '.$email.'<br />phone: '.$phone.'<br />message: '.$message;
        if(sendMail($mailmessage)){
            $message = array('code'=>2, 'msg'=> '发送成功');
        } else {
            $message = array('code'=>1, 'msg'=> '发送失败');
        }
    }
} else {
    $message = array('code'=>1, 'msg'=>'输入验证码');
}
echo json_encode($message);
?>