<?php
include "websiteinc.php";
$usertype = $_REQUEST["usertype"];
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = md5($_REQUEST["pswd"]);
// $confirmpassword = $_REQUEST("confpswd");



$result = GetPageRecord('*', 'userMaster', 'status = 1 and email = "'.$email.'"');
 
if(mysqli_num_rows($result) >0){
        echo "<script> alert('User already exists!');</script>";
        echo "<script> window.location = 'signup.php';</script>";
        // exit(); // Stop the further execution
    // echo "Hola rrgjrgjorgjrojg";

}else{
$namevalue ='userType="'.$usertype.'",firstName="'.$name.'",email="'.$email.'",password="'.$password.'",status="0"';  
addlistinggetlastid('userMaster',$namevalue);
echo "<script>window.location.href = '$fullurl'</script>";
}
?>
