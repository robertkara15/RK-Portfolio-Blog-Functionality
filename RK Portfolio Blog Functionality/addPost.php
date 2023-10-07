<?php
    date_default_timezone_set('Europe/London');
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
    $blogTitle = $_POST["blogTitle"];
    $blogContent = $_POST["blogContent"];
    $blogDate = date("d-m-y");
    $blogTime = date("H:i:s");

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $sql = "INSERT INTO BLOGPOSTS (blogTitle, blogContent, blogDate, blogTime) VALUES ('$blogTitle', '$blogContent', '$blogDate', '$blogTime')" ;
        // if successful
        if ($connection->query($sql) === TRUE) 
        {
            header('Location: viewBlog.php');
        }
        // if not successful
        else
        {
            echo "ERROR: ENTRY NOT ADDED: " . $sql . "<br>" . $connection->error;
        }
        $connection->close();
    }

        
?>