<?php

require ('config/db.php');

// Get from data
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM posts WHERE id='$id'");
header('Location: index.php');

?>