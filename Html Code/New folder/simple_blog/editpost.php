<?php

require ('config/db.php');

if (isset($_POST['submit'])){
    // Get data

    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "UPDATE posts SET
                    title = '$title',
                    body = '$body',
                    author = '$author'
                WHERE id = {$update_id}
    
    ";

    if(mysqli_query($conn, $query)){
        header('Location: index.php');
    } else {
        echo "Error".mysqli_error($conn);
    }
}

// Get id
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create query
$query = "SELECT * FROM posts WHERE id=".$id;

// Get Result
$result = mysqli_query($conn, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);



?>


<?php
include ('inc/header.php');
include ('inc/navbar.php');

?>

    <div class="container">
        <h2 class="text-center">Add New Post</h2>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" cols="30" rows="10" class="form-control"><?php echo $post['body']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
                    </div>
                    <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
                    <input type="submit" name="submit" value="Submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>







<?php
include('inc/footer.php');
?>