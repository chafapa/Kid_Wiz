<?php
include "../settings/connection.php";

if (isset($_GET['project_id'])) {
    $id = $_GET['project_id'];
} else {
    header("Location:../admin/project_control_view.php");
}

$sql = "DELETE FROM Projects WHERE project_id='$id'";
if (mysqli_query($conn, $sql)) {
  // here youll move back to page displaying
  header("Location:../admin/assign_chore_view.php");
} else {
  header("Location:../admin/assign_chore_view.php?error=Error deleting record");
  }
  
