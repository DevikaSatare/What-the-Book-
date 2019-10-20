<!--DOCTYPE html-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html {
            box-sizing: border-box;
        }

        body {
            background: #ffffff;
        }

        body .container *,
        body .container *:before,
        body .container *:after {
            -moz-animation: none !important;
            -webkit-animation: none !important;
            -ms-animation: none !important;
            animation: none !important;
            -moz-transition: none !important;
            -webkit-transition: none !important;
            -ms-transition: none !important;
            transition: none !important;
        }

        .container{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        input {
            width: 100%;
        }

        #submit {
            background-color: greenyellow;
            border-color: black;
            width: 45%;
            margin-right: 5%;
            float: left;
        }

        #reset {
            background-color: red;
            border-color: black;
            width: 45%;
            margin-right: 5%;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login Page!</h1>
        <p>Enter your cerdentials to login.</p>
        <hr>
        <form action="" method="POST">
            <br>
            <label for="username"><b>Username : </b></label>
            <input name="username" type="text" placeholder="Enter email-id" required><br><br>

            <label for="passwd"><b>Password : </b></label>
            <input name="passwd" type="password" placeholder="Enter password" required><br>

            <br>
            <input name="submit" id="submit" type="submit">
            <input name="reset" id="reset" type="reset">
        </form>
        <p>Not a member? <a href="register.php">Sign up Now!</a></p>
    </div>

</body>

</html>

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bookstore');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['passwd']); 
      
      $sql = "SELECT fname FROM users WHERE username = '$myusername' and passwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         echo "<script>alert('Login Successful!');</script>";
         header('Location: index.html');
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>