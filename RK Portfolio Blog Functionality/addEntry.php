<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/07ad5582ac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Stick+No+Bills">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="css/addEntry.css">
        <script type="text/javascript" src="js/script.js"></script>
        <title>
            Add Entry
        </title>
        <link rel="icon" href="images/RK.jpg">
    </head>

    <body>
        <div class="page_background">
            <nav class = "side_nav">
                <ul>
                    <li>
                        <a href="index.php">
                            <i class="fa-solid fa-house"></i>
                            <p>
                                Home Page
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="skills.php">
                            <i class="fa-solid fa-pencil"></i>
                            <p>
                                My Skills
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="education.php">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <p>
                                Education
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="experience.php">
                            <i class="fa-solid fa-briefcase"></i>
                            <p>
                                Experience
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.php">
                            <i class="fa-solid fa-laptop-code"></i>
                            <p>
                                Portfolio
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            <i class="fa-solid fa-paper-plane"></i>
                            <p>
                                Contact
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="viewBlog.php">
                            <i class="fa-solid fa-comment"></i>
                            <p>
                                Blog
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <h1 id="title">
                Add Entry
            </h1>

            <section class="blog_section">
                <aside class="add_post">
                    <?php
                        // display welcome message upon login
                        if(isset($_GET['login_msg']))
                        {
                            $login_msg = $_GET['login_msg'];
                            echo '<h1 id="login">'.$login_msg.'</h1>';
                        }
                    ?>
                    <h1>Add Blog Entry</h1>
                    
                    <form method="post" action="addPost.php">
                        <div class="text_field">
                            <input name="blogTitle" id="blogTitle" type="text" required>
                            <label>Title</label>
                        </div>
                        <div class="text_field">
                            <textarea name="blogContent" id="blogContent" required ></textarea>
                            <label>Enter your text here</label>
                        </div>
                        <button onclick="return resetBlogForm()">Clear</button>
                        <button onclick="return formSubmitted()" type="submit">Submit</button>
                        
                    </form> 
                </aside>
            </section>
            
        </div>
    </body>
</html>