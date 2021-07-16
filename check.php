<?php 
    $email = $_POST['email'];
    $message = $_POST['message'];
    $error_email = '';
    $error_message = '';
    $error_message_len = '';
    
    if(trim($email) == ''){
        $error_email = 'enter your email';
    }
    
    if(trim($message) == ''){
        $error_message = 'enter your message';
    }
    
    if(strlen($message) < 10){
        $error_message_len = 'message should be more than 10 symbols';
    }
    
    if ($error_email != '' or $error_message != '' or $error_message_len != ''){
        if ($error_email != '') {echo $error_email.'</br>';}
        if ($error_message != '') {echo $error_message.'</br>'; exit;}
        if ($error_message_len != '') {echo $error_message_len; exit;}
        exit;
    }
    
    $subject = "=?utf-8?B?".base64_encode("test_message")."?=";
    
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    
    mail('rens2588@gmail.com', $subject, $message, $headers);
    
    header('Location: /PhpProjectNew/index.php');
