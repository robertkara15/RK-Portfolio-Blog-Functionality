<?php
    // define connection variables for mysql database
    $database_host = "localhost";
    $database_user = "root";
    $database_pass = "root";
    $database_name = "ecs417";
    $connection = new mysqli($database_host, $database_user, $database_pass, $database_name);

    // in the event of connection failing
    if ($connection->connect_error) 
    {
        die("ERROR CONNECTION FAILED: " . $connection->connect_error);
    }

    // required variables
    $blogComment = $_POST["blogComment"];

    // first check if form has been submitteed with id having a numeric value
    // adds comment where id is equal to id
    if (isset($_GET['id']) && is_numeric($_GET['id'])) 
    {
        $postId = $_GET['id'];
        $query = "INSERT INTO BLOGCOMMENTS (blogComment, postId) VALUES ('$blogComment','$postId')";
        mysqli_query($connection, $query);
        mysqli_close($connection);

        header("Location: viewBlog.php");
        exit;
    }        
?>