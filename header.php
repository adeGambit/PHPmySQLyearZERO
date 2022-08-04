<?php 
    session_start();
?>
<!DOCTYPE HTML>
    <HTML>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta description. This will often show up in the search results">
        <meta name=viewport content="width=device-width, initial scale=1">
        <link rel="icon" type="image/x-icon" href="img/Picture 177 (2).png">
        <title>the DB</title>
        <link rel="stylesheet" href="style.css">
    <head>
    <body>  

        <header>    
            <nav>
                <br></br>
                <br></br>
                <a href="#">
                    <img src="img/Picture 177 (2).png" alt="logo"style="width:34px;height:34px;";>
                </a>
                <ul>
                    <li><a href="https://gtrcoders.com/">Home</a></li>
                    <li><a href="https://adegambit.github.io/">Portfolio</a></li>
                    <li><a href="https://adegambit.github.io/">About me</a></li><!--"just to fill up some space", he said, waving his hands around, wafting around the Eurotrash air around himself-->
                    <li><a href="https://adegambit.github.io/">Contact</a></li>
                </ul>
            </nav>
                <div>
                    <?php
                    //Cannot validate since a PHP installation could not be found. Use the setting '
                    //php.validate.executablePath
                    //' to configure the PHP executable.
                                    if(isset($_SESSION['userId'])){//checked for logged in
                                        echo '<form action="includes/logout.inc.php" method="post">
                                            <button type="submit" name="submit">Logout</button>
                                            </form>';
                                    }
                                    else{#checked for logged out
                                        echo '    <form action="includes/login.inc.php" method="post">
                                        <input type="text" name="uid" placeholder="Username/Email...">
                                        
                                        <input type="password" name="pwd" placeholder="Password...">
                                        <button type="submit" name="login-submit">Login</button>
                                       </form>
                                       <a href="signup.php">Signup</a>';
                                    }
                                    
                    ?>
                

                </div>
                   

        </header>

    </body>


    </HTML>