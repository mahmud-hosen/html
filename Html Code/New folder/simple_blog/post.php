<?php

require ('config/db.php');

// Get id
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Created query
$query = 'SELECT * FROM posts WHERE id ='.$id;

// Get result
$result = mysqli_query($conn, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);

?>

<?php
include ('inc/header.php');
include ('inc/navbar.php');
?>

    <div class="container">
        <div class="alert alert-secondary">
            <h3><?php echo $post['title']; ?></h3>
            <p><?php echo $post['body']; ?></p>
            <small>Created On <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
            <br>
            <a href="editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
            ||
            <a href="deletepost.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>




<?php
include('inc/footer.php');
?>