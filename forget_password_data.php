<?php

include "websiteinc.php";
if(isset($_POST['button'])) {
$rand = md5(rand(100,999));
$email = $_REQUEST['email'];
$subject = "Password reset link";
$message = "Click on the given link to restore or reset your password: https://tripcrm.in/BindaazHoliday/change_password.php?token=$rand&email=$email";
$headers = "From:zain@gmail.com";
$result = GetPageRecord('*', 'userMaster', 'email="'.$email.'"');

if(mysqli_num_rows($result)>0){
    
    // echo '<script>alert("Email not found in our database")</script>';
    mail($email, $subject, $message, $headers);
    $where='email="'.$email.'"';
    updatelisting('userMaster', 'tokenNumber="'.$rand.'"', $where);
    echo '<script>alert("Password reset link is sent successfully! Please check your email.")</script>'; 
    
}else{
    echo '<script>alert("Email not found in our database ")</script>';
    echo '<script>location.href = "https://tripcrm.in/BindaazHoliday/forget_password_data.php"</script>';
}
}
?>
