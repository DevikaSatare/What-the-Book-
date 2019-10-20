<!--DOCTYPE html-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/main.css" /> 
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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

    <script>
        //Script function to Confirm Password
        var check = function () {
            if (document.getElementById('passwd').value ==
                document.getElementById('cpasswd').value) {
                document.getElementById('c_cpasswd').style.color = 'green';
                document.getElementById('c_cpasswd').innerHTML = 'Password Confirmed!';
            } else {
                document.getElementById('c_cpasswd').style.color = 'red';
                document.getElementById('c_cpasswd').innerHTML = 'Password Not Confirmed!';
            }
        }
    </script>
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
                <h1>Registration Form</h1>
                <p>Enter your crendentails to register with the website.</p>
                <hr>
                <form action="" method="POST">

                    <label for="fname"><b>Firstname : </b></label>
                    <input type="text" name="fname" placeholder="Enter first name" required><br>

                    <label for="lname"><b>Lastname : </b></label>
                    <input type="text" name="lname" placeholder="Enter last name" required><br>

                    <label for="uname"><b>Username : </b></label>
                    <input type="text" name="uname" placeholder="Enter username" required><br>

                    <label for="email"><b>Email : </b></label>
                    <input type="email" name="email" placeholder="Enter email id" required><br>

                    <label for="passwd"><b>Password : </b></label>
                    <input type="password" id="passwd" name="passwd" placeholder="Enter Password" onkeyup='check();'
                        required><br>

                    <label for="cpasswd"><b>Confirm Password : </b></label>
                    <input type="password" id="cpasswd" name="cpasswd" placeholder="Confirm Password" onkeyup='check();'
                        required>

                    <span id="c_cpasswd"></span>

                    <br><input type="submit" id="submit" name="submit">
                    <input type="reset" id="reset" name="reset">
                    <p>Already have a account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
</body>

</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $cpasswd = $_POST['cpasswd']; 

    $sql = "INSERT INTO users VALUES ('$firstname','$lastname','$username','$email','$passwd')";

    if($passwd != $cpasswd){
        echo "<script>alert('Passwords are not Confirmed!')</script>";
        
    }elseif ($conn->query($sql) === TRUE) {
        echo "<script>alert('New Record Created Successfully!');</script>";
        header('Location: login.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

    $conn->close();
?>