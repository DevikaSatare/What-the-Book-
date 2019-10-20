<?php
session_start();
if($_SESSION['id'] != 1){
    header("Location: login.php");
}
?>

<head>
    <title>Category</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <!--style>
        header {
            padding: 2.75em 4em 1em 2em !important;
        }
    </style-->
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index.php" class="logo">
                    <span class="symbol"><img src="images/bookslogo.svg" alt="" /></span><span class="title">What the
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
                <li><a href="generic.php">Categories</a></li>
                <?php if($_SESSION['id'] != 1){?>
                <li><a href="login.php">Login</a></li>
                <?php }else{?>
                <li><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>
        </nav>
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Categories</h1>
                <p>Welcome, <?php echo $_SESSION['name']; ?> !
                    Get all the categories of books needed for you.</p>
                <hr>
                <section class="tiles">
                    <article class="style1">
                        <span class="image">
                            <img src="images/poetry.jpg" alt="Poetry" />
                        </span>
                        <a href="generic.html">
                            <h2>Poetry</h2>
                            <div class="content">
                                <p>Books</p>
                            </div>
                        </a>
                    </article>
                    <article class="style2">
                        <span class="image">
                            <img src="images/action.jpg" alt="Action & Adventure" />
                        </span>
                        <a href="generic.html">
                            <h2>Action & Adventure</h2>
                            <div class="content">
                                <p>Books</p>
                            </div>
                        </a>
                    </article>
                    <article class="style3">
                        <span class="image">
                            <img src="images/romance.jpg" alt="Romantic" />
                        </span>
                        <a href="generic.html">
                            <h2>Romance</h2>
                            <div class="content">
                                <p>Books</p>
                            </div>
                        </a>
                    </article>
                    <article class="style4">
                        <span class="image">
                            <img src="images/religion.jpg" alt="Religious" />
                        </span>
                        <a href="generic.html">
                            <h2>Religious</h2>
                            <div class="content">
                                <p>Books</p>
                            </div>
                        </a>
                    </article>
                    <article class="style5">
                        <span class="image">
                            <img src="images/autobio.jpg" alt="Autobiography" />
                        </span>
                        <a href="generic.html">
                            <h2>Autobiography</h2>
                            <div class="content">
                                <p>Books</p>
                            </div>
                        </a>
                    </article>
                    <article class="style6">
                        <span class="image">
                            <img src="images/fiction.jpeg" alt="" />
                        </span>
                        <a href="generic.html">
                            <h2>Fiction</h2>
                            <div class="content">
                                <p>Books</p>
                            </div>
                        </a>
                    </article>
                </section>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Get in touch</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a>
                        </li>
                        <li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a>
                        </li>
                        <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a>
                        </li>
                        <li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
                        <li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved</li>
                    <li>Design: <a href="index.php">What the Book?</a></li>
                </ul>
            </div>
        </footer>

    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>