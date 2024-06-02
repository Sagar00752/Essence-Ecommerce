<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
    <p class="head"><b>Welcome to essense shopping please login</b></p>

        <div class="container">
          <label for="uname"><b>Email</b></label>
          <input type="email" placeholder="Enter Email" name="uname" id='email1' required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="password1" required>

          <button type="submit" id="login1">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <a href="/register" id='redirect'>Register</a>
</body>
<script>
    $("#login1").click(function(){
var email=$('#email1').val();
var password =$('#password1').val();
$.ajax({
    url:'/loginpass',
    type:'post',
    data:{
        "email":email,
        "password":password,

        _token:'{{csrf_token()}}'
    },
    success:function(response){
        var login=response.status;
        if(login==200){
            window.location.href = "/index";
        }
        else{
            window.location.href = "/login";
        }

    }
})
    })
    </script>





<style>
    body{
        background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')
    }
    .container{
        width: 30%;
    background-color: rgba(230, 221, 221, 0.384);
    padding: 30px;
    align-content: center;
    margin-left: 30%;
    margin-top: 5%;
    }
    #redirect{
     background-color: #0d0e0d; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    }
    .head{
        font-size: 200%;
        margin-left: 31%;
    }
    form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
    </style>
</html>
