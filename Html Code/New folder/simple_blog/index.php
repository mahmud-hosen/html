<?php

require('config/db.php');

// Create query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Get result
$result = mysqli_query($conn, $query);

// Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php
include('inc/header.php');
include('inc/navbar.php');
?>


    <div class="container">
        <h2 class="text-center">Blog Posts</h2>
        <?php foreach ($posts as $post): ?>
            <div class="alert alert-secondary">
                <h3><?php echo $post['title']; ?></h3>
                <p><?php echo $post['body']; ?></p>
                <small>Created On <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                <br>
                <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-info btn-sm">View More</a>
            </div>
        <?php endforeach ?>

    </div>










<?php
include('inc/footer.php');
?>