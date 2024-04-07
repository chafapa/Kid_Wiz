<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kid Wizard Website</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/add_project.css">
    
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


    <section class="home" id="home">

        <div class="content">
            <h3>Create a New Project</h3>
            <br>
            <form action="../actions/create_project_action.php" method="post">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="category">Category:</label>
                <input type="text" id="category" name="category">

                <label for="difficulty_level">Difficulty Level:</label>
                <input type="text" id="difficulty_level" name="difficulty_level">

                <label for="overview">Overview:</label>
                <textarea id="overview" name="overview"></textarea>

                <label for="materials_needed">Materials Needed:</label>
                <textarea id="materials_needed" name="materials_needed"></textarea>

                <!-- Creator ID and Status ID can be hidden fields if they are not supposed to be changed by the user -->
                <input type="hidden" id="creator_id" name="creator_id" value="1">
                <input type="hidden" id="status_id" name="status_id" value="1">

                <!-- <button type="submit" name="submit" value="Create Project"></button> -->
                <button type="submit" name="submit" class="btn">Create Project</button>
            </form>
        </div>



        <div class="image">
            <img src="../images/twokids.png" alt="">
        </div>

    </section>

    <script src="../js/script.js"></script>
</body>

</html>