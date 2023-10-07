<?php
session_start();
?>
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Stick+No+Bills">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/viewBlog.css">
        <script type="text/javascript" src="js/script.js"></script>
        <title>
            Robert Karapetian's Blog
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
            <section class="blog_posts">
                <form class="archiveMonthForm" name="archiveMonthForm" method="post">
                    <div class="temp">
                        <div class="custom-select" style="width:200px">
                            <select class = "blogSelect" name="archiveMonth">
                                <option class="selectItems" value="0" selected>Default Arrangement</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>

                            <script>
                                var x, i, j, l, ll, selElmnt, a, b, c;
                                /*look for any elements with the class "custom-select":*/
                                x = document.getElementsByClassName("custom-select");
                                l = x.length;
                                for (i = 0; i < l; i++) {
                                selElmnt = x[i].getElementsByTagName("select")[0];
                                ll = selElmnt.length;
                                /*for each element, create a new DIV that will act as the selected item:*/
                                a = document.createElement("DIV");
                                a.setAttribute("class", "select-selected");
                                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                                x[i].appendChild(a);
                                /*for each element, create a new DIV that will contain the option list:*/
                                b = document.createElement("DIV");
                                b.setAttribute("class", "select-items select-hide");
                                for (j = 1; j < ll; j++) {
                                    /*for each option in the original select element,
                                    create a new DIV that will act as an option item:*/
                                    c = document.createElement("DIV");
                                    c.innerHTML = selElmnt.options[j].innerHTML;
                                    c.addEventListener("click", function(e) {
                                        /*when an item is clicked, update the original select box,
                                        and the selected item:*/
                                        var y, i, k, s, h, sl, yl;
                                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                                        sl = s.length;
                                        h = this.parentNode.previousSibling;
                                        for (i = 0; i < sl; i++) {
                                        if (s.options[i].innerHTML == this.innerHTML) {
                                            s.selectedIndex = i;
                                            h.innerHTML = this.innerHTML;
                                            y = this.parentNode.getElementsByClassName("same-as-selected");
                                            yl = y.length;
                                            for (k = 0; k < yl; k++) {
                                            y[k].removeAttribute("class");
                                            }
                                            this.setAttribute("class", "same-as-selected");
                                            break;
                                        }
                                        }
                                        h.click();
                                    });
                                    b.appendChild(c);
                                }
                                x[i].appendChild(b);
                                a.addEventListener("click", function(e) {
                                    /*when the select box is clicked, close any other select boxes,
                                    and open/close the current select box:*/
                                    e.stopPropagation();
                                    closeAllSelect(this);
                                    this.nextSibling.classList.toggle("select-hide");
                                    this.classList.toggle("select-arrow-active");
                                    });
                                }
                                function closeAllSelect(elmnt) {
                                /*a function that will close all select boxes in the document,
                                except the current select box:*/
                                var x, y, i, xl, yl, arrNo = [];
                                x = document.getElementsByClassName("select-items");
                                y = document.getElementsByClassName("select-selected");
                                xl = x.length;
                                yl = y.length;
                                for (i = 0; i < yl; i++) {
                                    if (elmnt == y[i]) {
                                    arrNo.push(i)
                                    } else {
                                    y[i].classList.remove("select-arrow-active");
                                    }
                                }
                                for (i = 0; i < xl; i++) {
                                    if (arrNo.indexOf(i)) {
                                    x[i].classList.add("select-hide");
                                    }
                                }
                                }
                                /*if the user clicks anywhere outside the select box,
                                then close all select boxes:*/
                                document.addEventListener("click", closeAllSelect);
                            </script>
                        </div>
                        <input id="monthSubmit" type="submit" name="submit" value="Press to view blog posts by month">
                    </div>
                </form>

                <table>
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

                        // sql1 is query for blog posts (uses result1)
                        // sql2 is query for blog comments (uses reesult2)
                        // postId of blogComment should correspond to blogPost ids
                        $sql1 = "SELECT id, blogTitle, blogContent, blogDate, blogTime FROM BLOGPOSTS";
                        $sql2 = "SELECT id, blogComment, postId FROM BLOGCOMMENTS";
                        $result1 = $connection->query($sql1);
                        $result2 = $connection->query($sql2);

                        // arrays to store date and time for comparison
                        $blogDateArray = array();
                        $blogTimeArray = array();
                        $blogDateAndTimeArray = array();

                        // only perform when the sql query has extracted a quantity of data which is not equal to 0
                        // populate both the arrays with the data to be manipulated
                        if (!($result1->num_rows == 0))
                        {
                            while($row1 = $result1->fetch_assoc())
                            {
                                array_push($blogDateArray, $row1["blogDate"]);
                                array_push($blogTimeArray, $row1["blogTime"]);
                            }
                        }
                        // parse into unix timestamp to create basis for comparison
                        for ($i = 0; $i < count($blogTimeArray); $i++) 
                        { 
                            array_push($blogDateAndTimeArray, date('d-m-y H:i:s', strtotime("$blogDateArray[$i] $blogTimeArray[$i]")));
                            
                        }
                        
                        // functions to comparee 2 times to be used with the parsed unix timestamps
                        function timeDifference($time1, $time2) 
                        {
                            return strtotime($time1) - strtotime($time2);
                        }
                        // sort items in time order
                        usort($blogDateAndTimeArray, "timeDifference");

                        // populate date and time arrays
                        for($j = 0; $j < count($blogDateAndTimeArray); $j++)
                        {
                            $blogDateArray[$j] = date('d-m-y', strtotime($blogDateAndTimeArray[$j]));
                            $blogTimeArray[$j] = date('H:i:s', strtotime($blogDateAndTimeArray[$j]));
                        }

                        // main blog display feature
                        // first check if form has been submitteed with archiveMonth having a value
                        if(isset($_POST['archiveMonth'])) 
                        {
                            if ($result1->num_rows > 0)
                            {
                                for($k=count($blogDateArray)-1; $k>=0; $k--)
                                {
                                    $notShown = true;
                                    foreach($result1 as $row1)
                                    {
                                        // extract date using strtotime again and now perform display
                                        // siituation 1: archiveMonth is equal to 0 so default display
                                        // situation 2: archiveMonth is not equal to 0 so monthly display
                                        // situation 3: loading website without submitting form yet

                                        // from here:
                                        // situation a: admin logs in
                                        // situation b: viewer logs in
                                        // situation c: website is being used with no user logged in

                                        // permissions:
                                        // view blog (everyone)
                                        // add blog posts (admin ONLY)
                                        // remove blog posts (admin ONLY)
                                        // make comments (admin and viewer ONLY)
                                        // remove comments (admin ONLY)

                                        // situation 1
                                        $blogDate = strtotime($row1["blogDate"]);
                                        if($row1["blogDate"]==$blogDateArray[$k] && $row1["blogTime"]==$blogTimeArray[$k] && $notShown && $_POST['archiveMonth']==0)
                                        {
                                            if (isset($_SESSION["accountType"])) 
                                            {
                                                // situation a
                                                if($_SESSION["accountType"] == "admin")
                                                {
                                                    echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</p><a id='removeBlog' href='removeBlog.php?id=".$row1["id"]."'>Remove Blog</a></td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p><form method='post' id='addComment' action='addComment.php?id=".$row1["id"]."' ><input id='submitComment' type='submit' value='Add Comment' ><input required type='text' id='comment' name='blogComment'></form>". "</td> </tr>";
                                                    foreach ($result2 as $row2) 
                                                    {
                                                        if ($row2['postId'] == $row1['id']) 
                                                        {
                                                            echo "<tr id=commentPart><td>" . $row2['blogComment'] . "</td><td><a id='removeComment' href='removeComment.php?id=".$row2["id"]."'>Remove Comment</a></td></tr>";
                                                        }
                                                    }
                                                    $notShown = false;
                                                }
                                                // situation b
                                                else if($_SESSION["accountType"] == "viewer")
                                                {
                                                    echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p><form method='post' id='addComment' action='addComment.php?id=".$row1["id"]."' ><input id='submitComment' type='submit' value='Add Comment' ><input required type='text' id='comment' name='blogComment'></form>". "</td> </tr>";
                                                    foreach ($result2 as $row2) 
                                                    {
                                                        if ($row2['postId'] == $row1['id']) 
                                                        {
                                                            echo "<tr id=commentPart><td>" . $row2['blogComment'] . "</td></tr>";
                                                        }
                                                    }
                                                    $notShown = false;
                                                }
                                            } 
                                            // situation c  
                                            else
                                            {
                                                echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p>". "</td> </tr>";
                                                foreach ($result2 as $row2) 
                                                {
                                                    if ($row2['postId'] == $row1['id']) 
                                                    {
                                                        echo "<tr id=commentPart><td>" . $row2['blogComment'] . "</td></tr>";
                                                    }
                                                }
                                                $notShown = false;
                                            }                                         
                                        }
                                        // situation 2
                                        else
                                        {
                                            if($row1["blogDate"]==$blogDateArray[$k] && $row1["blogTime"]==$blogTimeArray[$k] && $notShown && date("m", $blogDate)==$_POST['archiveMonth'])
                                            {
                                                if (isset($_SESSION["accountType"])) 
                                                {
                                                    // situation a
                                                    if($_SESSION["accountType"] == "admin")
                                                    {
                                                        echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</p><a id='removeBlog' href='removeBlog.php?id=".$row1["id"]."'>Remove Blog</a></td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p><form method='post' id='addComment' action='addComment.php?id=".$row1["id"]."' ><input id='submitComment' type='submit' value='Add Comment' ><input required type='text' id='comment' name='blogComment'></form>". "</td> </tr>";
                                                        foreach ($result2 as $row2) 
                                                        {
                                                            if ($row2['postId'] == $row1['id']) 
                                                            {
                                                                echo "<tr id=commentPart>><td>" . $row2['blogComment'] . "</td><td><a id='removeComment' href='removeComment.php?id=".$row2["id"]."'>Remove Comment</a></td></tr>";
                                                            }
                                                        }
                                                        $notShown = false;
                                                    }
                                                    // situation b
                                                    else if($_SESSION["accountType"] == "viewer")
                                                    {
                                                        echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p><form method='post' id='addComment' action='addComment.php?id=".$row1["id"]."' ><input id='submitComment' type='submit' value='Add Comment' ><input required type='text' id='comment' name='blogComment'></form>". "</td> </tr>";
                                                        foreach ($result2 as $row2) 
                                                        {
                                                            if ($row2['postId'] == $row1['id']) 
                                                            {
                                                                echo "<tr id=commentPart>><td>" . $row2['blogComment'] . "</td></tr>";
                                                            }
                                                        }
                                                        $notShown = false;
                                                    }
                                                }
                                                // situation c
                                                else
                                                {
                                                    echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p>". "</td> </tr>";
                                                    foreach ($result2 as $row2) 
                                                    {
                                                        if ($row2['postId'] == $row1['id']) 
                                                        {
                                                            echo "<tr id=commentPart><td>" . $row2['blogComment'] . "</td></tr>";
                                                        }
                                                    }
                                                    $notShown = false;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        // situation 3
                        else
                            {
                                for($k=count($blogDateArray)-1; $k>=0; $k--)
                                {
                                    $notShown = true;
                                    foreach($result1 as $row1)
                                    {
                                        $blogDate = strtotime($row1["blogDate"]);
                                        if($row1["blogDate"]==$blogDateArray[$k] && $row1["blogTime"]==$blogTimeArray[$k] && $notShown)
                                        {
                                            if (isset($_SESSION["accountType"])) 
                                            {
                                                // situation a
                                                if($_SESSION["accountType"] == "admin")
                                                {
                                                    echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</p><a id='removeBlog' href='removeBlog.php?id=".$row1["id"]."'>Remove Blog</a></td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p><form method='post' id='addComment' action='addComment.php?id=".$row1["id"]."' ><input id='submitComment' type='submit' value='Add Comment' ><input required type='text' id='comment' name='blogComment'></form>". "</td> </tr>";
                                                    foreach ($result2 as $row2) 
                                                    {
                                                        if ($row2['postId'] == $row1['id']) 
                                                        {
                                                            echo "<tr id=commentPart><td>" . $row2['blogComment'] . "</td><td><a id='removeComment' href='removeComment.php?id=".$row2["id"]."'>Remove Comment</a></td></tr>";
                                                        }
                                                    }
                                                    $notShown = false;
                                                }
                                                // situation b
                                                else if($_SESSION["accountType"] == "viewer")
                                                {
                                                    echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p><form method='post' id='addComment' action='addComment.php?id=".$row1["id"]."' ><input id='submitComment' type='submit' value='Add Comment' ><input required type='text' id='comment' name='blogComment'></form>". "</td> </tr>";
                                                    foreach ($result2 as $row2) 
                                                    {
                                                        if ($row2['postId'] == $row1['id']) 
                                                        {
                                                            echo "<tr id=commentPart><td>" . $row2['blogComment'] . "</td></tr>";
                                                        }
                                                    }
                                                    $notShown = false;
                                                }
                                            }
                                            // situation c
                                            else
                                            {
                                                echo "<tr><td class=viewBlogTd>". "<h1 id='blogTitle'>". $row1["blogTitle"]. "</h1><p id='blogContent'>". $row1["blogContent"] ."</td><td>". "<p id='blogDate'>". $row1["blogDate"] . "</p>" ."<br>"."<p id='blogTime'>". $row1["blogTime"]."</p>". "</td> </tr>";
                                                foreach ($result2 as $row2) 
                                                {
                                                    if ($row2['postId'] == $row1['id']) 
                                                    {
                                                        echo "<tr id=commentPart><td>" . $row2['blogComment'] . "</td></tr>";
                                                    }
                                                }
                                                $notShown = false;
                                            }
                                        }
                                    }
                                }
                            }
                        $connection-> close();
                    ?>
                </table>
            </section>
        </div>
    </body>
</html>