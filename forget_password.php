<!DOCTYPE html>
<html>
  <head>
    <title>Login form</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="santosh jha"/>
    <meta name="keywords" content="log in, contact form, clean form, simple form"/>
    <meta name="description" content="beautiful log in form"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        :root{
        margin:0;
        padding:0;
        }
        body{
        background:#dfe6e9;
        font-size:18px;
        font-family:helvetica,verdana,sans-serif;
        color:#ddd;
        font-weight:bold;
        }
        .container{
        width:600px;
        padding:50px;
        margin:0 auto;
        
        background: -webkit-linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));
        background: linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));

        box-shadow:0 4px 10px 0 rgba(0,0,0,.5);
        }
        input[type="email"],
        input[type="password"]{
        display:block;
        width:400px;
        padding:8px;
        margin:20px 0;
        border:1px solid #ddd;
        border-radius:5px;
        font-family:monaco,monospace;
        font-size:14px;
        background:rgba(255,255,255,0.5);
        outline:2px solid white;
        outline-offset:5px;
        color:white;
        font-weight:bold;
        letter-spacing:2px;
        
        }
        fieldset{
        border:2px solid rgba(255,255,255,0.5);
        padding:80px;
        }
        legend{
        text-align:center;
        text-transform:capitalize;
        padding:8px;
        border-radius:5px;
        color:rgba(255,255,255,0.8);
        background:rgba(255,255,255,0.5);
        font-weight:bolder;
        font-size:1.5em;
        }
        input[type="submit"] {
        display:block;
        width:420px;
        padding:10px;
        font-size:1.1em;
        margin:40px 0;
        border:1px solid #ddd;
        font-weight:bold;
        background:rgba(255,255,255,0.5);
        color:white;
        border-radius:5px;
        outline:2px solid white;
        outline-offset:5px;
        
        }
        input[type="submit"]:hover{
        box-shadow:0 4px 15px 8px rgba(0,0,0,0.5);
        cursor:pointer;
        }
        input::placeholder{
        color:white;
        }
        input:focus{
        outline:2px solid #EF9A9A;
        }
        label{
        text-transform:capitalize;
        letter-spacing:2px;
        color:rgba(255,255,255,0.8);
        }
        p{
        text-align:center;
        margin:-30px 0 15px;
        padding:8px;
        color:#74b9ff;
        }
        span{
        display:inline-block;
        width:30px;
        height:30px;
        line-height:30px;
        background:white;
        border-radius:50%;
        }
        .font{
        width:100%;
        font-size:2.5em;
        text-align:center;
        }
        .font i:hover {
        opacity:0.8;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="forget_password_data.php" method="post">
        <fieldset>
          <legend>Enter your Email</legend>
          <label for="email">Email id :</label>
          <input type="email" name="email" id="email" placeholder="user@abc.com"/>
          <input type="submit" name="button" value="Send link to Email"/>
          <hr/>
        </fieldset>
      </form>
    </div>
  </body>

  <script>
    // function link(){
    //     var email = document.getElementById("email").value;
    //     $subject = "Password reset link";
    //     $message = "Click on the given link to restore or reset your password: https://tripcrm.in/BindaazHoliday/change_password.php";
    //     $headers = "From: zain@gmail.com";
    //     mail($email,$subject,$message,$headers);

    // }
  </script>
</html>
