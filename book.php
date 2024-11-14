<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
        window.onload = function() {
            // Check if there's a success message
            <?php if (isset($_SESSION['success'])): ?>
                alert("<?php echo $_SESSION['success']; ?>");
                <?php unset($_SESSION['success']); // Clear the message after showing ?>
            <?php endif; ?>
        };
    </script>
</head>
<body>
    <!------------------header section start---------------->
    <section class="header">
        <a href="home.php" class="logo">Travel Sri Lanka</a>

         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
         </nav>
     
         <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!------------------header section end-------------------->

    <div class="heading" style="background: url(../Travel/images/package7.jpeg) no-repeat">
        <h1>Book Now</h1>
    </div>

    <!------------------booking section start-------------------->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone" required>
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location" required>
                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests" required>
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals" required>
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    <!------------------booking section end-------------------->

    <!------------------footer section start-------------------->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book </a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> as</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="home.php"> <i class="fas fa-phone"></i>+771223233</a>
                <a href="about.php"><i class="fas fa-phone"></i>+123 1456762</a>
                <a href="home.php"> <i class="fas fa-envelope"></i>jayalath@gmail.com</a>
                <a href="about.php"><i class="fas fa-map"></i> Horana, Sri Lanka.</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href=""> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href=""> <i class="fab fa-twitter"></i> twitter</a>
                <a href=""> <i class="fab fa-instagram"></i> instagram</a>
                <a href=""> <i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span>Nilanka Jayalath | all rights reserved!</span></div>
    </section>
    <!------------------footer section end-------------------->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
