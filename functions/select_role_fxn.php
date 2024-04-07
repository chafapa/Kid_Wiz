<?php
    include '../settings/connection.php';

    $sql = "SELECT * FROM family_name";
    $result = mysqli_query($conn, $sql);


    if (!$result) {
        die("Query failed: ". mysqli_error($conn));
    }
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows;

    mysqli_close($conn);
?>