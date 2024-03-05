<?php
    require_once("database.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM projects WHERE id=$id");

    header("location:admin.php");
?>