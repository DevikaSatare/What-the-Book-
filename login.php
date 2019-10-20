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

        .container {
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
                    <a href="index.php" class="logo">
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
            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
            <div id="main">
                <h1>Login Page!</h1>
                <hr>
                <form action="" method="POST">

                    <label for="username"><b>Username : </b></label>
                    <input name="username" type="text" placeholder="Enter username" required><br><br>

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

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
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
      
      $sql = "SELECT * FROM users WHERE username = '$myusername' and passwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        session_start();
        $_SESSION['id'] = 1;
        $_SESSION["name"] = $row['fname'];

         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
        header('Location: index.php');
        //echo "<script>alert('Login Successful! Welcome,". $row['fname'].".');</script>";
      }else {
        echo "<script>alert('Invalid username or password!');</script>";
         $error = "Your Login Name or Password is invalid";
      }
      if(isset($_SESSION["id"])) {
        header("Location:index.php");}
   }
?>