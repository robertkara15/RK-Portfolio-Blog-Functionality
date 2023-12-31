<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/07ad5582ac.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Stick+No+Bills">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">
        <title>
            Robert Karapetian
        </title>
        <link rel="icon" href="images/RK.jpg">
    </head>

    <body>
        <section class="wrapper">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </section>
        <header>
            <hgroup>
                <ul class="heading_bar">
                    <li class="heading_segment" id="RK-2">
                        <a href="index.php"><img src="images/RK.jpg" width="70" height="70"/></a>
                    </li>
                    <li class="heading_segment">
                        <a href="#education">Education</a>
                    </li>
                    <li class="heading_segment">
                        <a href="#experience">Experience</a>
                    </li>
                    <li class="heading_segment" id="RK-1">
                        <a href="index.php"><img src="images/RK.jpg" width="70" height="70"/></a>
                    </li>
                    <li class="heading_segment">
                        <a href="#projects">Projects</a>
                    </li>
                    <li class="heading_segment">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="heading_segment" id="blogSign1">
                        <a href="viewBlog.php">Blog</a>
                    </li>
                </ul>
                <ul class="heading_bar">
                    <li class="heading_segment" id="blogSign2">
                        <a href="viewBlog.php">Blog</a>
                    </li>
                    <?php
                        session_start();
                        // if admin give add entry option too
                        // else only give logout option
                        if (isset($_SESSION["is_logged_in"]))
                        {
                            if($_SESSION["accountType"] == "admin")
                            {
                                echo "<li class=heading_segment>" . "<a href=addEntry.php>" . "Add Entry" . "</a>" . "</li>";
                            }
                            echo "<li class=heading_segment>" . "<a href=logout.php>" . "Logout" . "</a>" . "</li>";
                        }
                    ?>
                </ul>
                <?php
                    // display error message if one is received
                    if(isset($_GET['error_msg']))
                    {
                        $error_msg = $_GET['error_msg'];
                        echo '<h1 id="error">'.$error_msg.'</h1>';
                    }
                    // display login message if one is received
                    if(isset($_GET['login_msg']))
                    {
                        $login_msg = $_GET['login_msg'];
                        echo '<h1 id="error">'.$login_msg.'</h1>';
                    }
                ?>
            </hgroup>
        </header>       

        <section class="main"> 
            <section class="section_one">
                <div class="welcome_area">
                    <h1>
                        Robert Karapetian
                    </h1>
                    <h2>
                    </h2>
                    <p>
                        I am a 2nd year Computer Science student at Queen Mary University of London, 
                        having achieved a First Class grade across all 1st year modules with an average of 89%. 
                        My professional aim is to become an expert in Software Engineering, being able to craft 
                        innovative solutions to real-world problems. 
                    </p>
                </div>
                <div class="image_area">
                    <div class="button_area">
                        <a style="--clr:#99ccff" href="pdfs/RK CV.pdf">
                            <span>
                                CV
                            </span>
                            <i></i>
                        </a>
                        <a style="--clr:#ff4d4d" href="https://www.linkedin.com/in/robert-karapetian-39900425a">
                            <span>
                                LinkedIn
                            </span>
                            <i></i>
                        </a>
                        <a style="--clr:#00e673" href="https://www.linkedin.com/in/robert-karapetian-39900425a">
                            <span>
                                Github
                            </span>
                            <i></i>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section_two">
                <?php
                    // only dipslay form if user is logged in
                    if (! isset($_SESSION["is_logged_in"]))
                    { 
                ?>
                    <div class="login">
                    <h1>Login to blog</h1>
                        <form action="login.php" method="post">
                            <div class="text_field">
                                <input id="userName" name="userName" type="email" required>
                                <span></span>
                                <label for="userName">Username</label>
                            </div>
                            <div class="text_field">
                                <input name="passWord" type="password" required>
                                <span></span>
                                <label for="passWord">Password</label>
                            </div>
                            <input type="submit" value="Login">
                        </form>
                    </div>
                <?php
                    }
                ?>
            </section>

            <section class="section_three" id="education">
                <h2>Education</h2>
                <div class="education_content">
                    <div class="education_box">
                        <h4>2022 - 2025</h4>
                        <h3>Queen Mary University of London</h3>
                        <p>BSc Computer Science</p>
                        <p>
                            1st Class grade (89%) across modules: Object-Oriented Programming, Procedural Programming, Fundamentals of Web Technology, 
                            Computer Systems and Networks, Automata and Formal Languages, Logic and Discrete Structures, Professional and Research Practice, 
                            Information System Analysis
                        </p>    
                    </div>
                    <div class="education_box">
                        <h4>2020 - 2022</h4>
                        <h3>Chelsea Academy (Sixth Form)</h3>
                        <p>4 A Levels</p>
                        <p>Subjects taken: Computer Science, Mathematics, Physics, Further Mathematics</p>
                    </div>
                    <div class="education_box">
                        <h4>2015 - 2020</h4>
                        <h3>Platanos College (Secondary School)</h3>
                        <p>1 Level 3 FSMQ/A and 11 GCSEs:</p>
                        <p>
                            Subjects taken: Additional Mathematics, English Language, English Literature, Mathematics, Further Mathematics, Biology, 
                            Chemistry, Physics, History, Religious Studies, Spanish, Computer Science
                        </p>
                    </div>
                </div>
            </section>

            <section class="section_four" id="experience">
                <h2>Experience</h2>
                <div class="experience_content">
                    <div class="experience_box">
                        <h4>March and April 2023</h4>
                        <h3>Inferential Futures</h3>
                        <p>Internship – Software Development and Artificial Intelligence</p>
                        <p>
                            Designed and implemented an initial working prototype (front end and server-side) of a GPT-enabled chatbot for a careers advisory website. 
                            Used HTML, CSS, PHP, JS, JSON, XML, and SQL to design and implement. Chatbot functionality utilised ChatGPT open APIs, Ada, Babbage, Curie, 
                            and Davinci to process prompts and return responses.
                        </p>
                        <p>
                            Wrote and presented a paper discussing the potential of such implementations and broader Artificial Intelligence concepts in the careers advice space,
                            exploring capability, performance, and cost for the present-day ChatGPT APIs.
                        </p>
                    </div>
                    <div class="experience_box">
                        <h4>May 2023</h4>
                        <h3>IBM</h3>
                        <p>Internship - Student Consultancy Project (QMUL)</p>
                        <p>
                            Led a team of 4 in researching and analysing features of the IBM Skills Build platform and advising on its relevance for the next 5 years,
                            with a focus on Artificial Intelligence, Data Science, and Security.
                        </p>
                        <p>
                            Presented findings to the Master Inventor at IBM: created a visualisation of the Skills Build resources to be used by students, and a spreadsheet
                            of all available resources.
                        </p>
                    </div>
                    <div class="experience_box">
                        <h4>June and July 2023</h4>
                        <h3>MCS Projects</h3>
                        <p>Activity Leader - STEM Challenge Days</p>
                        <p>
                            Led extracurricular STEM activity events for students of secondary school age across England. Contributed primarily to the E-Fit Challenge,
                            which detailed the importance of creating computerised visualisations of potential suspects for crimes, based on witness accounts.
                        </p>
                        <p>
                            Presented the Electric Vehicle Challenge, delivering solutions which focused on the relevance of electric vehicles due to their 
                            reduced emissions and efficiency.
                        </p>
                    </div>
                    <div class="experience_box">
                        <h4>July 2021</h4>
                        <h3>Profusion Data Agency</h3>
                        <p>Insights Program – Marketing</p>
                        <p>
                            Led a team of 4 in planning an app for young people seeking career opportunities. Outlined the design, marketing, and finance aspects of the
                            project, and produced a detailed one-year plan with details on its execution.
                        </p>
                        <p>
                            Gained experience on data science tools and how marketing schemes are conducted to promote technological innovations.
                        </p>
                    </div>
                    <div class="experience_box">
                        <h4>July 2021</h4>
                        <h3>White & Case Law Firm</h3>
                        <p>Work Shadowing – IT Project Manager</p>
                        <p>
                            Led a team of 5 in negotiating a hypothetical deal between a client and a professional sports company as a case-study exercise. 
                            Through this role, we collaborated extensively and advocated for the best possible terms which would also accommodate and allow for compromise to
                            ensure both parties were satisfied with the outcome.
                        </p>
                        <p>
                            Gained experience with IT project management, including completing tasks such as setting objectives, presenting ideas,
                            predicting outcomes, and monitoring progress of team members with effort tracking tools such as Gantt Charts and Review Boards.
                        </p>
                    </div>

                </div>
            </section>

            <section class="section_five" id="projects">
                <h2>Projects</h2>

                <div class="portfolio_content">
                    <div class="row">
                        <img src="images/chatbot_project.jpg">
                        <div class="main_row">
                            <div class="row_text">
                                <h5>Private Prototype</h5>
                            </div>
                            <div class="row_icon">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                        </div>
                        <h4>Full-stack Careers Advisory Chatbot Website</h4>
                        <h5>HTML | CSS | PHP | JS | JSON | XML | SQL | OpenAI API</h5>
                    </div>
                    <div class="row">
                    <img src="images/weather_project.jpg">
                        <div class="main_row">
                            <div class="row_text">
                                <h5>Git Repository Available</h5>
                            </div>
                            <div class="row_icon">
                                <a href="https://www.linkedin.com/in/robert-karapetian-39900425a">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <h4>Weather Application</h4>
                        <h5>HTML | CSS | PHP | JS | OpenWeather API</h5>
                    </div>
                    <div class="row">
                    <img src="images/hotel_project.jpg">
                        <div class="main_row">
                            <div class="row_text">
                                <h5>Git Repository Available</h5>
                            </div>
                            <div class="row_icon">
                                <a href="https://www.linkedin.com/in/robert-karapetian-39900425a">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <h4>Hotel Booking System</h4>
                        <h5>Python | Tkinter | SQL</h5>
                    </div>
                    <div class="row">
                        <img src="images/chatbot_project.jpg">
                        <div class="main_row">
                            <div class="row_text">
                                <h5>Private Prototype</h5>
                            </div>
                            <div class="row_icon">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                        </div>
                        <h4>Full-stack Careers Advisory Chatbot Website</h4>
                        <h5>HTML | CSS | PHP | JS | JSON | XML | SQL | OpenAI API</h5>
                    </div>
                    <div class="row">
                    <img src="images/weather_project.jpg">
                        <div class="main_row">
                            <div class="row_text">
                                <h5>Git Repository Available</h5>
                            </div>
                            <div class="row_icon">
                                <a href="https://www.linkedin.com/in/robert-karapetian-39900425a">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <h4>Weather Application</h4>
                        <h5>HTML | CSS | PHP | JS | OpenWeather API</h5>
                    </div>
                    <div class="row">
                    <img src="images/hotel_project.jpg">
                        <div class="main_row">
                            <div class="row_text">
                                <h5>Git Repository Available</h5>
                            </div>
                            <div class="row_icon">
                                <a href="https://www.linkedin.com/in/robert-karapetian-39900425a">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <h4>Hotel Booking System</h4>
                        <h5>Python | Tkinter | SQL</h5>
                    </div>
                </div>
            </section>

            <section class="section_six" id="contact">
                <div class="contact_area">
                    <div class="contact_card">
                        <i class="fa-solid fa-envelope"></i>
                        <p>robert_kara15@hotmail.com</p>
                    </div>
                    <div class="contact_card">
                        <i class="fa-solid fa-phone"></i>
                        <p>07941155101</p>
                    </div>
                    <div class="contact_card">
                        <a href="https://www.linkedin.com/in/robert-karapetian-39900425a">
                            <i class="fa-brands fa-linkedin"></i>
                            <p>LinkedIn</p>
                        </a>                    
                    </div>
                    <div class="contact_card">
                        <a href="https://github.com/robertkara15">
                            <i class="fa-brands fa-github"></i>
                            <p>GitHub</p>
                        </a>                    
                    </div>
                </div>
            </section>
    </body>
    <footer>
        Robert Karapetian 2023
    </footer>  
</html>