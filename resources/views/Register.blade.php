<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form action="action_page.php>
        <div class="container">
        @csrf
          <h1>Essense Shopping welcomes you</h1>
          <p>Join our community</p>
          <hr>
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter name" name="name" id="name1" required>
          <hr>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email1" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw1" required>

          <label for="phno"><b>Enter Phone</b></label>
          <input type="text" placeholder="Enter Phno" name="Phone" id="phone1" required>
          <hr>

          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit"id="submit1" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script>
    $('.registerbtn').click(function(){
      var name =$('#name1').val();
     var email=$('#email1').val();
     var password=$('#psw1').val();
     var phone=$('#phone1').val();
     $.ajax({
        url: '/update',
        type: 'post',
    data:{
        "nam":name,
        "email":email,
        "password":password,
        "phone":phone,
        _token:'{{csrf_token()}}'
    },
    success:function(){}

     })
    })
    </script>


<style>
    body{
        background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')
    }
 {box-sizing: border-box}

/* Add padding to containers */
.container {
    width: 30%;
    background-color: rgba(230, 221, 221, 0.384);
    padding: 30px;
    align-content: center;
    margin-left: 30%;
    margin-top: 5%;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f5cece;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: rgb(216, 207, 207);
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #fcd8d8;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #f3a095;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: rgb(247, 196, 149);
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

    </style>
<body>

</body>
</html>
