<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
include "../settings/connection.php";

// if (!isset($_SESSION['user_id'])) {
//     header("Location: ../login/login_view.php");
//     exit();
// }

var_dump($_SESSION);
$user_id = $_SESSION['personid'];

// Fetch the user's projects
$sql = "SELECT * FROM Projects WHERE creator_id = $user_id";
$result = mysqli_query($conn, $sql);


$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
        <!-- will work on this later -->
        <nav class="navbar">
            <a href="../view/user_home.php"><span class="material-icons-outlined">dashboard</span> Home</a>
            <a href="#" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
            <a href="#" id="communityprojects"><span class="material-icons-outlined">language</span> Community Projects</a>
            <a href="#" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
        </nav>


    </header>


    <section class="education" id="education">
        <br>
        <br>
        <br>
        <section class="education" id="education">

            <h1 class="heading">My <span> Projects</span></h1>

            <div class="box-container">
                <?php foreach ($projects as $project) : ?>
                    <div class="box">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['overview']; ?></p>
                        <!-- Assuming you have an image URL stored in the database -->
                        <img src="<?php echo $project['image_url']; ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>

        </section>


    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="../js/script.js"></script>

    <!-- <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script> -->

</body>

</html>