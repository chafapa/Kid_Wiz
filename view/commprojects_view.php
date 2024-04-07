<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kid Wizard Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
        <!-- will work on this later -->
        <nav class="navbar">
            <a href="../view/user_home.php"><span class="material-icons-outlined">dashboard</span> Home</a>
            <a href="../view/myprojects_view.php" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
            <a href="../view/commprojects_view.php" id="communityprojects"><span class="material-icons-outlined">language</span> Community Projects</a>
            <a href="#" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
        </nav>

        <!-- <div class="icons">
            <a href="../login/login_view.php" class="fas fa-user" id="login-btn"></a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div> -->
        <div class="icons">
            <?php
            if (isset($_SESSION['user_id'])) {
                // User is logged in, display their name
                $username = $_SESSION['username'];
                echo '<span>Welcome, ' . $username . '</span>';
            } else {
                // User is not logged in, display the login icon
                echo '<a href="../login/login_view.php" class="fas fa-user" id="login-btn"></a>';
            }
            ?>
            <!-- <div class="fas fa-bars" id="menu-btn"></div> -->
        </div>



    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <!-- <section class="home" id="home">

        <div class="content">
            <h3>welcome to <span>Kid Wizard</span></h3>
            <p>Explore, Learn, Grow</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="image">
            <img src="../images/home.png" alt="">
        </div>

        <div class="custom-shape-divider-bottom-1684324473">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

    </section> -->

    <!-- home section ends -->

    <!-- about us section starts -->

    <!-- <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us</h1>

        <div class="row">

            <div class="image">
                <img src="../images/about us.png" alt="">
            </div>

            <div class="content">
                <h3>Exploring, Growing, And Thriving Together</h3>
                <p>Welcome to Kid Wiz, where curiosity meets creativity! We are thrilled to offer a vibrant, user-friendly platform that sparks the imagination of young minds through a fascinating array of science and craft projects.</p>
                <p>At Kid Wiz, we believe that learning is an adventure best embarked upon with enthusiasm and a sprinkle of fun. Our mission is to provide children with accessible, interactive content that not only entertains but educates, encouraging them to explore the wonders of science and the joys of hands-on creation.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section> -->

    <!-- about us section ends -->

    <!-- education section start -->

    <!-- <section class="education" id="education">

        <h1 class="heading">Project <span> Categories</span></h1>

        <div class="box-container">

            <div class="box">
                <h3>Science Experiments</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="../images/scienceN.png" alt="">
            </div>

            <div class="box">
                <h3>Crafts</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="../images/craftsN.png" alt="">
            </div>

            <div class="box">
                <h3>Nature Exploration</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="../images/natureN.png" alt="">
            </div>

        </div>

    </section> -->

    <!-- education section ends -->

    <!-- teacher section starts -->

    <!-- <section class="teacher" id="teacher">

        <h1 class="heading">our <span> teacher</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="../images/teacher1.png" alt="">
                <h3>john wright</h3>
                <p>instructor</p>
                <div class="share">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="box">
                <img src="../images/teacher2.png" alt="">
                <h3>john wright</h3>
                <p>instructor</p>
                <div class="share">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="box">
                <img src="../images/teacher3.png" alt="">
                <h3>john wright</h3>
                <p>instructor</p>
                <div class="share">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

        </div>

    </section> -->

    <!-- teacher section ends -->

    <!-- activities section starts -->

    <section class="activities">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="comm">
            <h1 class="heading">Community <span>Projects</span></h1>
        </div>
        <div class="box-container">

            <div class="box">
                <img src="../images/activities1.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities2.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities3.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities4.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities5.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities6.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities7.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities8.png" alt="">
                <h3>games and fun</h3>
            </div>

        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="../js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>