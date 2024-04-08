<?php
include "websiteinc.php";
$email = $_REQUEST['email2'];
$password = md5($_REQUEST['password2']);
session_start();



$result = GetPageRecord("*", "userMaster", 'email = "'.$email.'" and password = "'.$password.'"');

// $result = GetPageRecord("*", "userMaster", 'email = "'.$email.'" and password = "'.$password.'"');
// if (mysqli_num_rows($result)>0){
    
//     $row = mysqli_fetch_array($result);
//     if($row['status'] == 1){

//         $_SESSION['userNames'] = $row['firstName'];
//         $_SESSION['usertype'] = $row['userType'];
//         echo '<script>alert("logged in! '.$row['firstName'].'")</script>';
//         echo '<script>window.location.href = "https://tripcrm.in/BindaazHoliday/"</script>';
//     }else if( $row['userType'] == 0){
//         echo '<script>alert("Your account needs to be activated!")</script>';
//         echo '<script>location.href = "signup.php"</script>';
//     }else if($row['status']==0 && $row['usertype'] == 1){
        //     $_SESSION['userNames'] = $row['firstName'];
        // $_SESSION['usertype'] = $row['userType'];
//             echo '<script>alert("logged in! '.$row['firstName'].'")</script>';
//             echo '<script>window.location.href = "https://tripcrm.in/BindaazHoliday/"</script>';
//         }
//     }
// else{
    //     echo '<script>alert("Incorrect  Email or Password")</script>'; 
    //     echo '<script>window.location.href = "https://tripcrm.in/BindaazHoliday/signup.php"</script>';
    // }
    
    
    if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    // if($row['status']==1 ){
    //     // if($row['userType']==1){
    //     echo '<script>alert("logged in! '.$row['firstName'].'")</script>'; 
    //     echo '<script>window.location.href = "https://tripcrm.in/BindaazHoliday/"</script>';
    //     // }
    // }
    if(($row['status']==0 && $row['userType']==1) || $row['status']==1){
            $_SESSION['userNames'] = $row['firstName'];
            $_SESSION['usertype'] = $row['userType'];
        echo '<script>alert("logged in! '.$row['firstName'].'")</script>'; 
        echo '<script>window.location.href = "https://tripcrm.in/BindaazHoliday/"</script>';
    }else if($row['userType']==0 &&  $row['status']==0) {
        echo '<script>alert("Your account needs to be activated!")</script>';
        echo '<script>location.href = "signup.php"</script>';
    }
}else{
        echo '<script>alert("Incorrect  Email or Password")</script>'; 
        echo '<script>window.location.href = "https://tripcrm.in/BindaazHoliday/"</script>';
    }
