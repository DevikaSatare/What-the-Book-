<!--DOCTYPE html-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Login</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <style>
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

        header {
            padding: 2.75em 4em 1em 2em !important;
        }

        #main {
            padding: 0 8em 0 8em;
        }
    </style>
</head>

<body>
    <div class="is-preload">
        <!--Wrapper-->
        <div id="wrapper">
            <!-- Header -->
            <header id="header">
                <div class="inner">

                    <!-- Logo -->
                    <a href="index.html" class="logo">
                        <span class="symbol"><img src="images/bookslogo.svg" alt="" /></span><span class="title">What
                            the
                            Book?</span>
                    </a>

                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>

                </div>
            </header>
            <div id="main">
                <h1>Login Page!</h1>
                <hr>
                <form action="" method="POST">

                    <label for="username"><b>Username : </b></label>
                    <input name="username" type="text" placeholder="Enter email-id" required><br><br>

                    <label for="passwd"><b>Password : </b></label>
                    <input name="passwd" type="password" placeholder="Enter password" required><br>

                    <br>
                    <input name="submit" id="submit" type="submit">
                    <input name="reset" id="reset" type="reset">
                    <br><br>
                    <p>Not a member? <a href="register.php">Sign up Now!</a></p>
                </form>

            </div>
        </div>
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
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>