<?php

require ('config/db.php');

if (isset($_POST['submit'])){
    // Get data

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "INSERT INTO posts(title, body, author) VALUE ('$title', '$body', '$author')";

    if(mysqli_query($conn, $query)){
        header('Location: index.php');
    } else {
        echo "Error".mysqli_error($conn);
    }
}



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
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>







<?php
include('inc/footer.php');
?>
























