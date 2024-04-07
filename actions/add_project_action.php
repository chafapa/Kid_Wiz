<?php
include "../settings/connection.php";

if(isset($_POST['submit'])){
    // Get the project details from the form
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $difficulty_level = mysqli_real_escape_string($conn, $_POST['difficulty_level']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $materials = mysqli_real_escape_string($conn, $_POST['materials']); // Assuming this is a textarea containing materials separated by newlines

    // Insert the project into the Projects table
    $projectSql = "INSERT INTO Projects (title, description, category, difficulty_level, overview, materials_needed, creator_id, status_id) VALUES ('$title', '$description', '$category', '$difficulty_level', '$overview', '$materials', 1, 1)"; // Assuming creator_id and status_id are fixed for this example
    $projectResult = mysqli_query($conn, $projectSql);

    // Get the ID of the inserted project
    $projectId = mysqli_insert_id($conn);

    // Split the materials into an array
    $materialsArray = explode("\n", $materials);

    // Insert each material into the Project_Materials table
    foreach ($materialsArray as $material) {
        // Perform any necessary validation on $material here
        $material = trim($material);
        if (!empty($material)) {
            $materialSql = "INSERT INTO Project_Materials (project_id, material_name) VALUES ($projectId, '$material')";
            mysqli_query($conn, $materialSql);
        }
    }

    // Redirect the user after insertion
    if($projectResult) {
        header("Location: ../admin/project_control_view.php");
    } else {
        echo "Connection failed";
    }
}


?>