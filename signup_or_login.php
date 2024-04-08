<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
  *{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  .heading{
    background-color: #000;
    /* color: white; */
  }

  .a001{
    background-color: #000;
    color: #fff !important;
  }
</style>

<!-- <button>Return to home</button> -->
<h1 class="heading">Hello login or create an account Please!</h1>
<div class="main0">

    <div class="main">
        <input type="checkbox" id="chk" >
      
      <div class="signup" >
        <form onsubmit="return data()" action="signupdata.php">
          <!-- <div class="closeouter">
            <i class="close fa fa-times" aria-hidden="true" onclick="closeSignupForm()"></i>
          </div> -->

          <label class="a001" for="chk">Sign up</label>
          <select name='usertype' id="select">
            <option value="usertype">User Type</option>
            <option value="0">Admin</option>
            <option value="1">Guest</option>
          </select>
          <input type="text" id="name" name="name" placeholder="User name">
          <input id="email" name="email" placeholder="Email" >
          <input type="password" id="password" name="pswd" placeholder="Password" >
          <input type="password" id="confirmpassword" name="confpswd" placeholder="Confirm Password">
          <button type="submit">Sign up</button>
        </form>
        <!-- <button onclick="closeSignupForm()">close form</button> -->
      </div>
      
      <div class="login">
        <form onsubmit="return data2()" action="logindata.php">
          <label for="chk">or Login</label>
          <input type="email" id="email2" name="email2" placeholder="Email" >
          <input type="password" id="password2" name="password2" placeholder="Password">
          <button type="submit" style="background-color:orange;">Login</button>
        </form>
        <div style="bottom:0; ">
          <h4 style="color:black; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">New User? Create Account</h4>
          <button onclick="location.reload()">Sign up</button>
          <h4 style="color:black; text-align:center;">Forget Password?</h4>
          <a href="forget_password.php"><button>Change it!</button></a>
        </div>
      </div>
    </div>
  </div>

  <style>
    /* body{
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: 'Jost', sans-serif;
      background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
    } */

    body{
        /* background-image: radial-gradient(); */
        background: -webkit-linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));
        background: linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));
        /* object-fit: cover; */
        background-size: cover;
        color: white;
        /* height: 100%; */
        background-repeat: no-repeat;
    }
    h1{
        /* display: block; */
        text-align: center;
    }
    .main0{
      width: fit-content;
      display: flex;
      /* align-items: center; */
      display: block;
      /* transform: scale(1.2); */

    }
    .main{
      justify-content: center;
      /* display: none; */
      margin-left: 490px;
      /* transform: translate(0, -50px); */
      width: 350px;
      height: 500px;
      backdrop-filter: blur(10px);
      /* background-color: red; */
      position: absolute;
      z-index: 1000;
      /* margin-left: 500px; */
      /* display: none; */
      overflow: hidden;
      /* background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover; */
      border-radius: 10px;
      box-shadow: 5px 20px 50px #000;
    }

    .closeouter{
      width: 100%;
      display: flex;
      justify-content: end;
    }

    .close{
      padding: 5px;
      font-size: 23px;
      margin: 5px;
      /* border: 1px solid black; */
      border-radius: 100%;
      /* width: fit-content; */
    }

    .main input{
      padding: 10px;
      transform: scale(1.2);
    }
    
    .close:hover{
      cursor: pointer;
      right:0%;
      background-color: #ff7300;
      color: wheat;
    }
    
    #chk{
      display: none;
    }
    .signup{
      /* position: relative; */
      width:100%;
      height: 100%;
      
      background: -webkit-linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));
        background: linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));
    }
    .signup label, .login label{
      color: #ff7300;
      font-size: 2.3em;
      justify-content: center;
      display: flex;
      margin: 10px;
      font-weight: bold;
      cursor: pointer;
      transition: .5s ease-in-out;
    }
    .signup input, .login input{
      width: 60%;
      height: 20px;
      background: #e0dede;
      justify-content: center;
      display: flex;
      margin: 20px auto;
      padding: 10px;
      border: none;
      outline: none;
      border-radius: 5px;
    }

    #select{
        width: 80%;
      /* height: 20px; */
      background: #e0dede;
      justify-content: center;
      display: flex;
      margin: 20px auto;
      padding: 18px 10px;
      /* padding-top: 20px;
      padding-bottom: 20px; */
      border: none;
      color: black;
      outline: none;
      border-radius: 5px;
    }


    .signup button, .login button{
      width: 60%;
      height: 40px;
      margin: 10px auto;
      justify-content: center;
      display: block;
      color: #fff;
      background: #ff7300;
      font-size: 1em;
      font-weight: bold;
      margin-top: 20px;
      outline: none;
      border: none;
      border-radius: 5px;
      transition: .2s ease-in;
      cursor: pointer;
    }
    .signup button:hover , .login button:hover{
      background: darkorange;
    }
    .login{
      height: 760px;
      
      background: -webkit-linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));
        background: linear-gradient(101deg, rgb(36, 148, 248), rgb(183, 28, 239));
      border-radius: 60% / 10%;
      transform: translateY(-65px);
      transition: .8s ease-in-out;
    }
    .login label{
      color: #fff;
      transform: scale(.6);
    }
    
    #chk:checked ~ .login{
      transform: translateY(-570px);
    }
    #chk:checked ~ .login label{
      transform: scale(1);	
    }
    #chk:checked ~ .signup label{
      transform: scale(.6);
    }
  
  </style>
</body>
  <script>
    function data(){
        var name =document.getElementById("name").value;
        var email =document.getElementById("email").value;
        var password =document.getElementById("password").value;
        var confirmpassword =document.getElementById("confirmpassword").value;
        var select =document.getElementById("select").value;

        if(name=="" || email == "" || password == "" || confirmpassword == "" || select == "usertype"){
            alert("All fields are required!")
            return false
        }else if(!isEmail(email)){
            alert("Please enter a valid email!")
           return false
        }else if(password != confirmpassword){
            alert("Password mismatch!")
        }else{
            return true
        }
        event.preventDefault()
    }

    function isEmail(email){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email)
    }

    function data2(){
      var email =document.getElementById("email2").value
      var password =document.getElementById("password2").value
      
      if(email == '' || password == ''){
        alert("please enter all the fields!")
        event.preventDefault() 
      }
      
      
      
    }
  </script>
</html>
