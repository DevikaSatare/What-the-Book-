<?php
session_start();
if(!isset($_SESSION['id'])) {
    $_SESSION['name'] = 'none';
  }  
?>

<head>
    <title>What the Book?</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
                <?php if($_SESSION['name'] == 'none'){?>
                <li><a href="login.php">Login</a></li>
                <?php }else{?>
                <li><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <header>
                    <h1>
                        <?php if($_SESSION['name'] != 'none'){ 
                    echo "Hi ".$_SESSION['name']." ,";
                     } ?>
                        Everything you will need from conception to reception.<br /> Books to change our world.</h1>
                    <p>A great eye for good books. A great place to be stranded. A world of books for young and old. All
                        for you!</p><br><br>
                    <div id="main">
						<div class="inner">
                            <h3>ABOUT US</h3>


                        <div class="slideshow-container">

                            <div class="mySlides fade">
                              <div class="numbertext">1 / 3</div>
                              <img src="images/ssimg1.jpg" style="width:100%">
                              <div class="text">Caption Text</div>
                            </div>

                            <div class="mySlides fade">
                              <div class="numbertext">2 / 3</div>
                              <img src="images/ssimg2.jpg" style="width:100%">
                              <div class="text">Caption Two</div>
                            </div>

                            <div class="mySlides fade">
                              <div class="numbertext">3 / 3</div>
                              <img src="images/ssimg3.jpg" style="width:100%">
                              <div class="text">Caption Three</div>
                            </div>

                        </div>
                        <br>

                        <div style="text-align:center">
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                        </div>

                        <br>
                        <br>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel venenatis mauris vehicula hendrerit.</p>
							<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
						</div>
					</div>
                </header>
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
                    <li>&copy;2019 -
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        , What the Book? | All rights reserved</li>
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
    <script src="assets/js/slideshow.js"></script>


</body>

</html>