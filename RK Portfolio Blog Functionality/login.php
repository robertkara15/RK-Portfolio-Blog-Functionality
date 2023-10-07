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

    $isAuthenticated = false;
    $userName = $_POST["userName"];
    $passWord = $_POST["passWord"];

    $sql = "SELECT userName, passWord, accountType FROM USERS";
    $result = $connection->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            // if an authenticated admin allow access to addPost.php
            if ($row["userName"] == $userName && $row["passWord"] == $passWord)
            {
                $isAuthenticated = true;
                session_start();
                $login_msg = "USER: " . $userName;
                // if admin redirect to add entry
                if($row["accountType"] == "admin")
                {
                    $_SESSION["is_logged_in"] = true;
                    $_SESSION["accountType"] = "admin";
                    header("Location: index.php?login_msg=".urlencode($login_msg));
                    exit();
                }
                // if viewer redirect to homepage
                else if ($row["accountType"] == "viewer")
                {
                    $_SESSION["is_logged_in"] = true;
                    $_SESSION["accountType"] = "viewer";
                    header("Location: index.php?login_msg=".urlencode($login_msg));
                    exit();
                }
            }
            
        }

        // if not authenticated return to index.php
        if(!$isAuthenticated)
        {
            $error_msg = "ERROR: INCORRECT USERNAME OR PASSWORD REDIRECTED TO HOME PAGE";
            header("Location: index.php?error_msg=".urlencode($error_msg));
            exit();
        }
    }
?>

